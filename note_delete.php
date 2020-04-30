<?php

require("./note_method.php");
$id=$_GET['id'];

    if($id){
        deleteNote($id);
    }
?>