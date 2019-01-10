<?php
require_once('../model/gtouchDAO.class.php');
session_start();
$DAO = new gtouchDAO();

//if (isset($_FILES['image']['tmp_name'])) {
  $image = file_get_contents($_FILES['image']['tmp_name']);
//}
var_dump($image);
if (isset($image)) {
  include('../vue/formulaireEnvoye.vue.php');
} else {
  include('../vue/devis_image.vue.php');
}
?>
