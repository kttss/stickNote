<?php

require("./note_method.php");

$titre=$_POST['titre'];
$text=$_POST['text'];

    if($titre  && $text){
        addNote($titre,$text);
    }
?>