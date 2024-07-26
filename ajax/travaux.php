<?php
session_start();
if (isset($_SESSION['FichierduLangue'])) {
    require "../locale/" . $_SESSION['FichierduLangue'] . ".php";
}
require '../includes/fonctions.php';

$aListeErrors = NULL;
$aListeErreurs = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = (int) $_POST['idpub'];
    if ($_POST['idpub'] == 1) {
include('../includes/creation_compte_membre.php'); 
    }
    else    if ($_POST['idpub'] == 2) {
include('../includes/connexionDeconnexion.php'); 

    }
     else  if ($_POST['idpub'] == 3) {
include('../includes/profil.php'); 

    }
       else  if ($_POST['idpub'] == 4) {
include('../includes/traduitLangue.php'); 

    }



} else {
    header("location:/");
    exit();
}

