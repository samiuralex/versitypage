<?php include 'navbar.php'; ?>

<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $session = $_POST['session'];
    $department = $_POST['department'];
    $address = $_POST['address'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $pdo->prepare("INSERT INTO users (name, username, email, session, department, address, password) VALUES (?, ?, ?, ?, ?, ?, ?)");
    if ($stmt->execute([$name, $username, $email, $session, $department, $address, $password])) {
        echo "<script>alert('Registration successful!'); window.location='login.php';</script>";
    } else {
        echo "Error in registration.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="./css/form.css">
</head>
<body>
    <form method="POST">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="session" placeholder="Session" required>
        <input type="text" name="department" placeholder="Department" required>
        <input type="text" name="address" placeholder="Address" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Sign Up</button>
    </form>
</body>
<br>

<footer>
<?php include('footer.php'); ?>
</footer>
</html>
