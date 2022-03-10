<?php
session_start();
include "functions/profile-functions.php";

?>

<?php
    if (isset($_POST['update_passw'])) {
        changePassword($_SESSION['account_id']);
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>change Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">
    <main class="container col-3 my5">
        <a href="profile.php" class="text-secondary text-decoration-none mb-3 d-block"> <i class="fas fa-chevron-left me-2"></i> Back to Profile </a>
        <div class="card">
            <div class="card-header bg-warning bg-gradient text-dark">
                <h2 class="display-4">Change Password</h2>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="mb-5">
                        <label for="current_passw">Current Password</label>
                        <input type="password" name="current_passw" id="current_passw" class="form-control" autofocus required>
                    </div>
                    <div class="mb-5">
                        <label for="new_passw">New Password</label>
                        <input type="password" name="new_passw" id="new_passw" class="form-control" required>
                    </div>
                    <div class="mb-5">
                        <label for="conf_passw">Confirm Password</label>
                        <input type="password" name="conf_new" id="conf_new" class="form-control" required>
                    </div>
                    <button type="submit" name="update_passw" class="btn btn-dark float-end">Update Password</button>
                </form>
            </div>
        </div>
    </main>

    
</body>
</html>