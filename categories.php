<?php

session_start();

include "functions/category-functions.php";


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
                <div class="row mt-1">
            
                    <div class="col-4 me-1 text-end">ADD Category</div>

                    <div class="col">
                        <input type="text" name="category_name" id="category_name" placeholder="" class="form-control">
                    </div>
                <div class="col"><button class="btn btn-success text-white" type="submit" name="add_category">ADD</button></div>
                </div>
            </form>

            <?php
                if(isset($_POST['add_category'])){
                    addCategory();
                }

            ?>

        <br><br>
        
        <div class="row mt-1">            
            <div class="col">
                <table class="table table-striped text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>CATEGORY ID</th>
                            <th>CATEGORY NAME</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
        
                    <tbody>
                        <?php
                            displayCategories();

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>

    <script src="https://kit.fontawesome.com/1e63daaf3d.js" crossorigin="anonymous"></script>
</body>
</html>