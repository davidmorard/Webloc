<?php $title = 'Webloc, un service qui facilite la gestion des locataires saisonniers de vos logements.'; ?>

<?php ob_start(); ?>

<!-- intégrer le code html qui se situe dans <body> -->
	<div class="container">

		<!-- En-tête-->
		<?php require('header.php');?>

		<!-- Le body -->
		<form action="subscribe.php" method="post">
			<div class="row">

				<div class="row">
					<div class="col s12">
						<div class="row">
							<div class="input-field col s12">
								<i class="material-icons prefix">person</i>
								<input type="text" name="name" id="name" class="autocomplete">
								<label for="name">Votre nom</label>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col s12">
						<div class="row">
							<div class="input-field col s12">
								<i class="material-icons prefix">perm_identity</i>
								<input type="text" name="first_name" id="first_name" class="autocomplete">
								<label for="first_name">Votre prénom</label>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col s12">
						<div class="row">
							<div class="input-field col s12">
								<i class="material-icons prefix">email</i>
								<input type="text" name="email" id="email" class="autocomplete">
								<label for="email">Votre email</label>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12">
					<div class="card horizontal">
						<div class="card-image">
							<img src="images/good-job-100X90.jpg">
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<h5>
									Si vous êtes propriétaire
								</h5>
								<p>
									Insérez le code postal de l'hébergement.
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col s12">
						<div class="row">
							<div class="input-field col s12">
								<i class="material-icons prefix">home</i>
								<input type="text" name="postal_code_property" id="postal_code_property" class="autocomplete">
								<label for="postal_code_property">Code postal de votre propriété</label>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12">
					<div class="card horizontal">
						<div class="card-image">
							<img src="images/hand-shake-100X90.jpg">
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<h5>
									Si vous êtes réceptionniste
								</h5>
								<p>
									Insérez le code postal sur lequel vous pouvez accueillir les locataires et assurer l'intendance.
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col s12">
						<div class="row">
							<div class="input-field col s12">
								<i class="material-icons prefix">accessibility</i>
								<input type="text" name="postal_code_caretaker" id="postal_code_caretaker" class="autocomplete">
								<label for="postal_code_caretaker">Code postal de votre zone d'intervention</label>
							</div>
						</div>
					</div>
				</div>

			</div>



			<div class="center-align">
				<input type="submit" value="CONTINUEZ" class="waves-effect waves-light btn"/>
				<p>
					
				</p>
				<p>
					
				</p>
			</div>


		</form>


		<!-- Le footer -->
		<?php require('footer.php');?>
	</div>

	<!--JavaScript at end of body for optimized loading-->
	<script type="text/javascript" src="materialize/js/materialize.min.js"></script>

	<?php $content = ob_get_clean(); ?>

	<?php require('template.php'); ?>