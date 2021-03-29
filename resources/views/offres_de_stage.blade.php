<!doctype html>
<html lang="fr">
<!---------HEAD----------------------------------------------------------------------->
<head>
	<meta charset="utf-8">
	<title>Offres de stage</title>
	<link rel="stylesheet" href="./assets/vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="./assets/vendors/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href=".\assets\darkmode\darkmode.css">
	<link rel="stylesheet" href=".\assets\buttons\buttons.css">
	<link rel="stylesheet" href=".\assets\scrollbar\scrollbar.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<!---------HEADER----------------------------------------------------------------------->

<header>
	<nav class="navbar navbar-light" style="background-color: #fff;">
		<!----->
		<a class="navbar-brand" href="#">
			<img src="./assets/logo.png" width="50" height="50" class="d-inline-block align-middle" alt="">
			<p class="d-inline-block align-bottom" alt="">Annuaire d'entreprises</p>
		</a>



		<!----->
		<form class="form-inline">
			<button class="btn btn-outline-success mr-sm-4" class="btn btn-dark" type="submit">Se connecter</button>
			<button class="btn btn-outline-success my-2 my-sm-0" class="btn btn-success" type="submit">S'inscrire</button>
		</form>

	</nav>
</header>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-4">
				<h2>Gerer les offres de stage :</h2>

				<div class="row">
					<div class="col">
						<button id="buttonTropAgreable" type="button" class="btn blue" onclick="ajouterOffre()">Ajouter une offre</button>
					</div>
					<div class="col">
						<button id="buttonTropAgreable" type="button" class="btn green" onclick="modifierOffre()">Modifier l'offre</button>
					</div>
					<div class="col">
						<button id="buttonTropAgreable" type="button" class="btn yellow" onclick="supprimerOffre()">Supprimer l'offre</button>
					</div>
					<div class="row">
						<div class="col-6">

							<!---------Formulaire de l'entreprise----------------------------------------------------------------------->
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Compétences</span>
								</div>
								<input type="text" class="form-control" placeholder="Compétences recherchées" aria-label="Nom" aria-describedby="basic-addon1">
							</div>

							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Entreprise</span>
								</div>
								<input type="text" class="form-control" placeholder="Nom de l'entreprise" aria-label="Nom" aria-describedby="basic-addon1">
							</div>

							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Localité</span>
								</div>
								<input type="text" class="form-control" placeholder="Adresse de l'entreprise" aria-label="Nom" aria-describedby="basic-addon1">
							</div>

							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Promotions concernées</span>
								</div>
								<input type="text" class="form-control" placeholder="ex : A3" aria-label="Nom" aria-describedby="basic-addon1">
							</div>

							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Durée du stage</span>
								</div>
								<input type="text" class="form-control" placeholder="ex : 6 mois" aria-label="Nom d'utilisateur" aria-describedby="basic-addon1">
							</div>

							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Base de rémunération</span>
								</div>
								<input type="text" class="form-control" placeholder="ex : 2000€" aria-label="Nom d'utilisateur" aria-describedby="basic-addon1">
							</div>
						</div>

						<div class="col-6 ">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Date de l'offre</span>
								</div>
								<input type="Date" class="form-control" placeholder="Numéro de téléphone" aria-label="Nom d'utilisateur" aria-describedby="basic-addon1">
							</div>

							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Nombre de places</span>
								</div>
								<input type="text" class="form-control" placeholder="ex : 4" aria-label="Nom d'utilisateur" aria-describedby="basic-addon1">
							</div>
							<div>
								<button id="buttonTropAgreable" type="button" class="btn red" onclick="rechecherOffre()">Rechercher l'offre</button></div>

							</div>
						</div>

					</div>
				</div>

				<div class="col-8">

					<!----------------------------------------------------------------------------------------------->
					<h2>Consulter les offres de stage :</h2>

					<div class="container vertical-scrollable"> 
						<div class="row text-center"> 
							<div class="col-sm-8"> 1</div> 
							<div class="col-sm-8"> 2</div> 
						</div> 
					</div>
				</div>
			</div>
		</div>

		<footer class="bg-dark text-center text-white" >
			<div class="container p-4 pb-0">
				<!-- Section: Social media -->
				<section class="mb-4">
					<!-- Facebook -->
					<a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
					><i class="fab fa-facebook-f"></i
						></a>

						<!-- Twitter -->
						<a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
						><i class="fab fa-twitter"></i
							></a>

							<!-- Google -->
							<a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
							><i class="fab fa-google"></i
								></a>

								<!-- Instagram -->
								<a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
								><i class="fab fa-instagram"></i
									></a>				
									<!-- Section: Social media -->
								</div>
								<!-- Grid container -->

								<!-- Copyright -->
								<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
									© 2020 Copyright:
									<a class="text-white" href="https://mdbootstrap.com/">Mentions légales</a>
								</div>
								<!-- Copyright -->

							</footer>
						</body>
						</html>