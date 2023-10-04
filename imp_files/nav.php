<?php
    $loggedin = false;
    session_start();
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
        $loggedin = true;
    }
  echo '<nav>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="#">Sevices</a></li>
            <li><a href="#">About Us</a></li>';
            if($loggedin){
                echo '<li><a href="logout.php">LogOut</a></li>';
            }
            if(!$loggedin){
                echo '<li><a href="login.php">Log In</a></li>
                    <li><a href="signUp.php">Create Account</a></li>';
            }
        echo '</ul>
    </nav>';
?>
