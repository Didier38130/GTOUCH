<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Messagerie</title>
  <style></style>
</head>
<body>
  <form class="messagerie" action="../controler/messagerie.controler.php" method="post">
    <label>Login</label>
    <input type="text" name="login" placeholder="Login du destinataire" required>
    <label>Objet</label>
    <input type="text" name="objet" placeholder="Objet du message" required>
    <label>Message</label>
    <input type="text" name="message" placeholder="Message à envoyer" required>
    <button class="valider">Valider</button>
  </form>

  <?php
  if ($convs == NULL) {
    echo "vous n'avez pas de messages";
  }
  else {
    foreach ($convs as $value) {
      if ($value->getIdExp() == $id) {
        $log = $BDD->getLoginFromId($value->getIdDest());
        $loginDest = $log[0]->getLoginUtil();
        ?> <a href="../controler/message.controler.php?id=<?php echo $value->getIdDest() ?>">Conversation avec <?php echo $loginDest ?></a> <?php
      }
      else {
        $log = $BDD->getLoginFromId($value->getIdExp());
        $loginExp = $log[0]->getLoginUtil();
        ?> <a href="../controler/message.controler.php?id=<?php echo $value->getIdExp() ?>">Conversation avec <?php echo $loginExp ?></a> <?php
      }
    }
  }
  ?>

</body>
</html>
