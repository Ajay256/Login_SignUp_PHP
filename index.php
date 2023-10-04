<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
<?php
require('imp_files/nav.php');
// session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
    header("location:login.php");
    exit;
}
?>
<div class="main">
    <div class="left-section">
        <h1>Hello Here, <?php echo $_SESSION['username'] ?></h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam cum blanditiis tempore rem adipisci nisi! Iusto voluptatibus adipisci voluptate ut.</p>
    </div>
    <div class="right-section">
        <img src="https://i.pinimg.com/originals/c6/3a/a7/c63aa71584634c34039e1e6a164dd138.jpg" alt="img">
    </div>
</div>
</body>
</html>