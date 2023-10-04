<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'imp_files/conn.php';
    $username = $_POST["uname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $existsql = "Select * from data where username = '$username'";
    $result = mysqli_query($conn,$existsql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        $showError = "username already exists. ";
    }
    else{
        if($username == "" && $password == ""){
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Fill the details")';  
            echo '</script>'; 
        }
        else{
            $sql = "INSERT INTO data (username, email, password, datetime) VALUES ('$username', '$email', '$password', current_timestamp())";

            $result = mysqli_query($conn, $sql);
            if($result){
                header("location:login.php");
            }
        }
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SignUp</title>
    <style>
        .form{
            display: flex;
            align-items: center; 
            flex-direction: column;
            margin-top: 100px;
            padding: 10px;
            background-color: #f2f2f2;
            width: 350px;
            height: 500px;
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
            margin-right: 10px;
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
        input[type=text], input[type=password], input[type=email] {
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
        <h3>Create An Account</h3>
    <form action="signUp.php" method = "post">
        <div>
            <label for="uname">UserName</label>
            <input type="text" name="uname" required>
        </div>
        <div>
            <label for="Email">Email</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" required>
        </div>
        <input type="submit" value="SignUp">
    </form>
    </div>
</body>
</html>