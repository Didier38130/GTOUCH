<?php
require_once('../model/Compte.class.php');
//début session
session_start();
if (isset ($_COOKIE['login']))
{
setcookie('login', '', -1);
}
//fin de session
session_destroy();
//Affichage de la vue de confirmation de déconnexion
include('../vue/deconnexionOk.vue.php');

?>
