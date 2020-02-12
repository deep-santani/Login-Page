<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $connection =  mysqli_connect("localhost","root","","hostelmgt_db","3306");
    $sql ="select * from login_tbl where username = '$username' and password = '$password'";
    
    $result = mysqli_query($connection,$sql);
    $row = mysqli_fetch_array($result);
 
    if($row){     
        header("location:home.php");
    }else{
        header("location:login.php?error=1");
    }
?>