<?php

include 'functions/user-functions.php';

if(isset($_POST['login'])){
    login();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/main-style.css">
</head>
<body>

    <div class="container">
        <div class="card w-50 my-3 mx-auto">
            <div class="card-header"><h1 class="text-center">LOGIN</h1></div>            
            <div class="card-body">
                <form action="" method="post">
                    <input type="text" name="username" class="form-control mb-4" placeholder="USERNAME">
                    <input type="password" name="password" class="form-control mb-4" placeholder="PASSWORD">
                    <button type="submit" name="login" class="btn btn-success w-100 text-center">ENTER</button>
                    
                </form>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-6 text-center"><a href="register.php" class="text-decoration-none text-dark">Create an Account</a></div>
                    <div class="col text-center"><a href="recover.php" class="text-decoration-none text-dark">Recover Account</a></div>
                </div>
                
            </div>
        </div>
    </div>
    
</body>
</html>