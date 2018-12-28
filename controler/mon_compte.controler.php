<?php
session_start();

require_once('../model/Compte.class.php');
require_once('../model/gtouchDAO.class.php');
$BDD = new gtouchDAO();

include("../vue/mon_Compte.vue.php");
?>
