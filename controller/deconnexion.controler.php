<?php
require_once('../model/article.class.php');
require_once('../model/membres.class.php');
session_start();
if (isset ($_COOKIE['pseudo']))
{
setcookie('pseudo', '', -1);
}

session_destroy();

include('../Vue/deconnexionOk.vue.html');
?>
