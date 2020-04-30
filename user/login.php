<?php
require("user.php");
$username=$_POST['username'];
$password=$_POST['password'];
    if($username  && $password){
        getToken($username,$password);
    }
?>