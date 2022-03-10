<?php
    session_start();

    include "functions/post-functions.php";
    
    $post_details = getPostDetails($_GET['post_id']);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/1e63daaf3d.js" crossorigin="anonymous"></script>

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
     <div class="row">
        <div class="col"> <a href="posts.php"> <i class="fas fa-chevron-left fa-2x mb-3 text-secondary"></i></a></div>
        <div class="col text-end"> <a href="update-post.php?post_id=<?=$_GET['post_id']?>" class='text-decoration-none text-secondary'> <i class="fas fa-pen fa-1x"></i> Edit </a> </div>
     </div>
 
     <div class="card bg-light border-0 p-2">
        <div class="card-body">
            <h1><?=$post_details['post_title']?></h1>
            <p>By: <?=$post_details['first_name']?> <?=$post_details['last_name']?> <span class='ms-2'><?=$post_details['date_posted']?></span> <span class='ms-2'><?=$post_details['category_name']?></span> </p>
            <div class="row"> <p><?=$post_details['post_message']?></p> </div>            
         </div>
     </div>
 </div>

    
</body>
</html>