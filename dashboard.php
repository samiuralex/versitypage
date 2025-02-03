<?php include 'navbar.php'; ?>


<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="./css/dashboard.css">
</head>
<body>
    
    <div class="name">
    <h2>Welcome, <?php echo htmlspecialchars($user['name']); ?>!</h2>
    </div>
    <p><strong>Username:</strong> <?php echo htmlspecialchars($user['username']); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
    <p><strong>Session:</strong> <?php echo htmlspecialchars($user['session']); ?></p>
    <p><strong>Department:</strong> <?php echo htmlspecialchars($user['department']); ?></p>
    <p><strong>Address:</strong> <?php echo htmlspecialchars($user['address']); ?></p>
    <button>
    <a href="logout.php">Logout</a>
    </button>
</body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<footer>
<?php include('footer.php'); ?>
</footer>

</html>
