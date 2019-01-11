<?php
require_once('../model/gtouchDAO.class.php');
//début session
session_start();
//accès à la BD
$DAO = new gtouchDAO();

if (isset($_POST['Valider'])) { // si on valide le téléchargement de l'image
  $file = $_FILES['file'];
  $_SESSION['imageaupload'] = file_get_contents($_FILES['file']['tmp_name']); // on enregistre l'image
}
if (isset($_SESSION['imageaupload'])) { // si l'image est enregistrée
  include('../vue/formulaireEnvoye.vue.php'); // alors on charge la vue indiquant l'envoi du formulaire
} else {
  include('../vue/devis_image.vue.php'); // sinon on charge la vue de téléchargement d'image
}
?>
