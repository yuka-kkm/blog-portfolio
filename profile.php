<?php

session_start();

include "functions/profile-functions.php";
$user_details = getProfileDetails($_SESSION['account_id']);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
        <h2> <i class="fas fa-user"></i> Profile</h2>
    </div>
    
    <br><br>

<div class="container-fluid bg-light p-5">
    <div class="row">
        <div class="col">
            <a href="change-password.php">
            <button type="button" class="bg-primary form-control w-50 col-6 ms-auto"><i class="fas fa-lock"></i>Change Password</button></a>
        </div>
        <div class="col">
        <a href="delete-account.php" class="text-decoration-none">
            <button type="button" class="bg-danger form-control w-50 col-6"><i class="fas fa-trash-alt"></i>Delete Account</button></a>
        </div>
    </div>

</header>

    <main class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-8 px-5">
                    <?php

                        if(isset($_POST['update'])){
                            updateProfile($_SESSION['account_id']);
                        }
                    ?>
                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="first-name" class="small form-label">First Name</label>
                            <input type="text" name="first_name" id="first-name" class="form-control" required autofodus value="<?= $user_details['first_name']?>">
                        </div>

                        <div class="col-6">
                            <label for="last-name" class="small form-label">Last Name</label>
                            <input type="text" name="last_name" id="last-name" class="form-control" required value="<?= $user_details['last_name']?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-8">
                            <label for="address" class="small form-label">Address</label>
                            <input type="text" name="address" id="address" class="form-control" required value="<?= $user_details['address']?>">
                        </div>

                        <div class="col-md-4">
                            <label for="contact_number" class="small form-label">Contact Number</label>
                            <input type="text" name="contact_number" id="contact_number" class="form-control" required value="<?= $user_details['contact_number']?>">
                        </div>
                    </div>

                    <label for="username" class="small form-label">Username</label>
                    <input type="text" name="username" id="username" class="form-control mb-3" required value="<?= $user_details['username']?>">

                    <label for="password" class="small form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control mb-3" required placeholder="Enter password to confirm">

                    <button type="submit" name="update" class="btn btn-primary text-uppercase w-100">UPDATE</button>
                </div>

                <div class="col-4">
                    <img src="images/<?=$user_details['avatar']?>" alt="user-profile" class="w-100 mb-2">
                    <input type="file" name="avatar" class="form-control" aria-label="Choose Photo" accept="image/*">
                </div>
            </div>
        </form>   

    </main>

    <br><br>

    <script src="https://kit.fontawesome.com/1e63daaf3d.js" crossorigin="anonymous"></script>
</body>
</html>