<?php
//Démarrage de la session
session_start();

//Appel du fichier db_connection.php afin que la BDD puisse fonctionner avec le site
require_once("bdd/db_connection.php");

//Déclaration des variables, afin de récupérer les valeurs fournies par l'utilisateur dans le formulaire
$prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_STRING);
$nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
$age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
$adresse = filter_input(INPUT_POST, 'adresse', FILTER_SANITIZE_STRING);
$pays = filter_input(INPUT_POST, 'pays', FILTER_SANITIZE_STRING);

//Booléen qui indique si l'utilisateur à choisi de modifier un champ dans la BDD
$update = false;

//Requête préparée, avant l'insertion des données fournies par l'utilisateur
$insertPrepare = $conn->prepare('INSERT INTO f1Champs(prenom, nom, paysOrigine, annee, constructeur, pneu, chassis, moteur) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');


//Si le bouton "enregistrer" a été clické
if (isset($_POST['enregistrer'])) {
    //On vérifie que tous les champs sont renseignées
    if ($_POST['prenom'] != null && $_POST['nom'] != null && $_POST['paysOrigine'] != null && $_POST['annee'] != null && $_POST['constructeur'] != null && $_POST['pneu'] != null && $_POST['chassis'] != null && $_POST['moteur'] != null) {
        //Affichage du message que l'enregistrement a été effectué
        $_SESSION['message'] = "<strong>Votre enregistrement a été sauvegardé!<strong>";
        //On assigne les valeurs des variables $_POST aux variables avec des filter_input
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $paysOrigine = $_POST['paysOrigine'];
        $annee = $_POST['annee'];
        $constructeur = $_POST['constructeur'];
        $pneu = $_POST['pneu'];
        $chassis = $_POST['chassis'];
        $moteur = $_POST['moteur'];

        //On exécute la requête préparée en remplaçant les "?" par les variables
        $insertPrepare->execute(array($prenom, $nom, $paysOrigine, $annee, $constructeur, $pneu, $chassis, $moteur));
    } else {
        //Affichage du message d'erreur
        $_SESSION['message'] = "<strong>Attention! </strong>Veuillez remplir tout les champs";
    }
}


