<?php


function wildersCard($parametre){

require 'wilders.php';

foreach ($wilders as $wilder => $value) { 
	if ($value[3] == $parametre) {?>
<div class="col-12 col-md-6 col-lg-3 trombi_carte">   		
	<div class="card " style="width: 18rem;">
		<a href="detail.php">
			<div class="card-img-top">
				<img class="card-img-top" src="image/photo/<?php echo strtolower($name[$wilder][1]); ?>.jpg">
			</div>
			<div class="card-body">
	 			<h5 class="card-title trombi_nom"><?php echo $wildersName[$wilder] ; ?></h5>
	 		</div>
	   	</a>		           	
   	</div>
</div>
<?php }}} ?>


