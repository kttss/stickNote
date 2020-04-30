<?php
require("./db.php");

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
    function getAllNotes(){
        $cnx = cnx_db();
        $req = $cnx->prepare("select *  from  note where user = ?");
        $req->execute([$_SESSION["iduser"]]);
        $rslt = $req->fetch();
        return $req->fetchAll();
    }

    function addNote($titre,$text){
        $cnx = cnx_db();
        $req = $cnx->prepare("insert into note (titre,text,user) values(?,?,?)");
        $req->execute([$titre,$text,$_SESSION["iduser"]]);
        header("location:./notes.php");
    }

    function editNote($id,$titre,$text){
        $cnx = cnx_db();
        $req = $cnx->prepare("update note set titre=?,text=? where id=?");
        $req->execute([$titre,$text,$id]);
        header("location:./notes.php");
    }

    function deleteNote($id){
        $cnx = cnx_db();
        $req = $cnx->prepare("delete from note where id=? ");
        $req->execute([$id]);
        header("location:./notes.php");
    }

?>