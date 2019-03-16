<?php

require 'header.php';
require_once 'fonction.php';
?>

            <!-- IMAGE ENTETE -->

            <div class="container">
              <div class="intro-text">
                 <div class="intro-heading text-uppercase"><br></div>
                 
              </div>
           </div>
        </header>

        <!-- CONTENU -->

        <div class="container">
            <div class="detail_row">
<?php
if(isset($_GET['wilder'])){
    $idWilder = $_GET['wilder'];
}
infoWilders($idWilder);?>
            </div>
            <div class="detail_present detail_row">
                <h2><span class="detail_titre">Présentation</span></h2>
                <br><br>
                <p><?php if(isset($_GET['wilder'])){
                        $idWilder = $_GET['wilder'];
                    } presentationWilders($idWilder) ?></p>
            </div>
        </div>

<?php

require 'footer.php';

?>