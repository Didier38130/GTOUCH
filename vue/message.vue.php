<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../vue/css/message.vue.css">
  <title>Messagerie</title>
  <style></style>
</head>
<body>
  <form class="messagerie" action="../controler/message.controler.php?id=<?php echo $idConv ?>" method="post">
    <label>Objet</label>
    <input type="text" name="objet" placeholder="Objet du message" required>
    <label>Message</label>
    <input type="text" name="message" placeholder="Message à envoyer" required>
    <button class="valider">Valider</button>
  </form>

  <h1>Mes messages</h1>
  <?php
  if ($messages == NULL) {
    echo "vous n'avez pas de messages";
  }
  else {
    foreach ($messages as $value) {
      if ($value->getIdExp() == $id) {
        ?>
        <div class="messagesEnvoyes">
          <h3><?php echo $value->getObjetMessage() ?></h3>
          <h4><?php echo $value->getDateMessage() ?></h4>
          <p><?php echo $value->getContenuMess() ?></p>
        </div>
        <?php
      }
      else {
        $log = $BDD->getLoginFromId($value->getIdExp());
        $loginExp = $log[0]->getLoginUtil();
        ?>
        <div class="messagesRecus">
          <h2><?php echo $loginExp ?> vous a envoyé : </h2>
          <h3><?php echo $value->getObjetMessage() ?></h3>
          <h4><?php echo $value->getDateMessage() ?></h4>
          <p><?php echo $value->getContenuMess() ?></p>
        </div>
        <?php
      }
    }
  }
  ?>

</body>
</html>
