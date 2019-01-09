<!DOCTYPE html>
<html lang="fr" dir="ltr">
<link rel="stylesheet" href="../vue/css/compte_client.vue.css">
<head>
  <meta charset="utf-8">
  <title>Gtouch</title>
</head>

<header>
  <?php //include("../vue/header.view.php"); ?>
  <img src="../model/data/img/baniere.jpg" alt="Header" id="baniere">
  <?php //include("../vue/header_compte_client.vue.php");?>
</header>
<body>
  <div align="center" class="formulaire">
    <form class="" action="../controler/compte_client.controler.php" method="POST">
        <div>
            <label for="name">Login:</label>
            <input type="text" name="login" value="<?php  echo $infos["login"];?>">
        </div>
        <div>
            <label for="name">Mot de passe :</label>
            <input type="password" name="mdp" value="<?php echo $infos["mdp"]; ?>">
        </div>
        <div>
            <label for="name">Nom :</label>
            <input type="text" name="nom" value="<?php echo $infos["nom"]; ?>">
        </div>
        <div>
            <label for="name">Prénom :</label>
            <input type="text" name="prenom" value="<?php echo $infos["prenom"]; ?>">
        </div>
        <div>
            <label for="mail">E-mail :</label>
            <input type="text" name="mail" value="<?php echo $infos["mail"];  ?>">
        </div>
        <div>
            <label for="name">Sexe :</label>
            <input type="text" name="sexe" value="<?php echo $infos["sexe"]; ?>">
        </div>
        <div>
            <label for="name">Telephone :</label>
            <input type="text" name="telephone" value="<?php echo $infos["telephone"]; ?>">
        </div>
        <div>
            <label for="name">Adresse :</label>
            <input type="text"  name="adresse" value="<?php echo $infos["adresse"]; ?>">
        </div>
        <button type='submit' name='enregistrer'>Enregistrer</button>
    </form>
  </div>
</body>
<footer>
<?php include("../vue/footer.vue.php"); ?>
</footer>
</html>
