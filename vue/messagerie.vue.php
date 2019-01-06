<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../vue/css/messagerie.vue.css">
  <title>Messagerie</title>
  <style></style>
</head>
<body>
  <div class="container">

  <h2>Envoyer un message : </h2>

  <form class="messagerie" action="../controler/messagerie.controler.php" method="post">
    <label>Login</label>
    <input type="text" name="login" placeholder="Login du destinataire" required>
    <label>Objet</label>
    <input type="text" name="objet" placeholder="Objet du message" required>
    <label>Message</label>
    <input type="text" name="message" placeholder="Message à envoyer" required class="message">
    <button class="valider">Envoyer</button>
  </form>

  <h2>Reprendre une conversation : </h2>

  <div class="conversations">
  <?php

  if ($convs == NULL) {
    echo "<h3>vous n'avez encore aucune conversation</h3>";
  }
  else {
    foreach ($convs as $value) {
      if ($value->getIdExp() == $id && $value->getTypeExp() == $typeExp) {
        if ($value->getTypeExp() == 'graphiste') {
          $log = $BDD->getLoginFromIdClient($value->getIdDest());
        } else {
          $log = $BDD->getLoginFromIdGraphiste($value->getIdDest());
        }
        $loginDest = $log[0]->getLoginUtil();
        ?> <a href="../controler/message.controler.php?id=<?php echo $value->getIdDest() ?>"> • Conversation avec <?php echo $loginDest ?></a> <?php
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
