<?php

session_start();

include 'functions/post-functions.php';

if(isset($_POST['add_post_by_user'])){
    addPostByUser($_SESSION['account_id']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post by User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<header> 
    <?php include "user-menu.php" ?> 
    <div class="container">
        <h2 class="display-3 mt-4 text-center"><i class="far fa-edit"></i> Add Post</h2>
    </div>
</header>
    <div class="container mt-5 w-50">
        <form action="" method="post">
            <div class="form-row">
                <div class="form-group">
                    <input type="text" name="title" class="form-control custom-form" placeholder="TITLE">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group mx-auto">
                    <input type="date" name="date_posted" id="" class="form-control">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <select name="category_id" id="" class="form-control text-uppercase">
                        <?php
                        displayCategories();
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <textarea name="message" id="" cols="30" rows="10" class="form-control" placeholder="MESSAGE"></textarea>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <button type="submit" name="add_post_by_user" class="btn btn-dark form-control my-4">POST</button>
                </div>
            </div>

            
        </form>
    </div>
    



    <script src="https://kit.fontawesome.com/1e63daaf3d.js" crossorigin="anonymous"></script>

</body>
</html>