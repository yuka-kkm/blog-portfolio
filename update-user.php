<?php
session_start();
include 'functions/user-functions.php';
$user_details = displayProfile($_GET['account_id']);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
    <header>
    <?php
        
        if($_SESSION['role'] =="U"){
            include 'user-menu.php';
        }else{
            include 'admin-menu.php';
        }
    ?>

    <div class="container-fluid bg-secondary text-white p-3">
        <h2> <i class="fas fa-user"></i> Update User</h2>
    </div>
    
    <br><br>

<div class="container-fluid bg-light p-5">
    <div class="row">
        <div class="col">
            <button type="button" class="bg-primary form-control w-50 col-6 ms-auto"><i class="fas fa-lock"></i>Change Password</button>
        </div>
        <div class="col">
            <button type="button" class="bg-danger form-control w-50 col-6"><i class="fas fa-trash-alt"></i>Delete Account</button>
        </div>
    </div>

</header>

    <main class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-8">

                    <?php
                   if(isset($_POST['update'])){
                       updateProfile($_GET['account_id']);
                    }
                    ?>

                    <div class="row">
                        <div class="col-6 mb-1">First Name</div>
                        <div class="col-6 mb-1">Last Name</div>
                    </div>
                    <div class="row">
                        <div class="col-6 mb-2"><input type="text" name="first_name" placeholder="Mark" class="form-control" value="<?=$user_details['first_name']?>"></div>
                        <div class="col-6 mb-2"><input type="text" name="last_name" placeholder="Lee" class="form-control" value="<?=$user_details['last_name']?>"></div>
                    </div>
                    <div class="row">
                        <div class="col-8 mb-1">Address</div>
                        <div class="col-4 mb-1">Contact Number</div>
                    </div>
                    <div class="row">
                        <div class="col-8 mb-2"><input type="text" name="address" placeholder="California, USA" class="form-control" value="<?=$user_details['address']?>"></div>
                        <div class="col-4 mb-2"><input type="tel" name="contact_number" placeholder="78-785547-452" class="form-control" value="<?=$user_details['contact_number']?>"></div>
                    </div>
                    <div class="row">
                        <div class="col mb-1">Username</div>
                    </div>
                    <div class="row">
                        <div class="col mb-2"><input type="text" name="username" placeholder="mark" class="form-control" value="<?=$user_details['username']?>"></div>
                    </div>
                    <div class="row">
                        <div class="col mb-1">Password</div>
                    </div>
                    <div class="row">
                        <div class="col mb-4"><input type="password" name="password" placeholder="Enter password to confirm" class="form-control"></div>
                    </div>
                    <div class="text-center mt-4">
                    <a href="users.php" class='btn btn-outline-primary w-20'>Cancel</a>
                    <button type="submit" name="update" class="btn btn-primary w-25 text-center px-3">UPDATE</button>                    
                    </div>
                </div>
            
                <div class="col-4">
                    <img src="images/<?= $user_details['avatar']?>" class="w-100 mb-2">
                    <input type="file" name="avatar" aria-label="Choose Photo" accept="image/*">
                </div>
            </div>
        </form>
    </main>

    <br><br>

    <script src="https://kit.fontawesome.com/1e63daaf3d.js" crossorigin="anonymous"></script>
    
</body>
</html>