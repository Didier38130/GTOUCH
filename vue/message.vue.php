<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../vue/css/message.vue.css">
  <title>Messagerie</title>
  <style></style>
</head>
<body>

  <div class="container">

  <form class="messagerie" action="../controler/message.controler.php?id=<?php echo $idConv ?>" method="post">
    <label>Objet</label>
    <input type="text" name="objet" placeholder="Objet du message" required>
    <label>Message</label>
    <input type="text" name="message" placeholder="Message à envoyer" required class="message">
    <button class="valider">Envoyer</button>
  </form>

  <div class="messages">

  <?php
  if ($messages == NULL) {
    echo "vous n'avez pas de messages";
  }
  else {
    foreach ($messages as $value) {
      if ($value->getIdExp() == $id && $value->getTypeExp() == $typeExp) {
        ?>
        <div class="messagesEnvoyes">
          <h3><?php echo $value->getObjetMessage() ?></h3>
          <h4><?php echo $value->getDateMessage() ?></h4>
          <p><?php echo $value->getContenuMess() ?></p>
        </div>
        <?php
      }
      else {
        ?>
        <div class="messagesRecus">
          <h3><?php echo $value->getObjetMessage() ?></h3>
          <h4><?php echo $value->getDateMessage() ?></h4>
          <p><?php echo $value->getContenuMess() ?></p>
        </div>
        <?php
      }
    }
  }
  ?>

  </div>

  </div>

</body>
</html>
