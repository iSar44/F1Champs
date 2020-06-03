<?php
//Démarrage de la session
session_start();

//Appel du fichier db_connection.php afin que la BDD puisse fonctionner avec le site
require_once("bdd/db_connection.php");

//Déclaration des variables qui vont contenir les requêtes SQL pour "alimenter" les liste déroulates avec les infos de la BDD
$choixPrenom = $conn->query("SELECT DISTINCT prenom FROM f1Champs ORDER BY prenom ASC");
$choixNom = $conn->query("SELECT DISTINCT nom FROM f1Champs ORDER BY nom ASC");
$choixPaysOrigine = $conn->query("SELECT DISTINCT paysOrigine FROM f1Champs ORDER BY paysOrigine ASC");
$choixAnnee = $conn->query("SELECT DISTINCT annee FROM f1Champs ORDER BY annee ASC");
$choixConstructeur = $conn->query("SELECT DISTINCT constructeur FROM f1Champs ORDER BY constructeur ASC");
$choixPneu = $conn->query("SELECT DISTINCT pneu FROM f1Champs ORDER BY pneu ASC");
$choixChassis = $conn->query("SELECT DISTINCT chassis FROM f1Champs ORDER BY chassis ASC");
$choixMoteur = $conn->query("SELECT DISTINCT moteur FROM f1Champs ORDER BY moteur ASC");

//Tableau qui va contenir les choix sélectionnés par l'utilisateur
$arrayUserChoice = array();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="styles/mainForm.css">
</head>

