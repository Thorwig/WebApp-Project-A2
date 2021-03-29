<!doctype html>
<html lang="fr">
	<!---------HEAD----------------------------------------------------------------------->
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/authentification.css') }}">
		<link rel="stylesheet" href="{{ asset('css/darkmode.css') }}">
		<title>Authentification</title>
	</head>
	<body>

		<!-- Background image -->

	<div id="general_kenobi" class="bg-image d-flex justify-content-center align-items-center">
		<div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
			<div class="d-flex justify-content-center align-items-center h-100">

				<div  class="text-light" style="max-width: 36rem;">
					<div class="card-header"><h1 class="mb-0">Formulaire d'inscription</h1></div>
					<div class="card-body text-light">
						<p class="card-text text-center" >Entrez vos informations d'utilisateur.</p>
					</div>

					<!------------------- FORMULAIRE D'INSCRIPTION-------------------------------------------->

					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text">Nom</span>
						</div>
						<input type="text" class="form-control" placeholder="Nom" aria-label="Nom" aria-describedby="basic-addon1">
					</div>

					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="Prénom" aria-label="Prénom" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<span class="input-group-text">Prénom</span>
						</div>
					</div>

					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text">@</span>
						</div>
						<input type="text" class="form-control" placeholder="Nom d'utilisateur" aria-label="Nom d'utilisateur" aria-describedby="basic-addon1">
					</div>

					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text">Date de naissance</span>
						</div>
						<input type="Date" class="form-control"  aria-describedby="basic-addon1">
					</div>

					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<label class="input-group-text">Sex</label>
						</div>
						<select class="custom-select">
							<option value="1">Homme</option>
							<option value="2">Femme</option>
							<option value="3">Autre</option>
						</select>
					</div>

					<!------------------- Adresse-------------------------------------------->
					<!-------------------Ville-------------------------------------------->
					<div id="Adresse">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">Centre</span>
							</div>
							<input id="inputNomVille" class="form-control autocomplete ui-autocomplete-input" type="search" placeholder="Centre" aria-label="Ville" autocomplete="off">
						</div>
					<!-------------------Promotion-------------------------------------------->
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">Promotion assignée</span>
							</div>
							<input  id="promotion" type="text" class="form-control" placeholder="ex : A3" aria-label="promotion" aria-describedby="basic-addon1">
						</div>
					</div>
					<!------------------- </Adresse>-------------------------------------------->

					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text">Mot de passe</span>
						</div>
						<input type="password" class="form-control" placeholder="Mot de passe" aria-label="Mot de passe" aria-describedby="basic-addon1">
					</div>

					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text">Confirmer le mot de passe</span>
						</div>
						<input type="password" class="form-control" placeholder="Confirmer le mot de passe" aria-label="Mot de passe" aria-describedby="basic-addon1">
					</div>

					<button type="button" class="btn btn-dark btn btn-primary btn-lg btn-block">Confirmer l'inscription</button>
					
				</div>
			</div>
		</div>
	</div>
	<!-- Background image -->

	<!-- Background image -->
			
		<script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
		<script src="{{ asset('css/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		@include('LegalPartial')
	</body>
</html>