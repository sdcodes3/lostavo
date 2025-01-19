<?php

require("../db.php");

$uname = $_POST['uname'];
$upass = $_POST['pass'];

if(isset($_POST['submit'])){
    $sql = "SELECT * FROM `user` WHERE email = '".$uname."' and password = '".$upass."'";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result) >= 1){
        $cookie_name = "loginStatus";
        $cookie_value = "success";
        setcookie($cookie_name, $cookie_value, time() + 86400, "/"); // 86400 = 1 day
        header('location:..\index.html');
    }
    else{
        $cookie_name = "loginStatus";
        $cookie_value = "error";
        setcookie($cookie_name, $cookie_value, time() + 86400, "/"); // 86400 = 1 day
        header('location:..\login.php');
        // echo "Wrong";
    }
}


?>