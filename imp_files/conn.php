<?php
$conn = mysqli_connect('localhost','root','','form_test');
if(!$conn){
    echo 'DataBase Connection Error : '.mysqli_connect_error();
}
?>