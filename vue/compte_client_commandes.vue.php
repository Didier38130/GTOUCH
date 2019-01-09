<!DOCTYPE html>
<html lang="fr" dir="ltr">
<link rel="stylesheet" href="../vue/css/compte_client_commandes.vue.css">
<head>
  <meta charset="utf-8">
  <title>Gtouch</title>
</head>

<header>
  <?php include("../vue/header.view.php"); ?>
  <img src="../model/data/img/baniere.jpg" alt="Header" id="baniere">
  <?php include("../vue/header_compte_client.vue.php");?>
</header>
<body>
  <table class="w3-table w3-bordered">
    <tr>
      <td>Commande N°</td>
      <td>Services retouche sollicitées</td>
      <td>Date</td>
    </tr>
    <?php
    foreach($mp as $k=>$v){
      $unique=array_unique($v);
      $array[$k]=$unique;
      echo "<tr>";
      foreach ($array[$k] as $key => $value) {
        echo "<td>".$value."</td>";
      }
      echo "</tr>";
    }
    ?>
  </tr>
</table>
</body>
<footer>
  <?php include("../vue/footer.vue.php"); ?>
</footer>
</html>
