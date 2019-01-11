<!DOCTYPE html>
<html lang="fr" dir="ltr">
<link rel="stylesheet" href="../vue/css/compte_graphiste.vue.css">
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
  <div align="center" class="formulaire">
    <form class="" action="../controler/compte_graphiste.controler.php" method="POST">
        <div>
            <label for="login">Login:</label>
            <input type="text" name="login" value="<?php  if(!empty($infos["login"])){echo $infos["login"];}else{echo "login introuvable";}; ?>">
        </div>
        <div>
            <label for="mdp">Mot de passe :</label>
            <input type="password" name="mdp" value="<?php if(!empty($infos["mdp"])){echo $infos["mdp"];}else{echo "mdp introuvable";};?>">
        </div>
        <div>
            <label for="nom">Nom :</label>
            <input type="text" name="nom" value="<?php if(!empty($infos["nom"])){echo $infos["nom"];}else{echo "nom introuvable";}; ?>">
        </div>
        <div>
            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" value="<?php if(!empty($infos["prenom"])){echo $infos["prenom"];}else{echo "prenom introuvable";}; ?>">
        </div>
        <div>
            <label for="mail">E-mail :</label>
            <input type="text" name="mail" value="<?php if(!empty($infos["mail"])){echo $infos["mail"];}else{echo "mail introuvable";}; ?>">
        </div>
        <div>
            <label for="sexe">Sexe :</label>
            <input type="text" name="sexe" value="<?php if(!empty($infos["sexe"])){echo $infos["sexe"];}else{echo "sexe introuvable";};?>">
        </div>
        <div>
            <label for="telephone">Telephone :</label>
            <input type="text" name="telephone" value="<?php if(!empty($infos["telephone"])){echo $infos["telephone"];}else{echo "telephone introuvable";};?>">
        </div>
        <div>
            <label for="adresse">Adresse :</label>
            <input type="text"  name="adresse" value="<?php if(!empty($infos["adresse"])){echo $infos["adresse"];}else{echo "adresse introuvable";};?>">
        </div>
        <button class="enregistrer" type='submit' name='enregistrer'>Enregistrer</button>
    </form>
  </div>
</body>
<footer>
<?php include("../vue/footer.vue.php"); ?>
</footer>
</html>
