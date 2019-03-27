<?php

require 'header.php';
require_once 'fonction.php';
require_once 'connection.php';
require_once 'Wilder.php';
?>
		</header>

		<!-- PILLS -->
		
		<div class="container">
			<div class = "pillules">
				<ul class="nav nav-pills mb-3 trombi_onglet" id="pills-tab" role="tablist">
				  <li class="nav-item">
				    <a class="nav-link text-danger active " id="pills-home-tab" data-toggle="pill" href="#pills-wanted" role="tab" aria-controls="pills-wanted" aria-selected="true">Tous</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link text-danger " id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Php</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link  text-danger" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">JS</a>
				  </li>
				</ul>
			</div>
		</div>

		<!-- TROMBI -->

		<div class="tab-content" id="pills-tabContent">
		   <div class="tab-pane fade show active" id="pills-wanted" role="tabpanel" aria-labelledby="pills-home-tab">
			   	<div class="container alignement">
					<?php
					wildersCard('PHP');
                    wildersCard('JS');
					 ?>
				</div>
			</div>
			<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
		    	<div class="container alignement">
					<?php
					$showWilders = 'PHP';
					wildersCard($showWilders) ?>
				</div>
			</div>
			<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
		    	<div class="container alignement">
					<?php 
					$showWilders = 'JS';
					wildersCard($showWilders) ?>
				</div>
			</div>
		</div>
	
<?php

require 'footer.php';

?>