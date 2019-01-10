<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../vue/css/creerPortfolio.css">
    <title>Creer un portfolio</title>
  </head>
  <body>
    <div class="container">
      <h2>Il est temps de vous créer un porfolio !</h2>
      <p>Votre portfolio sera afficher parmis tous les autres sur la page "Annonces" et permettra aux clients de vous choisir vous plutot qu'un autre ! Ne le négligez donc pas.</p>
      <p>N'hésitez pas à mettre un lien vers vos créations même si elles sont externes à GTouch.</p>
      <p>Les images de vos dernieres réalisations seront égalements affichées.</p>

      <form class="portfolio" action="creerPortfolio.controler.php" method="post">
        <label>Description personnelle</label>
        <textarea type="text" name="desc" class ="desc" placeholder="Bonjour, je m'apelle ... je suis graphiste spécialisé en ..." required></textarea>
        <div class="competlog">
          <div class="compe">
            <label>Compétences</label>
            <textarea type="text" name="comp" class="comp" placeholder="Enumérez ici vos compétences ( séparées d'un '/' )" required></textarea>
          </div>
          <div class="logi">
            <label>Logiciels</label>
            <textarea type="text" name="logi" class="log" placeholder="Enumérez ici les logiciels que vous utilisez ( séparés d'un '/' )" required></textarea>
          </div>
        </div>
        <button class="valider">Valider</button>
      </form>

      <p class="ps">* Vous pourrez modifier ces informations si elles ne vous conviennent plus.</p>
    </div>
  </body>
</html>
