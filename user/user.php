<?php 

    
    require("./../db.php");

    session_start();
    
    function addUser($username,$password){
        $cnx = cnx_db();
        $req = $cnx->prepare("insert into  user (username,password) values(?,?)");
        $req->execute([$username,$password]);
        $rslt = $req->fetch();
        if($rslt ){
            echo "teet";
        }else{
            header("location:./../../notes/login.php");
        }
    }

    function getToken($username,$password){
        $cnx = cnx_db();
        $req = $cnx->prepare("select *  from  user where username = ? and password = ?");
        $req->execute([$username,$password]);
        $rslt = $req->fetch();
        if($rslt ){ 
            $_SESSION["user"] = $rslt['username'];
            $_SESSION["iduser"] = $rslt['id'];
            header("location:./../notes.php");
        }else{ 
            $_SESSION["error"] =  "username/password incorrect";
            header("location:./../login.php");
        }
    }
?>