<?php

require 'header.php';

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
			   	<div class="container">
					<div class="row trombi_ligne">					
						<div class="col-12 col-md-6 col-lg-3 trombi_carte">   		
				       		<div class="card " style="width: 18rem;">
				       		<a href="detail.php">
				           		<div class="card-img-top photoElne"></div>
				           		<div class="card-body">
				             	<h5 class="card-title trombi_nom">Elneris Dang</h5>
				             	</div>
				           	</a>		           	
					       	</div>
					   	</div>
					   <div class="col-12 col-md-6 col-lg-3 trombi_carte">
					       <div class="card" style="width: 18rem;">
					       	<a href="detail_1.php">
					           	<div class="card-img-top photoMartin"></div>
					           	<div class="card-body">
					            <h5 class="card-title trombi_nom">Martin Hamon</h5>
					            </div>
					        </a>					           
					       </div>
					   </div>
					   <div class="col-12 col-md-6 col-lg-3 trombi_carte">
					       <div class="card" style="width: 18rem;">
					       	<a href="detail_2.php">
					           	<div class="card-img-top photoJulie"></div>
					           	<div class="card-body">
					            <h5 class="card-title trombi_nom">Julie Charlemagne</h5>
					            </div>
					        </a>					           
					       </div>
					   </div>
					   <div class="col-12 col-md-6 col-lg-3 trombi_carte">
					       <div class="card" style="width: 18rem;">
					       	<a href="detail_3.php">
					           	<div class="card-img-top photoNico"></div>
					           	<div class="card-body">
					            <h5 class="card-title trombi_nom">Nicolas Hosteins</h5>
					            </div>
					        </a>
				            </div>
					   </div>
					</div>
					<div class="row trombi_ligne">
						<div class="col-12 col-md-6 col-lg-3 trombi_carte">   		
				       		<div class="card " style="width: 18rem;">
				       		<a href="detail.php">
				           		<div class="card-img-top photoElne"></div>
				           		<div class="card-body">
				             	<h5 class="card-title trombi_nom">Elneris Dang</h5>
				             	</div>
				           	</a>				           	
					       	</div>
					   	</div>
					   <div class="col-12 col-md-6 col-lg-3 trombi_carte">
					       <div class="card" style="width: 18rem;">
					       	<a href="detail_1.php">
					           	<div class="card-img-top photoMartin"></div>
					           	<div class="card-body">
					            <h5 class="card-title trombi_nom">Martin Hamon</h5>
					            </div>
					        </a>					           
					       </div>
					   </div>
						<div class="col-12 col-md-6 col-lg-3 trombi_carte">   		
				       		<div class="card " style="width: 18rem;">
				       		<a href="detail.php">
				           		<div class="card-img-top photoElne"></div>
				           		<div class="card-body">
				             	<h5 class="card-title trombi_nom">Elneris Dang</h5>
				             	</div>
				           	</a>				           	
					       	</div>
					   	</div>
					   <div class="col-12 col-md-6 col-lg-3 trombi_carte">
					       <div class="card" style="width: 18rem;">
					       	<a href="detail_1.php">
					           	<div class="card-img-top photoMartin"></div>
					           	<div class="card-body">
					            <h5 class="card-title trombi_nom">Martin Hamon</h5>
					            </div>
					        </a>					         
					       </div>
					   </div>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
		    	<div class="container">
					<div class="row trombi_ligne">					
						<div class="col-12 col-md-6 col-lg-3 trombi_carte">   		
				       		<div class="card " style="width: 18rem;">
				       		<a href="detail.php">
				           		<div class="card-img-top photoElne"></div>
				           		<div class="card-body">
				             	<h5 class="card-title trombi_nom">Elneris Dang</h5>
				             	</div>
				           	</a>				           	
					       	</div>
					   	</div>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
		    	<div class="container">					
					<div class="row trombi_ligne">					
					   	<div class="col-12 col-md-6 col-lg-3 trombi_carte">
					       	<div class="card" style="width: 18rem;">
					       	<a href="detail_1.php">
					           	<div class="card-img-top photoMartin"></div>
					           	<div class="card-body">
					            <h5 class="card-title trombi_nom">Martin Hamon</h5>
					            </div>
					        </a>					           
					       	</div>
					   	</div>
					   	<div class="col-12 col-md-6 col-lg-3 trombi_carte">
					       	<div class="card" style="width: 18rem;">
					       	<a href="detail_2.php">
					           	<div class="card-img-top photoJulie"></div>
					           	<div class="card-body">
					            <h5 class="card-title trombi_nom">Julie Charlemagne</h5>
					            </div>
					        </a>					           
					       	</div>
					   	</div>
					   	<div class="col-12 col-md-6 col-lg-3 trombi_carte">
					       	<div class="card" style="width: 18rem;">
					       	<a href="detail_3.php">
					           	<div class="card-img-top photoNico"></div>
					           	<div class="card-body">
					            <h5 class="card-title trombi_nom">Nicolas Hosteins</h5>
					            </div>
					        </a>					           
					       	</div>
					   	</div>
					</div>
				</div>
			</div>
		</div>
	
<?php

require 'footer.php';

?>