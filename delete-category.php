<?php

include 'functions/category-functions.php';

$cat_id = $_GET['cat_id'];
$cat_details = getCategory($_GET['cat_id']);

if(isset($_POST['btn_delete'])){
    deleteCategory($cat_id);
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="card w-25 mx-auto border-0 my-5">
        <div class="card-header text-danger text-center">
            <h2 class="card-title">Delete Product</h2>
        </div>
        <div class="card-body text-center">
            <i class="fas fa-exclamation-triangle text-warning display-4"></i>
            <p class="text-center fw-bold">Are you sure you want to delete "<?=$cat_details['category_name']?>"</p>
        </div>
      
            <div class="row">
                <div class="col"><a href="categories.php" class="btn btn-secondary text-white w-100">Cancel</a></div>
                <div class="col">
                    <form action="" method="post">
                        <button type="submit" class="btn btn-outline-danger text-danger w-100" name="btn_delete" >Delete</button>
                    </form>
                </div>
            </div>
        
        

    
   
    
    
    </div>
    
</body>
</html>