<?php


function wildersCard($parametre)
{

    require 'connection.php'; ?>
    <?php
    foreach ($wilders as $wilder => $value) {
        if ($value['cursus'][0] == $parametre) {?>
            <div class="col-12 col-md-6 col-lg-3 trombi_carte">
                <div class="card ">
                    <a href="detail.php?wilder=<?php echo ($value['id'][0]); ?>">
                        <div class="card-img-top">
                            <img class="card-img-top" src="image/photo/<?php echo strtolower($value['id'][0]); ?>.jpg">
                        </div>
                        <div class="card-body carte_body">
                            <h5 class="card-title trombi_nom"><?php echo ($value['firstname'][0]) . ' ' . ($value['lastname'][0]); ?></h5>
                        </div>
                    </a>
                </div>
            </div>
            <?php
        }
    }
}
?>

<?php
function infoWilders($parametre){

    require 'connection.php';

    foreach ($wilders as $wilder => $value){
        if ($value['id'][0] == $parametre){?>
        <div class="col-lg-6 col-12 detail_div"><img class="detail_img" src="image/photo/<?php echo ($value['id'][0]); ?>.jpg" alt=""/> </div>
                <div class="col-lg-6 col-12 detail_descri detail_div ">
                    <p>
                        <span class="police-gras"> Nom :</span> <?php echo ($value['lastname'][0]); ?>
                        <br> <span class="police-gras"> Prénom :</span> <?php echo ($value['firstname'][0]); ?>
                        <br> <span class="police-gras"> Age :</span> <?php echo birthday(($value['birthday'][0])); ?>
        <br> <span class="police-gras"> Email :</span>
                        <br> <?php echo ($value['email'][0]); ?>
        <br> <span class="police-gras"> Github :</span> <a href="https://github.com/<?php echo ($value['github'][0]); ?>" target="_blank"><?php echo ($value['github'][0]); ?></a>
                        <br> <span class="police-gras"> Langage étudié :</span> <?php echo ($value['cursus'][0]); ?>
                    </p>
                </div>
        <?php
        }
    }
}
?>

<?php
function presentationWilders($parametre){
    require 'connection.php';
    foreach ($wilders as $wilder => $value){
        if ($value['id'][0] == $parametre) {
            echo ($value['presentation'][0]);
        }
    }
}
?>

<?php

function birthday($birthday) {
    $age = date_create($birthday)->diff(date_create('today'))->y;

    return $age;
}
echo birthday('1989-11-05');
