<?php

session_start();

include 'functions/post-functions.php';

if(isset($_POST['add'])){
    addPost();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add-post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<header> 
    <?php include "admin-menu.php" ?> 
    <div class="container-fluid bg-primary text-white p-3">
        <h2> <i class="fas fa-pen-nib"></i> Post</h2>
    </div> 
</header>
    <div class="container-fluid" style="margin-top:100px;">
        <h2 class="display-3 text-center mt-4"><i class="far fa-edit"></i> Add Post</h2>
    </div>
    <div class="container mt-5 mx-auto w-50">
        <form action="" method="post">
            <div class="form-row">
                <div class="form-group col-md-10 mx-auto">
                    <input type="text" name="title" id="" class="form-control lighto custom-form" placeholder="TITLE">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-10 mx-auto">
                    <input type="date" name="date_posted" id="" class="form-control lighto custom-form">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-10 mx-auto">
                    <select name="category_id" id="" class="form-select">
                        <?php
                        
                        displayCategories();

                        ?>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-10 mx-auto">
                    <textarea name="message" id="" class="form-control lighto custom-form" rows="7"
                        placeholder="MESSAGE"></textarea>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-10 mx-auto">
                    <div class="input-group mt-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-dark text-white" id="basic-addon1">Author:</span>
                        </div>
                        <select name="author_id" id="" class="form-select">
                            <?php
                                displayUsers();
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-10 mx-auto">
                    <button type="submit" name="add" class="btn btn-dark form-control mt-4">POST</button>
                </div>
            </div>
        </form>
    </div>
    



    <!-- <script src="https://kit.fontawesome.com/319afa374e.js"></script> -->
    <script src="https://kit.fontawesome.com/1e63daaf3d.js" crossorigin="anonymous"></script>

</body>
</html>