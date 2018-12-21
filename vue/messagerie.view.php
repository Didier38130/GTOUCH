<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Messagerie</title>
  <style>
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(even) {
    background-color: #dddddd;
  }
</style>
</head>
<body>
  <form class="messagerie" action="messagerie.controler.php">
    <table>
      <tr>
        <th>Messages reçus</th>
        <th>Messages envoyés</th>
      </tr>
    </table>
    <input type="text" name="message_a_envoyer" placeholder="Ecrivez votre message ici" size="88">
    <input type="submit" value="Envoyer">
  </form>

</body>
</html>
