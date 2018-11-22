<?php $title = 'Webloc, un service qui facilite la gestion des locataires saisonniers de vos logements.'; ?>

<?php ob_start(); ?>

<div class="container">
	<!-- En-tête-->
	<?php require('header.php');?>

	<!-- Contenu de la page Le body-->
	<div>

		<div class="row">
			<div class="col s12">
				<div class="card pink lighten-5">
					<div class="card-content black-text">
						<span class="card-title">
							<h1>
								Merci !
							</h1>
						</span>
						<blockquote>
							<h4>
								Si vous êtes logeur, nous allons vous mettre en relation avec des réceptionnistes.
							</h4>
							<h4>
								Si vous êtes réceptionniste nous vous informerons dès qu'un logeur aura besoin de vos services.
							</h4>
						</blockquote>
					</div>
					<div class="card-action pink darken-4">
						<a href="mailto:hello@web-loc.com" class="white-text">
							Mettez à jour vos informations
						</a>
						<a href="index.php" class="white-text">
							Revenez à l'accueil
						</a>
					</div>
				</div>
			</div>
		</div>

	</div>

	<!-- Le footer -->
	<?php require('footer.php');?>


	<!--JavaScript at end of body for optimized loading-->
	<script type="text/javascript" src="materialize/js/materialize.min.js"></script>


	<?php $content = ob_get_clean(); ?>

	<?php require('template.php'); ?>