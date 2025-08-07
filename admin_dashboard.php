<?php
require_once 'includes/auth.php';
requireLogin();
requireAdmin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>PHP User Auth</h1>
        <nav>
            <a href="admin_dashboard.php">Admin Dashboard</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>
    <div class="container">
        <h2>Welcome, Admin <?php echo $_SESSION['username']; ?>!</h2>
        <p>This is the admin dashboard with elevated privileges.</p>
    </div>
</body>
</html>