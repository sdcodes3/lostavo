<?php

require("../db.php");

$uname = $_POST['uname'];
$upass = $_POST['pass'];

if(isset($_POST['submit'])){
    $sql = "SELECT * FROM `user` WHERE email = '".$uname."' and password = '".$upass."'";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result) >= 1){
        header('location:..\index.html');
    }
    else{
        echo "Wrong";
    }
}


?>