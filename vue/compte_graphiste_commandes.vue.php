<!DOCTYPE html>
<html lang="fr" dir="ltr">
<link rel="stylesheet" href="../vue/css/compte_graphiste_commandes.vue.css">
<head>
  <meta charset="utf-8">
  <title>Gtouch</title>
</head>

<header>
  <?php include("../vue/header.view.php"); ?>
  <img src="../model/data/img/baniere.jpg" alt="Header" id="baniere">
  <?php include("../vue/header_compte_graphiste.vue.php");?>
</header>
<body>
  <?php
  if(!empty($mp)){
    echo '<table class="w3-table w3-bordered">';
    echo  '<tr>';
    echo  '<td>Commande N°</td>';
    echo '<td>Date</td>';
    echo '</tr>';
    foreach($mp as $k=>$v){
      $unique=array_unique($v);
      $array[$k]=$unique;
      echo '<tr>';
      foreach ($array[$k] as $key => $value) {
        echo '<td><a href="../controler/projet.controler.php?idReq='.$value.'">'.$value.'</a></td>';
      }
      echo "</tr>";
    }
    echo '</tr>';
    echo '</table>';
  }else{
    echo '<p>Aucun projet en cours</p>';
  }
  ?>
</body>
<footer>
  <?php include("../vue/footer.vue.php"); ?>
</footer>
</html>
