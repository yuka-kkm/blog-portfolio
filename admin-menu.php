<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <ul class="navbar-nav ms-5">
                <li class="nav-item"><a href="dashboard.php" class="nav-link text-white">Dashboard</a></li>
                <li class="nav-item"><a href="users.php" class="nav-link text-white">Users</a></li>
                <li class="nav-item"><a href="posts.php" class="nav-link text-white">Posts</a></li>
                <li class="nav-item"><a href="categories.php" class="nav-link text-white">Categories</a></li>
            </ul>
            <ul class="navbar-nav ms-auto me-5">
                <li class="nav-item"><a href="profile.php" class="nav-link text-white"><i class="fas fa-user-alt text-white"></i>Welcome <?=$_SESSION['full_name']?></a></li>
                <li class="nav-item"><a href="logout.php" class="nav-link text-white"><i class="fas fa-user-alt text-white"></i>Logout</a></li>
            </ul>
</nav>