<?php
require_once('../model/Compte.class.php');
//début session
session_start();
if (isset ($_COOKIE['login']))
{
setcookie('login', '', -1);
}

session_destroy();

include('../vue/deconnexionOk.vue.php');

?>