<body>

	<!-- Menu Bootstrap avec des onglets -->
	<div class="container">
		<h3>F1 Champions dbManager</h3>
		<ul class="nav nav-tabs" style="background-color:white;">
			<li class="nav-item">
				<a class="nav-link active">Homepage</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="crud.php">CRUD</a>
			</li>
		</ul>
	</div>

	<!-- Formulaire composé de listes déroulantes -->
	<div class="form-group">
		<form action="#" method="POST">
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span for="prenom" class="input-group-text">Prénom</span>
				</div>
				<select name="prenom" class="form-control">
					<?php
					//Affichage de tous les prénoms contenu dans la BDD

					echo "<option selected disabled hidden>Veuillez sélectionner...</option>";
					while ($selectPrenom = $choixPrenom->fetch()) {
						echo "<option value='$selectPrenom[0]'>$selectPrenom[0]</option>";
					}
					?>
				</select>
			</div>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span for="nom" class="input-group-text">Nom</span>
				</div>
				<select name="nom" class="form-control">
					<?php
					//Affichage de tous les noms contenu dans la BDD
					
					echo "<option selected disabled hidden>Veuillez sélectionner...</option>";
					while ($selectNom = $choixNom->fetch()) {
						echo "<option value='$selectNom[0]'>$selectNom[0]</option>";
					}
					?>
				</select>
			</div>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span for="paysOrigine" class="input-group-text">Pays d'Origine</span>
				</div>
				<select name="paysOrigine" class="form-control">
					<?php
					//Affichage de tous les pays contenu dans la BDD

					echo "<option selected disabled hidden>Veuillez sélectionner...</option>";
					while ($selectPays = $choixPaysOrigine->fetch()) {
						echo "<option value='$selectPays[0]'>$selectPays[0]</option>";
					}
					?>
				</select>
			</div>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span for="annee" class="input-group-text">Année</span>
				</div>
				<select name="annee" class="form-control">
					<?php
					//Affichage de tous les années contenu dans la BDD

					echo "<option selected disabled hidden>Veuillez sélectionner...</option>";
					while ($selectAnnee = $choixAnnee->fetch()) {
						echo "<option value='$selectAnnee[0]'>$selectAnnee[0]</option>";
					}
					?>
				</select>
			</div>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span for="constructeur" class="input-group-text">Constructeur</span>
				</div>
				<select name="constructeur" class="form-control">
					<?php
					//Affichage de tous les constructeur contenu dans la BDD

					echo "<option selected disabled hidden>Veuillez sélectionner...</option>";
					while ($selectConstructeur = $choixConstructeur->fetch()) {
						echo "<option value='$selectConstructeur[0]'>$selectConstructeur[0]</option>";
					}
					?>
				</select>
			</div>

			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span for="pneu" class="input-group-text">Pneu</span>
				</div>
				<select name="pneu" class="form-control">
					<?php
					//Affichage de tous les manufacturiers de pneu contenu dans la BDD

					echo "<option selected disabled hidden>Veuillez sélectionner...</option>";
					while ($selectPneu = $choixPneu->fetch()) {
						echo "<option value='$selectPneu[0]'>$selectPneu[0]</option>";
					}
					?>
				</select>
			</div>

			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span for="chassis" class="input-group-text">Châssis</span>
				</div>
				<select name="chassis" class="form-control">
					<?php
					//Affichage des noms des châssis contenu dans la BDD

					echo "<option selected disabled hidden>Veuillez sélectionner...</option>";
					while ($selectChassis = $choixChassis->fetch()) {
						echo "<option value='$selectChassis[0]'>$selectChassis[0]</option>";
					}
					?>
				</select>
			</div>

			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span for="moteur" class="input-group-text">Moteur</span>
				</div>
				<select name="moteur" class="form-control">
					<?php
					//Affichage des noms de moteur contenu dans la BDD

					echo "<option selected disabled hidden>Veuillez sélectionner...</option>";
					while ($selectMoteur = $choixMoteur->fetch()) {
						echo "<option value='$selectMoteur[0]'>$selectMoteur[0]</option>";
					}
					?>
				</select>
			</div>

			<input type="submit" class="btn btn-primary btn-block" name="sendRequest" value="Envoyer la requête" />
		</form>
	</div>
	<div id="tabAffichage">
		<?php

		//Condition qui assemble la requête SQL si au moins un champ est renseigné
		if (isset($_POST['sendRequest'])) {

			//Début de la requête
			$requeteUser = "SELECT * FROM f1Champs WHERE ";

			//Exemple pour tous les autres champs
			//Si le champ prénom est renseigné
			if (isset($_POST['prenom'])) {

				//On attribue sa valeur à la variable $prenomChoice
				$prenomChoice = $_POST['prenom'];

				//Si le tableau des choix de l'utilisateur n'est pas vide
				//Dans le cas contraire cette condition est ignorée
				if (!empty($arrayUserChoice)) {
					//Alors on rajoute "AND" à la requête
					$requeteUser .= " AND ";
				}

				//On concatène la requête SQL en ajoutant la variable contenant le choix de l'utilisateur au champ "prenom" en l'occurence
				$requeteUser .= "prenom = '$prenomChoice' ";

				//Si la variable n'est pas vide
				if (!empty($prenomChoice)) {
					//Alors on rajoute sa valeur dans le tableau $arrayUserChoice
					array_push($arrayUserChoice, $prenomChoice);
				}
			}
			if (isset($_POST['nom'])) {

				$nomChoice = $_POST['nom'];

				if (!empty($arrayUserChoice)) {
					$requeteUser .= "AND ";
				}
				$requeteUser .= "nom = '$nomChoice' ";

				if (!empty($nomChoice)) {
					array_push($arrayUserChoice, $nomChoice);
				}
			}
			if (isset($_POST['paysOrigine'])) {

				$paysOrigineChoice = $_POST['paysOrigine'];

				if (!empty($arrayUserChoice)) {
					$requeteUser .= "AND ";
				}
				$requeteUser .= "paysOrigine = '$paysOrigineChoice' ";

				if (!empty($paysOrigineChoice)) {
					array_push($arrayUserChoice, $ageChoice);
				}
			}
			if (isset($_POST['annee'])) {

				$anneeChoice = $_POST['annee'];

				if (!empty($arrayUserChoice)) {
					$requeteUser .= "AND ";
				}
				$requeteUser .= "annee = '$anneeChoice' ";

				if (!empty($anneeChoice)) {
					array_push($arrayUserChoice, $anneeChoice);
				}
			}
			if (isset($_POST['constructeur'])) {

				$constructeurChoice = $_POST['constructeur'];

				if (!empty($arrayUserChoice)) {
					$requeteUser .= "AND ";
				}
				$requeteUser .= "constructeur = '$constructeurChoice' ";

				if (!empty($constructeurChoice)) {
					array_push($arrayUserChoice, $constructeurChoice);
				}
			}

			if (isset($_POST['pneu'])) {

				$pneuChoice = $_POST['pneu'];

				if (!empty($arrayUserChoice)) {
					$requeteUser .= "AND ";
				}
				$requeteUser .= "pneu = '$pneuChoice' ";

				if (!empty($pneuChoice)) {
					array_push($arrayUserChoice, $pneuChoice);
				}
			}

			if (isset($_POST['chassis'])) {

				$chassisChoice = $_POST['chassis'];

				if (!empty($arrayUserChoice)) {
					$requeteUser .= "AND ";
				}
				$requeteUser .= "chassis = '$chassisChoice' ";

				if (!empty($chassisChoice)) {
					array_push($arrayUserChoice, $chassisChoice);
				}
			}

			if (isset($_POST['moteur'])) {

				$moteurChoice = $_POST['moteur'];

				if (!empty($arrayUserChoice)) {
					$requeteUser .= "AND ";
				}
				$requeteUser .= "moteur = '$moteurChoice' ";

				if (!empty($moteurChoice)) {
					array_push($arrayUserChoice, $moteurChoice);
				}
			}


			//Si le tableau $arrayUserChoice n'est pas vide
			if (!empty($arrayUserChoice)) {

				//Alors on envoie la requête avec les choix de l'utilisateur
				$requeteValidation = $conn->query($requeteUser);

				//Si la requête retourne au moins une ligne dans la BDD
				if ($requeteValidation->rowCount() > 0) {

					//Alors on affiche un tableau
					echo "<table class='table table-fixed-header table-hover table-striped table-bordered'>";
					echo "<thead class='thead-light'>";
					echo "<tr>";
					echo "<th style='width:5%; text-align:center;' scope='col'>Prénom</th>";
					echo "<th style='width:5%; text-align:center;' scope='col'>Nom</th>";
					echo "<th style='width:5%; text-align:center;' scope='col'>Pays d'Origine</th>";
					echo "<th style='width:5%; text-align:center;' scope='col'>Annee</th>";
					echo "<th style='width:5%; text-align:center;' scope='col'>Constructeur</th>";
					echo "<th style='width:5%; text-align:center;' scope='col'>Pneu</th>";
					echo "<th style='width:5%; text-align:center;' scope='col'>Chassis</th>";
					echo "<th style='width:5%; text-align:center;' colspan='7' scope='col'>Moteur</th>";
					echo "</tr>";
					echo "</thead>";
					echo "<tbody>";
					//Boucle qui récupère les valeurs que la requête a retourné
					while ($affichage = $requeteValidation->fetch()) { ?>
						<tr scope="row">
							<!-- Affichage des résultats -->
							<td style="text-align: center;"><?php echo $affichage[1]; ?></td>
							<td style="text-align: center;"><?php echo $affichage[2]; ?></td>
							<td style="text-align: center;"><?php echo $affichage[3]; ?></td>
							<td style="text-align: center;"><?php echo $affichage[4]; ?></td>
							<td style="text-align: center;"><?php echo $affichage[5]; ?></td>
							<td style="text-align: center;"><?php echo $affichage[6]; ?></td>
							<td style="text-align: center;"><?php echo $affichage[7]; ?></td>
							<td style="text-align: center;"><?php echo $affichage[8]; ?></td>
						</tr>
		<?php }
					echo "</tbody>";
					echo "</table>";
				} else {
					//Si la requête ne retourne aucune ligne alors on affiche un message d'erreur
					$_SESSION['message'] = "Malheureusement votre requête erronée!";
					echo "<div class='alert alert-danger'>";
					echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
					echo "<strong>Erreur! </strong>" . $_SESSION['message'];
					echo "</div>";
				}
			} else {
				//Si aucun champ n'a été sélectionné, alors on affiche un message en rapport avec cela
				$_SESSION['message'] = "Veuillez renseigner au moins un champ!";
				echo "<div class='alert alert-warning'>";
				echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
				echo "<strong>Attention! </strong>" . $_SESSION['message'];
				echo "</div>";
			}
		}
		?>
	</div>
	<?php

	unset($_SESSION['message']);

	?>


	<footer class="page-footer font-small blue">

		<div class="footer-copyright text-center py-3">© 2020 Copyright:
			<a href="https://github.com/iSar44"> Iliya Saroukhanian</a>
		</div>

	</footer>

	<!-- Références nécessaires au bon fonctionnement de Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>