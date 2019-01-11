<?php
require_once('../model/gtouchDAO.class.php');
//début session
session_start();
$DAO = new gtouchDAO();

if (isset($_POST['Valider'])) {
  $file = $_FILES['file'];
  $_SESSION['imageaupload'] = file_get_contents($_FILES['file']['tmp_name']);
}
if (isset($_SESSION['imageaupload'])) {
  include('../vue/formulaireEnvoye.vue.php');
} else {
  include('../vue/devis_image.vue.php');
}
?>
