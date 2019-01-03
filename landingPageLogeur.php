<?php $title = 'Webloc, un service qui facilite la gestion des locataires saisonniers de vos logements.'; ?>

<?php ob_start(); ?>

<div class="center-align">
	<div class="hide-on-med-and-up">
		<img class="responsive-img" src="images/export-xd/Groupe_1.png">
	</div>
	<div class="hide-on-small-only">
		<img class="responsive-img" src="images/export-xd/Groupe_295.png">
	</div>
</div>

<div class="container">

	<div class="col s12">
		<div class="card-panel z-depth-2">
			<div class="row valign-wrapper">
				<div class="col s2">
					<img src="images/good-job-90X90.jpeg" class="circle responsive-img">
				</div>
				<div class="col s10">
					<span class="black-test flow-text">	
						<h4>
							Gérez simplement vos locations
						</h4>
					</span>
				</div>
			</div>
		</div>
	</div>

	<div class="center-align">
		<a href="https://morard.typeform.com/to/tAHExs" target="_blank" class="waves-effect waves-light btn-large light-blue darken-1">inscrivez-vous</a>
	</div>

	<p></p>

	<div class="row">

		<div class="col s12 m4">
			<div class="card-panel z-depth-2">
				<div>
					<div class="center-align">
						<i class="material-icons medium">access_time</i>
					</div>
						<p class="flow-text">
							Vous n’avez pas le temps de gérer vos locations d’hébergement.
						</p>
				</div>	
			</div>
		</div>

		<div class="col s12 m4">
			<div class="card-panel z-depth-2">
				<span>
					<div class="center-align">
						<i class="material-icons medium">people</i>
					</div>
					<p class="flow-text">
						<b>Confiez ces missions à des personnes de confiance.</b>
					</p>
				</span>
			</div>
		</div>

		<div class="col s12 m4">
			<div class="card-panel z-depth-2">
				<span>
					<div class="center-align">
						<i class="material-icons medium">event_busy</i>
					</div>
					<p class="flow-text">
						Vous n’êtes pas disponible pour accueillir vos locataires.
					</p>
				</span>
			</div>
		</div>
		
	</div>
</div>










<!-- intégrer le code html qui se situe dans <body> -->


	<?php $content = ob_get_clean(); ?>

	<?php require('template.php'); ?>