<!DOCTYPE html>
version1
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Auswertung</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <h1>Auswertung</h1>
  <?php
    echo $_POST['standort'];
    echo $_POST['fellzustand'];
    echo $_POST['haltung'];
    echo $_POST['bcs'];
    echo $_POST['training'];

?>



  <p><a href="" onclick="window.history.back();">Zurück zur Startseite</a>
</body>

</html>
