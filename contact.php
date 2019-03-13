<?php

require 'header.php';

?>

		</header>

		<!-- CONTENU -->

		<div class="container">
			<section>
				<div class=" contact_info">
					<div class="card">
						<div class="row">
							<div class="col-sm-12 col-md-4 col-lg-4">
								<img class="contact_img" src="https://secure.meetupstatic.com/photos/event/8/1/0/a/600_478233034.jpeg" alt="contact">
							</div>
							<div class="col-sm-12 col-md-8 col-lg-8 px-3 contact_card_text">
								<div class="card-block px-3">
									<h4 class="card-title"> La Wild Code School Bordeaux </h4>
									<p class="card-text"> Adresse : 9 Allée Serr, 33100 Bordeaux </p>
									<p class="card-text"> Tel : 06 66 96 17 77</p>
									<p class="card-text"> Email : josephine@wildcodeschool.fr</p>
									<p class="card-text">La Wild Code School est une école dynamique, peut importe d'où vous venez nous serons ravis de travailler avec vous ! Surtout il ne faut pas hésitez pas à nous poser des questions via notre formulaire de contact. </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section>
				<div class="row">
					<div class="col-sm-12 col-lg-6 contact_map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2829.030187550418!2d-0.5630998845741431!3d44.841318579098456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5527cba74d1bdf%3A0xb92bcdcad0920688!2sWild+Code+School%2C+Formation+d%C3%A9veloppeur+web!5e0!3m2!1sfr!2sfr!4v1551694947908" width="100%" height="100%" allowfullscreen></iframe>
					</div>
					<div class="col-sm-12 col-lg-6">
						<form>
							<div class="form-group contact_form">
								<input type="text" class="form-control" id="inputName" placeholder="Name">
							</div>
							<div class="form-group contact_form">
								<label for="InputEmail"></label>
								<input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="@">
							</div>
							<div class="form-group contact_form">
								<label for="InputEmail"></label>
								<input type="email" class="form-control" id="InputEmail" placeholder="Objet">
							</div>
							<div class="form-group">
								<label for="FormControlTextarea"></label>
								<textarea class="form-control" id="FormControlTextarea" rows="3"></textarea>
							</div>
							<button type="submit" class="btn btn-primary contact_button">Envoyer</button>
						</form>
					</div>
				</div>
			</section>
		</div>
		
<?php

require 'footer.php';

?>