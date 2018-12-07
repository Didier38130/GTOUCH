<?php
require_once('../model/membre.class.php');
session_start();
if (isset ($_COOKIE['login']))
{
setcookie('login', '', -1);
}

session_destroy();

include('../Vue/deconnexionOk.vue.html');
?>
