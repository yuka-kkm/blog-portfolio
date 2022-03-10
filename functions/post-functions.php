<?php

require 'connection.php';

function displayCategories(){
    $conn = dbConnect();

    $sql = "SELECT * FROM categories";

    if($result = $conn->query($sql)){
        if($result->num_rows > 0){
            echo "<option value='' hidden> CATEGORY </option>";
            while($row=$result->fetch_assoc()){
                echo "<option value='" . $row['category_id']."'>" .$row['category_name']."</option>";
            }
        }else{
            echo "<option value='' hidden> No Category Found </option>";
        }
    }else{
        die("Error: " . $conn->error);
    }
}


function displayUsers(){
    $conn = dbConnect();

    $sql = "SELECT * FROM accounts";

    if($result = $conn->query($sql)){
        if($result->num_rows > 0){
            echo "<option value='' hidden> SELECT AUTHOR </option>";
            while($row=$result->fetch_assoc()){
                echo "<option value='" . $row['account_id']."'>" .$row['username']."</option>";
            }
        }else{
            echo "<option value='' hidden> No Accounts Found </option>";
        }
    }else{
        die("Error: " . $conn->error);
    }
}

function addPost(){
    $conn = dbConnect();
    $title = $_POST['title'];
    $date_posted = $_POST['date_posted'];
    $category_id = $_POST['category_id'];
    $message = $_POST['message'];
    $author_id = $_POST['author_id'];

    $sql = "INSERT INTO posts(`post_title`, `post_message`, `date_posted`, `account_id`, `category_id`) VALUES ('$title', '$message', '$date_posted', $author_id, $category_id)";

    if ($conn->query($sql)){
        header("location: posts.php");
        exit;
    }else{
        die("Error: " . $conn->error);
    }
}


function addPostByUser($user_id){
    $conn = dbConnect();
    $title = $_POST['title'];
    $date_posted = $_POST['date_posted'];
    $category_id = $_POST['category_id'];
    $message = $_POST['message'];

    $sql = "INSERT INTO posts(`post_title`, `post_message`, `date_posted`, `account_id`, `category_id`) VALUES ('$title', '$message', '$date_posted', $user_id, $category_id)";

    if ($conn->query($sql)){
        header("location: posts.php");
        exit;
    }else{
        die("Error: " . $conn->error);
    }
}


function displayUserPosts($user_id){
    $conn = dbConnect();
    $sql = "SELECT * FROM posts INNER JOIN categories ON categories.category_id = posts.category_id WHERE account_id = $user_id
    ORDER BY date_posted";

    if($result = $conn->query($sql)){
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "
                    <tr>
                        <td>".$row['post_id']."</td>
                        <td>".$row['post_title']."</td>
                        <td>".$row['category_name']."</td>
                        <td>".$row['date_posted']."</td>
                        <td>
                            <a href='post-details.php?post_id=".$row['post_id']."' class='btn btn-sm btn-outline-dark'><i class='fas fa-angle-double-right'></i> Details </a>
                        </td>                  
                                        
                    </tr>                             
                ";
            }
        }else{
            echo "
                <tr>
                    <td colspan='5' class='text-center lead fst-italic fw-bold'> No Records Found </td>
                </tr>                
            ";
        }
    }else{
        die("Error:" .  $conn->error);
    }
}



function getPostDetails($post_id){
    $conn = dbConnect();
    $sql="SELECT * FROM posts
            INNER JOIN categories ON categories.category_id = posts.category_id
            INNER JOIN users ON users.account_id = posts.account_id
            WHERE post_id= $post_id";
    if($result=$conn->query($sql)){
        return $result->fetch_assoc();
    }else{
        die("Error: " . $conn->error);
    }

}


function updatePost($post_id){
    $conn = dbConnect();
    $title = $_POST['title'];
    $date_posted = $_POST['date_posted'];
    $category_id = $_POST['category_id'];
    $message = $_POST['message'];
    $author_id = $_POST['author_id'];

    $sql = "UPDATE posts SET post_title = '$title', date_posted = '$date_posted', category_id = '$category_id', post_message = '$message', account_id = $author_id WHERE post_id = $post_id";

    if($conn->query($sql)){
        header("location: posts.php");
        exit;
    }else{
        die("Error: " . $conn->error);
    }
}


function updatePostByUser($post_id){
    $conn = dbConnect();
    $title = $_POST['title'];
    $date_posted = $_POST['date_posted'];
    $category_id = $_POST['category_id'];
    $message = $_POST['message'];


    $sql = "UPDATE posts SET post_title = '$title', date_posted = '$date_posted', category_id = '$category_id', post_message = '$message' WHERE post_id = $post_id";

    if($conn->query($sql)){
        header("location: posts.php");
        exit;
    }else{
        die("Error: " . $conn->error);
    }
}