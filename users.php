<?php

session_start();

include 'functions/user-functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header>
        <?php
            include "admin-menu.php";
        ?>

            <div class="container-fluid bg-warning text-white p-3 ">
                <h2> <i class="fas fa-user-edit"></i> User</h2>
            </div>
    </header>
  
<br><br>

<div class="container">
    

    <br>

    <div class="card">        
        <div class="card-body">
            <form action="" method="post">
            <h1>Add User</h1>
            <div class="row">
                <div class="col">
                    <input type="text" name="first_name" placeholder="First Name" class="form-control mb-2">                
                </div>
                <div class="col">
                    <input type="text" name="last_name" placeholder="Last Name" class="form-control mb-2">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="tel" name="contact_number" placeholder="Contact Number" class="form-control mb-2">
                </div>
                <div class="col">
                    <input type="text" name="address" placeholder="Address" class="form-control mb-2">
                </div>
            </div>
            
            <div class="col">
                <input type="text" name="username" placeholder="Username" class="form-control mb-2">
            </div>

            <div class="col">
                <input type="password" name="password" placeholder="Password" class="form-control mb-3">
            </div>

            <button type="submit" class="btn btn-warning text-white text-center w-100" name="add">ADD</button>

            </form>

            <?php
            if(isset($_POST['add'])){
                addUser();
            }

            ?>
            
        </div>

        <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>ACCOUNT ID</th>
                <th>FULL NAME</th>
                <th>CONTACT NUMBER</th>
                <th>ADDRESS</th>
                <th>USERNAME</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                displayAllUsers();
            ?>
            
        </tbody>
    </table>
    
    </div>

    <br>

</div>
    
    <script src="https://kit.fontawesome.com/1e63daaf3d.js" crossorigin="anonymous"></script>
</body>
</html>