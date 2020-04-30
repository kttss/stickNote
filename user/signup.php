<?php
require("user.php");

$username=$_POST['username'];
$password=$_POST['password'];
$confirm=$_POST['confirmpassword'];

    if($username  && $password && $confirm && ($password == $confirm )  ){
        addUser($username,$password);
    }else{
        header("location:./../../notes/login.php");
    }
?>