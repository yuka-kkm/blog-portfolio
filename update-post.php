<?php
session_start();
include 'functions/post-functions.php';

$post_row = getPostDetails($_GET['post_id']);

if(isset($_POST['update'])){
    updatePost($_GET['post_id']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1e63daaf3d.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <?php include 'admin-menu.php'?>
        <div class="container-fluid bg-primary bg-gradient text-white p-4 ps-5">
            <h2 class="display-2"><i class="fas fa-pen-nib me-5"></i>Post</h2>
        </div>
    </header>
    <main class="container w-50 mx-auto">
        <a href="#" class="text-secondary"><i class="fas fa-chevron-left fa-2x"></i></a>

        <h2 class="display-4 text-center my-4"><i class="fas fa-pen"></i>Update Post</h2>

        <form action="" method="post">
            
                <div>
                    <input type="text" name="title" class="form-control custom-form" placeholder="TITLE" value="<?= $post_row['post_title'] ?>" required autofocus>
            
                    <input type="date" name="date_posted" id="" class="form-control" value="<?= $post_row['date_posted'] ?>">    
                       
            
                    <select name="category_id" id="" class="form-select text-uppercase">
                        <?php
                        displayCategories();
                        ?>
                    </select>                
            
                    <textarea name="message" id="" cols="30" rows="10" class="form-control" placeholder="MESSAGE"><?= $post_row['post_message'] ?></textarea>
                        <div class="input-group">
                            <span class="input-group-text bg-dark rounded-0 text-white">Author</span>
                            <select name="author_id" class="form-select">
                                <?php    
                                displayUsers();
                                ?>
                            </select>
                        </div>

           
     
                    <button type="submit" name="update" class="btn btn-dark form-control my-4">POST</button>
                </div>

            
        </form>
    </main>
</body>
</html>