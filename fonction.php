<?php


function wildersCard($parametre){

    require 'wilders.php';

    foreach ($wilders as $wilder => $value) {
        if ($value[3] == $parametre) {?>
            <div class="col-12 col-md-6 col-lg-3 trombi_carte">
                <div class="card ">
                    <a href="detail.php?wilder=<?php echo strtolower($wilder); ?>">
                    <div class="card-img-top">
                            <img class="card-img-top" src="image/photo/<?php echo strtolower($name[$wilder][1]); ?>.jpg">
                        </div>
                        <div class="card-body carte_body">
                            <h5 class="card-title trombi_nom"><?php echo $wildersName[$wilder] ; ?></h5>
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

    require 'wilders.php';

    foreach ($wilders as $wilder => $value){
        if ($wilder == $parametre){?>
        <div class="col-lg-6 col-12 detail_div"><img class="detail_img" src="image/photo/<?php echo strtolower($name[$wilder][1]); ?>.jpg" alt="Elneris"/> </div>
                <div class="col-lg-6 col-12 detail_descri detail_div ">
                    <p>
                        <span class="police-gras"> Nom :</span> <?php echo ($name[$wilder][1]); ?>
                        <br> <span class="police-gras"> Prénom :</span> <?php echo ($name[$wilder][0]); ?>
                        <br> <span class="police-gras"> Age :</span> <?php echo ($wildersAge[$wilder]); ?>
        <br> <span class="police-gras"> Email :</span>
                        <br> <?php echo ($wildersMail[$wilder]); ?>
        <br> <span class="police-gras"> Github :</span> <a href="https://github.com/<?php echo ($gitHub[$wilder]); ?>" target="_blank"><?php echo $gitHub[$wilder]; ?></a>
                        <br> <span class="police-gras"> Langage étudié :</span> <?php echo ($wildersLanguage[$wilder]) ;?>
                    </p>
                </div>
        <?php
        }
    }
}
?>

<?php
function presentationWilders($parametre){
    require 'wilders.php';
    foreach ($wildersPresentation as $wilder => $values){
        if ($wilder == $parametre) {
            $wildersLastPresentation= array_pop($values);
            echo implode(',',$values) . $wildersLastPresentation . '.';
        }
    }
}
