<?php
session_start();
?>
 

<?php if (isset($_SESSION["user"])): 
include("./note_method.php");
$notes = getAllNotes();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stick note</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/mais.css">
</head>

<body>
    <nav class="navbar navbar-dark bg-primary d-flex justify-content-end">
        <div class="badge"><?=$_SESSION["user"]?> </div><a class="btn btn-dark" href="./logout.php">Logout</a>
    </nav>
    <div class="container">

        <div>
            <form action="./note_create.php" method="post" id="noteform">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="titreinp">titre</label>
                        <input type="text" class="d-none" name="id" id="id">
                        <input type="text" class="form-control form-control-sm" name="titre" id="titreinp">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="textinp">Text</label>
                        <textarea class="form-control form-control-sm" name="text" id="textinp"></textarea>
                    </div>
                    <div class="form-group col-md-2">
                        <label>&nbsp; </label>
                        <input type="submit" class="btn btn-primary form-control" value="Ajouter">
                    </div>
                </div>
            </form>
        </div>

        <div>
        <?php foreach($notes as $note ) { ?>
        <div class='sticky' data-id="<?=$note['id']?>">
            <div class="btn-action">
                <a class="btn-edit">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </a>
                <a href="note_delete.php?id=<?=$note['id']?>" class="btn-delete text-danger" 
                onclick="return confirm('Supprimer ?')">
                <i class="fa fa-times" aria-hidden="true"></i>
            </a>
            </div>
            <h3>
            <?php echo $note['titre']?>
            </h3>
            <p>
            <?php echo $note['text']?>
            </p>
        </div>
        <?php } ?>
</div>
    </div>


</body>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="./assets/main.js"></script>
</html>
 
<?php 
    else:  
    header("location:./login.php");
endif; ?>