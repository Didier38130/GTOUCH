<?php
require_once('../model/gtouchDAO.class.php');
session_start();
$DAO = new gtouchDAO();

if (isset($_GET['descrip'])) {
  $_SESSION['descrip'] = $_GET['descrip'];
} else {
  $_SESSION['descrip'] = '';
}


if (isset($_SESSION['descrip'])) {
  include('../vue/devis_image.vue.php');
} else {
  include('../vue/devis_descrip.vue.php');
}
?>
