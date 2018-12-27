<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="../vue/css/inscriptionOK.css">
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>

    <div class="cont">
      <div class="header">
        <h3>Un problème est survenue !</h3>
        <a href=<?php echo $_SERVER['HTTP_REFERER']; ?>><img src="../model/data/img/croix.png" alt=""></a>
      </div>
      <div class="body">
        <img src="../model/data/img/check.png" alt="">
        <p>Erreur lors de l'inscription : </p>
        <?php  foreach ($listErr as $value) {
          echo "<p>", $value, "</p>";
        }
        ?>
      </div>
    </div>

  </body>
</html>
