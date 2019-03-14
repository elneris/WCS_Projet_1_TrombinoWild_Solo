<?php

function wildersCard($language)
{
	if ($language == 'PHP')
	{
		foreach ($wilders as $wilder => $value) 
		{ ?>
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
			<?php 
		}
	} 
}
?>
<?php

require 'header.php';
require 'wilders.php';
?>
		</header>

<div class="container">
	<div class = "pillules">
		<ul class="nav nav-pills mb-3 trombi_onglet" id="pills-tab" role="tablist">
		  <li class="nav-item">
		  	<form action="test.php">
		    <input type="submit" name="tous" value="Tous" class="nav-link text-danger button active " id="pills-tous-tab" data-toggle="pill" role="tab" aria-controls="pills-tous" aria-selected="true">
		</form>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link text-danger " id="pills-php-tab" data-toggle="pill" href="#pills-php" role="tab" aria-controls="pills-php" aria-selected="false">Php</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link  text-danger" id="pills-js-tab" data-toggle="pill" href="#pills-js" role="tab" aria-controls="pills-js" aria-selected="false">JS</a>
		  </li>
		</ul>
	</div>
</div>

<!-- TROMBI -->

<div class="tab-content" id="pills-tabContent">
   <div class="tab-pane fade show active" id="pills-tous" role="tabpanel" aria-labelledby="pills-tous-tab">
	   	<div class="container alignement">
			
		</div>
	</div>
	<div class="tab-pane fade" id="pills-php" role="tabpanel" aria-labelledby="pills-php-tab">
    	<div class="container alignement">
								
				
			
		</div>
	</div>
	<div class="tab-pane fade" id="pills-js" role="tabpanel" aria-labelledby="pills-js-tab">
    	<div class="container alignement">					
			
		</div>
	</div>
</div>

		<script>
			$(document).ready(function(){
			    $('.button').click(function(){
			        var clickBtnValue = $(this).val();
			        var ajaxurl = 'ajax.php',
			        data =  {'action': clickBtnValue};
			        $.post(ajaxurl, data, function (response) {
			            // Response div goes here.
			            alert("action performed successfully");
			        });
			    });

			});
		</script>

<?php include 'footer.php'; ?>