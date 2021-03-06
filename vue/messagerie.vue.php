<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../vue/css/messagerie.vue.css">
  <title>Messagerie</title>
  <style></style>
</head>
<body>

  <a href="../controler/page_accueil.controler.php"><img src="../model/data/img/backspace.png" alt=""></a>

  <div class="container">

  <h2>Envoyer un message : </h2>

  <form class="messagerie" action="../controler/messagerie.controler.php" method="post">
    <label>Login</label>
    <input type="text" name="login" placeholder="Login du destinataire" required>
    <label>Objet</label>
    <input type="text" name="objet" placeholder="Objet du message" required>
    <label>Message</label>
    <textarea type="text" name="message" placeholder="Message à envoyer" required class="message"></textarea>
    <button class="valider">Envoyer</button>
  </form>

  <h2>Reprendre une conversation : </h2>

  <div class="conversations">
  <?php

  //Si la personne connectée n'a aucune conversation
  if ($convs == NULL) {
    echo "<h3>vous n'avez encore aucune conversation</h3>";
  }
  else {
    //Pour chaque conversation avec une personne
    foreach ($convs as $value) {
      //Si l'expediteur est la personne connectée
      if ($value->getIdExp() == $id && $value->getTypeExp() == $typeExp) {
        //Si c'est un graphiste
        if ($value->getTypeExp() == 'graphiste') {
          //on recupere le login client du destinataire
          $log = $BDD->getLoginFromIdClient($value->getIdDest());
        } else {
          //sinon on recupere le login graphiste du destinataire
          $log = $BDD->getLoginFromIdGraphiste($value->getIdDest());
        }
        $loginDest = $log[0]->getLoginUtil();
        //On affiche le login de la personne avec qui la personne connectée a eu une conversation avec un lien vers l'ensemble des messages qu'ils ont échangés
        ?> <a href="../controler/message.controler.php?id=<?php echo $value->getIdDest() ?>"><h3> • Conversation avec <?php echo $loginDest ?></h3></a> <?php
      }
      else {
        if ($value->getTypeExp() == 'graphiste' ) {
          $log = $BDD->getLoginFromIdGraphiste($value->getIdExp());
        } else {
          $log = $BDD->getLoginFromIdClient($value->getIdExp());
        }
        $loginExp = $log[0]->getLoginUtil();
        ?> <a href="../controler/message.controler.php?id=<?php echo $value->getIdExp() ?>"><h3> • Conversation avec <?php echo $loginExp ?></h3></a> <?php
      }
    }
  }
  ?>
    </div>

  </div>

</body>
</html>
