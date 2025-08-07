<?php
require_once 'includes/auth.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP User Auth</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>PHP User Auth</h1>
        <nav>
            <?php if (isLoggedIn()): ?>
                <?php if (isAdmin()): ?>
                    <a href="admin_dashboard.php">Admin Dashboard</a>
                <?php else: ?>
                    <a href="user_dashboard.php">User Dashboard</a>
                <?php endif; ?>
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <a href="login.php">Login</a>
                <a href="register.php">Register</a>
            <?php endif; ?>
        </nav>
    </header>
    <div class="container">
        <h2>Welcome to PHP User Auth</h2>
        <p>Secure login system with role-based access.</p>
    </div>
</body>
</html>