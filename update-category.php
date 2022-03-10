<?php

session_start();

include "functions/category-functions.php";

$cat_details = getCategory($_GET['cat_id']);
// print_r($cat_details);

if(isset($_POST['update_category'])){
    updateCategory($_GET['cat_id']);
}


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
            include "admin-menu.php";
        ?>

        <div class="container-fluid bg-success text-white p-3">
            <h2> <i class="fas fa-folder me-1"></i> Category</h2>
        </div>
    </header>

<br><br>

    <div class="container">

        
            <form action="" method="post">
                <div class="w-25 mx-auto">            
                    <input type="text" name="category_name" id="category_name" placeholder="" class="form-control" value="<?=$cat_details['category_name']?>" autofocus>
                
                    <button class="btn btn-success text-white w-100 mt-2" type="submit" name="update_category">UPDATE</button>
                    <a href="categories.php" class='btn btn-outline-dark w-100 mt-2'>Cancel</a>
                </div>

                
            </form>
    </div>
</body>
</html>