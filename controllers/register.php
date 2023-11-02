<?php

require("../db.php");

if(isset($_POST['submit'])){
    $errorMsg = "";
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            $errorMsg = "File is not an image";
            $uploadOk = 0;
        }
    }

    if (file_exists($target_file)) {
        $errorMsg = "Sorry, file already exists.";
        $uploadOk = 0;
    }

    if($uploadOk == 1) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
            $errorMsg = "Sorry, there was an error uploading your file.";
        }
    }

    if($errorMsg != ""){
        echo $errorMsg;
    }
    
    $uname = $_POST['uname'];
    $umail = $_POST['umail'];
    $upass = $_POST['pass'];
    $uimage = htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
    
    $sql1 = "SELECT * FROM `user` WHERE email = '".$umail."'";
    $res1 = mysqli_query($con, $sql1);
    if(mysqli_num_rows($res1) >= 1){
        echo "User already registered";
    }
    else{
        $sql2 = "INSERT INTO `user` VALUES(NULL, '$uname', '$umail', '$upass', '$uimage');";
        $res2 = mysqli_query($con, $sql2);
        if($res2){
            if($errorMsg == ""){
                header("location:../index.html");
            }
            else{
                echo "\nRegistration Success";
            }
        }
        else{
            echo "Error".mysqli_error($res2);
        }
    }
}
else{
    header("location:../register.php");
}
?>