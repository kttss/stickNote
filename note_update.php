<?php

require("./note_method.php");

$titre=$_POST['titre'];
$text=$_POST['text'];
$id=$_POST['id'];

    if($titre  && $text  && $id){
        editNote($id,$titre,$text);
    }
?>