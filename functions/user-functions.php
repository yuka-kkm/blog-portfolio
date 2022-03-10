

<?php

require_once 'connection.php';

function register(){
    $conn = dbconnect();
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $contact_number = $_POST['contact_number'];
    $username = $_POST['username'];
    $password =  password_hash($_POST['password'], PASSWORD_DEFAULT);
    $avatar = 'profile.jpg';

    $sql_accouts= "INSERT INTO accounts (`username`, `password`) VALUES ('$username', '$password')";

    if ($conn->query($sql_accouts)){
        // insert_id will get the last ID generated in the previous table
        $account_id = $conn->insert_id;

        $sql_accouts = "INSERT INTO users (first_name, last_name, `address`, contact_number, avatar, account_id) VALUES ('$first_name', '$last_name', '$address', '$contact_number', '$avatar', $account_id)";
    
        if($conn->query($sql_accouts)){
            header("location: login.php");
            exit;
        }else{
            echo "<div class='alert alert-danger text-center fw-bold' rolw='alert'> Error in USERS table: " . $conn->error . "</div>";
        }
    
    }else{
        echo "<div class='alert alert-danger text-center fw-bold' rolw='alert'> Error in ACCOUNTS table: " . $conn->error . "</div>";
    }

}

function login(){

    $conn = dbConnect();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $error = "<div class='alert alert-danger text-center fw-bold' rolw='alert'> Incorrect Username or Password </div>";

    $sql = "SELECT * FROM accounts WHERE username = '$username'";

    if ($result = $conn->query($sql)){
        if($result->num_rows==1){
            $user_details = $result->fetch_assoc();
            if (password_verify($password, $user_details['password'])){
                session_start();
                $_SESSION['account_id']=$user_details['account_id'];
                $_SESSION['role']=$user_details['role'];
                $_SESSION['full_name']=getFullName($user_details['account_id']);

                if ($user_details['role'] =="U"){
                    header("location: profile.php");
                }elseif($user_details['role'] =="A"){
                    header("location: dashboard.php");
                }
                exit;
            }else{
                echo $error;
            }
        }else{
            echo $error;
        }
    }else{
        die("Error: " . $conn->error);
    }
}

function getFullName($account_id){
    $conn = dbConnect();
    $sql = "SELECT first_name, last_name FROM users WHERE account_id = $account_id";

    if($result = $conn->query($sql)){
        $full_name = $result->fetch_assoc();
        return $full_name['first_name'] . " " . $full_name['last_name'];
    }else{
        die("Error: " . $conn->error);
    }
}

 function addUser(){
     $conn = dbconnect();
     $first_name = $_POST['first_name'];
     $last_name = $_POST['last_name'];
     $contact_number = $_POST['contact_number'];
     $address = $_POST['address'];
     $username = $_POST['username'];
     $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
     $avatar = "profile.jpg";

     $sql_accounts = "INSERT INTO `accounts`(`username`, `password`) VALUES ('$username', '$password')";

     if ($conn->query($sql_accounts)){
        // insert_id will get the last ID generated in the previous table
        $account_id = $conn->insert_id;

        $sql_accouts = "INSERT INTO users (first_name, last_name, `address`, contact_number, avatar, account_id) VALUES ('$first_name', '$last_name', '$address', '$contact_number', '$avatar', $account_id)";
    
        if($conn->query($sql_accouts)){
            echo "<div class='mt-4 alert alert-success text-center fw-bold' role='alert'> NEW USER ADDED: $first_name $last_name </div>";
            // header("location:users.php");
            // exit;
        }else{
            echo "<div class='alert alert-danger text-center fw-bold' rolw='alert'> Error creating user: " . $conn->error . "</div>";
        }
    
    }else{
        echo "<div class='alert alert-danger text-center fw-bold' rolw='alert'> Error in ACCOUNTS table: " . $conn->error . "</div>";
    }
 }


 function displayAllUsers(){
     $conn = dbconnect();

     $sql = "SELECT * FROM users INNER JOIN accounts on accounts.account_id = users.account_id WHERE accounts.role = 'U' ";

     $result = $conn->query($sql);

     if($result->num_rows > 0){
         while($row = $result->fetch_assoc()){
             echo "
                <tr>
                    <td>" .$row['account_id']."</td>
                    <td>" .$row['first_name']." " . $row['last_name'] . "</td>
                    <td>" .$row['contact_number']."</td>
                    <td>" .$row['address']."</td>
                    <td>" .$row['username']."</td>
                    <td> <a href='update-user.php?account_id=".$row['account_id']."' class='btn btn-sm btn-warning text-white'> Update </a> </td>
                    <td> <a href='delete-user.php?account_id=".$row['account_id']."' class='btn btn-sm btn-danger text-white'> Delete </a> </td>
                </tr>
                ";
         }
     }

 }


 function displayProfile($profile_id){
     $conn = dbConnect();
     $sql = "SELECT * FROM accounts INNER JOIN users ON accounts.account_id = users.account_id WHERE accounts.account_id = '$profile_id'";

     $result = $conn->query($sql);     
     if($result->num_rows == 1){
         return $result->fetch_assoc();
     }else{
         echo "No user Found: ". $conn->error;
     }
 }


 function updateProfile($account_id){
     $conn = dbConnect();
     $password = $_POST['password'];
     $db_password = getPassword($account_id);
     
     echo $_FILES['avatar']['name'];
     if(password_verify($password, $db_password)){
         $first_name = $_POST['first_name'];
         $last_name = $_POST['last_name'];
         $address = $_POST['address'];
         $contact_number = $_POST['contact_number'];
         $username = $_POST['username'];
         $avatar_name = $_FILES['avatar']['name'];
         $avatar_tmp = $_FILES['avatar']['tmp_name'];

         $sql = "UPDATE accounts INNER JOIN users ON users.account_id SET users.first_name = '$first_name', users.last_name = '$last_name', users.address = '$address', users.contact_number = '$contact_number', accounts.username = '$username' WHERE accounts.account_id = $account_id";

         if($conn->query($sql)){
            //  New Avatar(Photo)
            if(!empty($avatar_name)){
                $sql_avatar = "UPDATE users SET avatar = '$avatar_name' WHERE account_id = $account_id";

                $conn->query($sql_avatar);

                if($conn->error){
                    die("Error: " . $conn->error);
                }
                $destination = "images/$avatar_name";
                move_uploaded_file($avatar_tmp, $destination);
            }
            header("location: users.php");
            exit;
         }else{
             die("Error: " .$conn->error);
         }
     }else{
         echo "<div class='alert alert-danger text-center fw-bold role='alerts'> Incorrect Password. </div>";
     }
 }


 function getPassword($account_id){
    $conn = dbConnect();
    $sql = "SELECT `password` FROM accounts WHERE account_id = $account_id";
    if($result = $conn->query($sql)){
        $row = $result->fetch_assoc();
        return $row['password'];
    }
 }


 function deleteUser($account_id){
     $conn = dbConnect();
     $tables=['users', 'accounts', 'posts'];
     foreach($tables as $table){
         $sql = "DELETE FROM $table WHERE account_id = $account_id";
         $conn->query($sql);

         if($conn->error){
             die("Error: " . $conn->error);
         }
     }
     header("location: users.php");
     exit;
 }

?>