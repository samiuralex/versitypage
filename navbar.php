<?php
// Check if a session is already started before calling session_start()
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/navbar.css">
    <title>Navigation</title>
</head>
<body>
<div class="navigation">
    <div class="shortmsg">
        <p>BAIUST is an Army Administrated University in Bangladesh</p>
    </div>
    <div class="title">
        <img src="img/logo.png" alt="BAIUST Logo">
        <h2>Bangladesh Army International University of Science and Technology (BAIUST)</h2>
    </div>
    <div class="nav">
        <a class="active" href="index.php">Home</a>
        <a href="admin.php">Admin</a>
        <a href="academic.php">Academic</a>
        <a href="faculties.php">Faculties</a>
        <a href="iumss.php">IUMSS</a>
    </div>
</div>

<nav class="navbar">
    <a href="signup.php">Sign Up</a>
    <a href="login.php">Login</a>
    <?php if (isset($_SESSION['user'])): ?>
        <a href="dashboard.php">Dashboard</a>
        <a href="logout.php">Logout</a>
    <?php endif; ?>
</nav>
</body>
</html>
