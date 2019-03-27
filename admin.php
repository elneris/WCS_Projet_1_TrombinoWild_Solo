<?php
//require 'header.php';
require_once 'fonction.php';
require_once 'connection.php';
require_once 'Wilder.php';
$pdo = new PDO(DSN,USER,PASS);?>

<?php

if (!empty($_POST)) {


    //$query = 'INSERT INTO wilder VALUES (NULL, :firstname, :lastname, :birthday, :email, :cursus, :github, :presentation)';
    $prepared = $pdo->prepare("INSERT INTO wilder VALUES (NULL, :firstname, :lastname, :birthday, :email, :cursus, :github, :presentation);");

    $prepared->bindValue(':firstname', $_POST['firstname'], PDO::PARAM_STR);
    $prepared->bindValue(':lastname', $_POST['lastname'], PDO::PARAM_STR);
    $prepared->bindValue(':birthday', $_POST['birthday'], PDO::PARAM_STR);
    $prepared->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
    $prepared->bindValue(':cursus', $_POST['cursus'], PDO::PARAM_STR);
    $prepared->bindValue(':github', $_POST['github'], PDO::PARAM_STR);
    $prepared->bindValue(':presentation', $_POST['presentation'], PDO::PARAM_STR);

    $prepared->execute();

}
?>

<div class="container colonne-milieu">
    <form method="post" action="">
        <div class="form-group">
            <label for="firstname">Firstname</label>
            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Entrer un prenom">
        </div>
        <div class="form-group">
            <label for="lastname">Lastname</label>
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Entrer un nom">
        </div>
        <div class="form-group">
            <label for="birthday">Birthday</label>
            <input type="date" class="form-control" id="birthday" name="birthday">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Entrer un email">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="cursus" id="php" value="PHP" checked>
            <label class="form-check-label" for="php">
                PHP
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="cursus" id="js" value="JS">
            <label class="form-check-label" for="js">
                JS
            </label>
        </div>
        <br>
        <div class="form-group">
            <label for="github">Github</label>
            <input type="text" class="form-control" id="github" name="github" placeholder="Entrer le pseudo Github">
        </div>
        <div class="form-group">
            <label for="presentation">Presentation</label>
            <textarea class="form-control" name="presentation" id="presentation" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
    <?php var_dump($_POST)?>
</div>





<?php require 'footer.php'; ?>
