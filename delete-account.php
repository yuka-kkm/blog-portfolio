<?php

session_start();
include "functions/profile-functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="bg-light">
    <main class="container col-xl-3 my-5">
        <a href="profile.php" class="text-secondary text-decoration-none mb-3 d-block"> <i class="fas fa-chevron-left me-2"></i>Back to Profile</a>

        <div class="card">
            <div class="card-header bg-danger bg-gradient text-light">
                <h2 class="display-4">Delete Account</h2>
            </div>

            <div class="card-body">
                <?php
                if(isset($_POST['delete_account'])){
                    deleteAccount($_SESSION['account_id']);
                }
                ?>

                <form action="" method="post">
                    <div class="form-group mb-3">
                        <label for="password">Enter Password</label>
                        <input type="password" name="password" id="password" class="form-control" autofocus required>
                    </div>

                    <button type="submit" name="delete_account" class="btn btn-outline-danger btn-sm w-100"> <i class="fas fa-exclamation-circle fa-2x me-2" style="vertical-align:middle;"></i> Delete Account</button>
                </form>
            </div>
        </div>
    </main>

    
</body>
</html>