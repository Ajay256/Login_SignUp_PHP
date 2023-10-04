<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'imp_files/conn.php';
    $username = $_POST["uname"];
    $password = $_POST["password"];
    $sql = "Select username,password from data where username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location:index.php");
    }
    if($num==0){
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Enter Correct Details")';  
        echo '</script>'; 
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>login</title>
    <style>
        .form{
            display: flex;
            align-items: center; 
            flex-direction: column;
            margin-top: 100px;
            padding: 10px;
            background-color: #f2f2f2;
            width: 350px;
            height: 400px;
            margin-left: 20%;
            border-radius: 10px;
        }
        .form h3{
            margin-bottom: 5%;
            margin-top: 20px;
            font-size: 30px;
        }
        label{
            font-size: 20px;
            padding: 5px;
            font-weight: bold;
        }
        div{
            margin: 25px;
        }
        input[type="submit"]{
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
    </style>

</head>
<body>
    <?php
        require('imp_files/nav.php');
    ?>
    <div class="form">
        <h3>First Login the Page</h3>
    <form action="login.php" method = "post">
        <div>
            <label for="uname">UserName</label>
            <input type="text" name="uname" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <input type="submit" value="LogIn">
        </div>
    </form>
    </div>
</body>
</html>