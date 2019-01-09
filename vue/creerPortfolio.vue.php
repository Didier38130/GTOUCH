<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Creer un portfolio</title>
  </head>
  <body>
    <div class="container">
      <h2>Il est temps de vous créer un porfolios !</h2>
      <p>Votre portfolio sera afficher parmis tous les autres sur la page "Annonces" et permettra aux clients de vous choisir vous plutot qu'un autre ! Ne le négligez pas</p>
      <p>Les images de vos dernieres réalisations seront égalements affichées</p>

      <form class="portfolio" action="creerPortfolio.controler.php" method="post">
        <label>Description personnelle</label>
        <input type="text" name="desc" placeholder="Décrivez vous, n'hésitez pas a vous présenter !" required>
        <label>Compétences</label>
        <input type="text" name="comp" placeholder="Enumérez ici vos compétences (séparer d'un "/")" required>
        <label>Logiciels</label>
        <input type="text" name="logi" placeholder="Enumérez ici les logiciels que vous utilisez (séparer d'un "/")" required>
        <button class="valider">Valider</button>
      </form>

      <p>Vous pourrez modifier ses informations si elles ne vous conviennent plus.</p>
    </div>
  </body>
</html>
