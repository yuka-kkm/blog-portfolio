<?php
session_start();
include 'functions/post-functions.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
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

    <div class="container-fluid bg-primary text-white p-3">
        <h2> <i class="fas fa-pen-nib"></i> Post</h2>
    </div>
 <br><br>
 </header>

 <div class="container">
     <div class='text-end'>
         <?php if($_SESSION['role']=='U'){ ?>
            <a href="add-post-by-user.php" class="btn btn-lg btn-outline-dark"> <i class="fas fa-edit"> </i> Add Post </a>
         <?php }else{ ?>
            <a href="add-post.php" class="btn btn-lg btn-outline-dark"> <i class="fas fa-edit"> </i> Add Post </a>
         <?php } ?>
     </div>
    <table class="table  table-striped mt-3">
        <thead class="table-dark text-white">
            <tr>
                <th>POST ID</th>
                <th>TITLE</th>
                <th>CATEGORY</th>
                <th>DATE POSTED</th>                
                <th></th>
            </tr>
        </thead>

        <tbody>
            <?php
            displayUserPosts($_SESSION['account_id']);
            ?>
        </tbody>
    </table>
</div>
    




    <script src="https://kit.fontawesome.com/1e63daaf3d.js" crossorigin="anonymous"></script>

    
</body>
</html>