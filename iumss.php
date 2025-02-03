<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/iumss.css">
    <title>IUMSS</title>
</head>
<body>
    <div class="nav">
        <a href="index.php">Home</a>
        <a href="admin.php">Admin</a>
        <a href="academic.php">Academic</a>
        <a class="active" href="faculties.php">Faculties</a>
    </div>
    <div class="logo">
        <img src="img/logo.png" alt="">
    </div>
    <div class="subtitle">
        <p>Integrated University Management Software Solution. <br> IUMSS</p>
    </div>


<form action="/action_page.php" method="post">

  <div class="container">
    <label for="uname"><b>Student ID</b></label>
    <input type="text" placeholder="Enter Student ID" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
<footer>
<?php include('footer.php'); ?>
</footer>
</body>
</html>