//Si le bouton "Mettre à jour" du formulaire a été clické
if (isset($_POST['update'])) {
    //On assigne les valeurs des variables $_POST aux variables avec des filter_input
    $id = $_POST['id'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $paysOrigine = $_POST['paysOrigine'];
    $annee = $_POST['annee'];
    $constructeur = $_POST['constructeur'];
    $pneu = $_POST['pneu'];
    $chassis = $_POST['chassis'];
    $moteur = $_POST['moteur'];
    //On exécute la requête avec les modifications apportées par l'utilisateur
    $updateRequete = $conn->query("UPDATE f1Champs SET prenom='$prenom', nom='$nom', paysOrigine='$paysOrigine', annee='$annee', constructeur='$constructeur', pneu='$pneu', chassis='$chassis', moteur='$moteur' WHERE idAnnee='$id'");
    //On réinitialise la valeur du booléen $update
    $update = false;
    $_SESSION['message'] = "L'enregistrement a été modifié";
    //On relance la page
    header("Refresh:0");
    exit;
}


?>

<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CRUD</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles/crud.css">
</head>

<body>
    <!-- Menu Bootstrap avec des onglets -->
    <div class="container">
        <h3>F1 Champions dbManager</h3>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Homepage</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active">CRUD</a>
            </li>
        </ul>
    </div>


    <div>
        <?php 
            //Requête nécessaire afin de pouvoir afficher dans le tableau, les infos contenus dans la BDD
            $resultat = $conn->query('SELECT * FROM f1Champs');
        ?>
        <!-- Affichage du tableau Bootstrap -->
        <div id="container">
            <table class="table table-fixed-header table-hover table-striped table-bordered" style="border: 1px solid #bbbbbb;">
                <thead class="thead-light">
                    <tr>
                        <th style="width:5%; text-align:center;" scope="col">Prénom</th>
                        <th style="width:5%; text-align:center;" scope="col">Nom</th>
                        <th style="width:5%; text-align:center;" scope="col">Pays d'Origine</th>
                        <th style="width:5%; text-align:center;" scope="col">Annee</th>
                        <th style="width:5%; text-align:center;" scope="col">Constructeur</th>
                        <th style="width:5%; text-align:center;" scope="col">Pneu</th>
                        <th style="width:5%; text-align:center;" scope="col">Chassis</th>
                        <th style="width:5%; text-align:center;" scope="col">Moteur</th>
                        <th style="width:5%; text-align:center;" colspan="8" scope="col">Action</th>
                    </tr>
                </thead>
                <div>
                    <tbody>
                        <!-- Récuperation des données qui sont renvoyées par la requête -->
                        <?php while ($donnees = $resultat->fetch()) { ?>
                            <tr scope="row">
                                <!-- Affichage de ces données dans les cellules du tableau -->
                                <td style="text-align:center;"><?php echo $donnees['prenom']; ?></td>
                                <td style="text-align:center;"><?php echo $donnees['nom']; ?></td>
                                <td style="text-align:center;"><?php echo $donnees['paysOrigine']; ?></td>
                                <td style="text-align:center;"><?php echo $donnees['annee']; ?></td>
                                <td style="text-align:center;"><?php echo $donnees['constructeur']; ?></td>
                                <td style="text-align:center;"><?php echo $donnees['pneu']; ?></td>
                                <td style="text-align:center;"><?php echo $donnees['chassis']; ?></td>
                                <td style="text-align:center;"><?php echo $donnees['moteur']; ?></td>
                                <td style="text-align:center;" id="edit">
                                    <?php
                                    //Si le bouton "modifier clické a été clické"
                                    if (isset($_GET['edit'])) {
                                        //Alors on assigne à la variable $id, le numéro de la ligne sélectionnée
                                        $id = $_GET['edit'];
                                        //On indique que le booléen $update est vrai
                                        $update = true;
                                        //On récupère toutes les valeurs associées à la ligne sélectionnées
                                        $requete = $conn->query("SELECT * FROM f1Champs WHERE idAnnee=$id");

                                        //Si la requête retourne une ligne 
                                        if ($requete->rowCount() == 1) {
                                            while ($data = $requete->fetch()) {
                                                //Alors on affiche les données de la ligne, dans le formulaire qui se trouve en dessous de la table
                                                $prenom = $data['prenom'];
                                                $nom = $data['nom'];
                                                $paysOrigine = $data['paysOrigine'];
                                                $annee = $data['annee'];
                                                $constructeur = $data['constructeur'];
                                                $pneu = $data['pneu'];
                                                $chassis = $data['chassis'];
                                                $moteur = $data['moteur'];
                                            }
                                        }
                                    }
                                    ?>
                                    <!-- Affichage du bouton "Modifier" -->
                                    <a name="edit" href="crud.php?edit=<?php echo $donnees['idAnnee']; ?>" class="btn btn-success">Modifier</a>
                                </td>
                                <td style="text-align:center;" id="delete">
                                    <?php
                                    //Si le bouton "Supprimer" a été clické
                                    if (isset($_GET['del'])) {
                                        //Alors on assigne à la variable $id, le numéro de la ligne sélectionnée
                                        $id = $_GET['del'];
                                        //On supprime la ligne dans la BDD en précisant son numéro à travers la variable $id
                                        $delRequete = $conn->query("DELETE FROM infoPerso WHERE idAnnee=$id");
                                        //Affichage du message de réussite
                                        $_SESSION['message'] = "<strong>L'enregistrement sélectionné a été effacé!</strong>";
                                        //Rechargement de la page
                                        header('location: crud.php');
                                        exit;
                                    }
                                    ?>
                                    <!-- Affichage du bouton "Supprimer" -->
                                    <a name="delete" href="crud.php?del=<?php echo $donnees['idAnnee']; ?>" class="btn btn-danger" class="isDisabled">Effacer</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </div>
            </table>
        </div>
        
        <!-- Emplacement prévu à l'affichage des messages -->
        <?php if (isset($_SESSION['message'])) : ?>
            <div class="alert alert-info" style="margin:auto; max-width:50%; margin-top:10px;">
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                ?>
            </div>
        <?php endif ?>

        <!-- Formulaire permettant d'ajouter ou de modifier des champs dans la BDD -->
        <div class="form-group">
            <form method="POST" action="#">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span for="prenom" class="input-group-text">Prénom</span>
                    </div>
                    <input type="text" class="form-control" name="prenom" value="<?php if (isset($_POST['prenom']) || isset($prenom)) {
                                                                                        echo $prenom;
                                                                                    } else {
                                                                                        echo "";
                                                                                    } ?>" />
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span for="nom" class="input-group-text">Nom</span>
                    </div>
                    <input type="text" class="form-control" name="nom" value="<?php if (isset($_POST['nom']) || isset($nom)) {
                                                                                    echo $nom;
                                                                                } else {
                                                                                    echo "";
                                                                                } ?>" />
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span for="paysOrigine" class="input-group-text">Pays d'Origine</span>
                    </div>
                    <input type="text" class="form-control" name="paysOrigine" value="<?php if (isset($_POST['paysOrigine']) || isset($paysOrigine)) {
                                                                                        echo $paysOrigine;
                                                                                    } else {
                                                                                        echo "";
                                                                                    } ?>" />
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span for="annee" class="input-group-text">Annee</span>
                    </div>
                    <input type="number" class="form-control" min="0" name="annee" value="<?php if (isset($_POST['annee']) || isset($annee)) {
                                                                                            echo $annee;
                                                                                        } else {
                                                                                            echo "";
                                                                                        } ?>" />
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span for="constructeur" class="input-group-text">Constructeur</span>
                    </div>
                    <input type="text" class="form-control" name="constructeur" value="<?php if (isset($_POST['constructeur']) || isset($constructeur)) {
                                                                                    echo $constructeur;
                                                                                } else {
                                                                                    echo "";
                                                                                } ?>" />
                </div>

                <!-- Visual Test -->
                
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span for="pneu" class="input-group-text">Pneu</span>
                    </div>
                    <input type="text" class="form-control" name="pneu" value="<?php if (isset($_POST['pneu']) || isset($pneu)) {
                                                                                    echo $pneu;
                                                                                } else {
                                                                                    echo "";
                                                                                } ?>" />
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span for="chassis" class="input-group-text">Châssis</span>
                    </div>
                    <input type="text" class="form-control" name="chassis" value="<?php if (isset($_POST['chassis']) || isset($chassis)) {
                                                                                    echo $chassis;
                                                                                } else {
                                                                                    echo "";
                                                                                } ?>" />
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span for="moteur" class="input-group-text">Moteur</span>
                    </div>
                    <input type="text" class="form-control" name="moteur" value="<?php if (isset($_POST['moteur']) || isset($moteur)) {
                                                                                    echo $moteur;
                                                                                } else {
                                                                                    echo "";
                                                                                } ?>" />
                </div>

                <div class="btnForm">
                    <!-- Si le booléen $update est vrai --> 
                    <?php if ($update == true) : ?>
                        <!-- On affiche le bouton "Mettre à jour" -->
                        <button class="btn btn-warning btn-block" type="submit" name="update">Mettre à jour</button>
                    <?php else : ?>
                        <!-- Sinon, on affiche le bouton "Enregistrer" -->
                        <input type="submit" class="btn btn-primary btn-block" name="enregistrer" value="Enregistrer" />
                    <?php endif ?>
                </div>
            </form>
        </div>

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

<?php

//On détruit la session
session_destroy();

?>

</html>