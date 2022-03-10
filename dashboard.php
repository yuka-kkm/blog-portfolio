<?php

session_start();


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

        <div class="container-fluid bg-danger text-white p-3 ">
            <h2> <i class="fas fa-user-cog"></i> Dashboard</h2>
        </div>
    </header>

    <div class="container-fluid bg-light p-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="add-post.php" class="btn btn-primary d-block"><i class="fas fa-plus-circle me-2"></i>Add Post</a>
                </div>
                <div class="col">
                    <a href="categories.php" class="btn btn-success d-block"><i class="fas fa-folder-plus me-2"></i>Add Category</a>
                </div>
                <div class="col">
                    <a href="users.php" class="btn btn-warning d-block"><i class="fas fa-user-plus me-2"></i>Add User</a>
                </div>
            </div>
        </div>
    </div>

        <br><br>

    <div class="container">

        <div class="row">
            <div class="col-9">

            <p>ALL POSTS</p>
            <table class="table  table-striped">
                <thead class="table-dark text-white">
                    <tr>
                        <th>#</th>
                        <th>TITLE</th>
                        <th>AUTHOR</th>
                        <th>CATEGORY</th>
                        <th>DATE POSTED</th>                
                        <th></th>
                    </tr>
                </thead>
                    <tr>
                        <td>5</td>
                        <td>Letter from the Admin</td>
                        <td>mark</td>
                        <td>General</td>
                        <td>Aug 15, 2021</td>                
                        <td><a href='' class='btn btn-sm btn-outline-dark'><i class='fas fa-angle-double-right'></i> Details</a></td>
                    </tr>
        
                    <tr>
                        <td>2</td>
                        <td>Hey, I am Mark!</td>
                        <td>mark</td>
                        <td>Programming</td>
                        <td>Aug 17, 2021</td>
                        <td><a href='#' class='btn btn-sm btn-outline-dark'><i class='fas fa-angle-double-right'></i> Details</a>
                        </td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>Welcome to me!</td>
                        <td>john</td>
                        <td>Programming</td>
                        <td>Aug 22, 2021</td>
                        <td><a href='#' class='btn btn-sm btn-outline-dark'><i class='fas fa-angle-double-right'></i> Details</a>
                        </td>
                    </tr>
                
            </table>
            </div>


            <div class="col-3">
                <div class="card bg-primary mb-4 border-5">
                    <div class="card-body text-center text-white">
                        <h3>Posts</h3>
                        <p class="fs-4"><i class="fas fa-pencil-alt"></i> 2</p>
                        <a href="posts.html" class="btn btn-outline-light btn-sm fw-bold text-uppercase">view</a>
                    </div>
                </div>

                <div class="card bg-success mb-4 border-5">
                    <div class="card-body text-center text-white">
                        <h3>Categories</h3>
                        <p class="fs-4"><i class="far fa-folder-open"></i> 3 </p>
                        <a href="categories.html" class="btn btn-outline-light btn-sm fw-bold text-uppercase">view</a>
                    </div>
                </div>

                <div class="card bg-warning border-5">
                    <div class="card-body text-center text-white">
                        <h3>Users</h3>
                        <p class="fs-4"><i class="fas fa-users"></i> 2 ss</p>
                        <a href="users.html" class="btn btn-outline-light btn-sm fw-bold text-uppercase">view</a>
                    </div>
                </div>



            </div>
        </div>

    </div>

    
    <script src="https://kit.fontawesome.com/1e63daaf3d.js" crossorigin="anonymous"></script>
</body>
</html>