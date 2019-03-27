<?php

function wildersCard($parametre)
{

    $pdo = new PDO(DSN,USER,PASS);
    $prep = $pdo->prepare("SELECT * FROM wilder WHERE cursus = :cursus;");
    $prep->bindValue(':cursus', $parametre, PDO::PARAM_STR);
    $prep->execute();


    $wilders = $prep->fetchAll(PDO::FETCH_CLASS,'Wilder');

    foreach ($wilders as $information){
        $id = $information->getId();
        if (!is_file('image/photo/' . $information->getId() . '.jpg')) {
           $id = 0 ;
        }
    ?>
        <div class="col-12 col-md-6 col-lg-3 trombi_carte" >
            <div class="card " >
                <a href = "detail.php?wilder=<?= $id ?>" >
                    <div class="card-img-top" >
                        <img class="card-img-top" src = "image/photo/<?= $id ?>.jpg" alt = "<?= $information->getFirstname() ?>" >
                    </div >
                    <div class="card-body carte_body" >
                        <h5 class="card-title trombi_nom" ><?php echo $information->getLastname() . ' ' . $information->getFirstname() ?></h5 >
                    </div >
                </a >
            </div >
        </div >
    <?php

        }}
?>



<?php

function infoWilders($parameter)
{


    $pdo = new PDO(DSN,USER,PASS);
    $query = $pdo->query('SELECT * FROM wilder');
    $wilders = $query->fetchAll(PDO::FETCH_CLASS,'Wilder');

    foreach ($wilders as $information)
    {
        if ($information->getId() == $parameter){ ?>
            <div class="col-lg-6 col-12 detail_div"><img class="detail_img" src="image/photo/<?php echo $information->getId(); ?>.jpg" alt=""/> </div>
            <div class="col-lg-6 col-12 detail_descri detail_div ">
                <p>
                    <span class="police-gras"> Nom :</span> <?php echo $information->getLastname(); ?>
                    <br> <span class="police-gras"> Prénom :</span> <?php echo $information->getFirstname(); ?>
                    <br> <span class="police-gras"> Age :</span> <?php echo birthday($information->getBirthday()); ?>
                    <br> <span class="police-gras"> Email :</span>
                    <br> <?php echo $information->getEmail(); ?>
                    <br> <span class="police-gras"> Github :</span> <a href="https://github.com/<?php echo $information->getGithub(); ?>" target="_blank"><?php echo $information->getGithub(); ?></a>
                    <br> <span class="police-gras"> Langage étudié :</span> <?php echo $information->getCursus(); ?>
                </p>
            </div>
        <?php }
    }
}
?>

<?php

function birthday($birthday) {
    $age = date_create($birthday)->diff(date_create('today'))->y;

    return $age;
}
?>

<?php
function presentationWilders($parametre){

    $pdo = new PDO(DSN,USER,PASS);
    $query = $pdo->query('SELECT id,presentation FROM wilder');
    $wilders = $query->fetchAll(PDO::FETCH_CLASS,'Wilder');

    foreach ($wilders as $information){
        if ($information->getId() == $parametre) {
            echo ($information->getPresentation());
        }
    }
}
?>
