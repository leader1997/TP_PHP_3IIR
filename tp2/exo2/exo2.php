<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
<h2>Calculatrice Simple</h2>

<form method="post" action="">
    
  <label for="nombre1">Nombre 1 :</label>
  <input type="number" id="nombre1" name="nombre1" required><br><br>

  
  <label for="nombre2">Nombre 2 :</label>
  <input type="number" id="nombre2" name="nombre2" required><br><br>

  
  <label for="operation">Opération :</label>
  <select id="operation" name="operation" required>
    <option value="addition">Addition</option>
    <option value="soustraction">Soustraction</option>
    <option value="multiplication">Multiplication</option>
    <option value="division">Division</option>
  </select><br><br>

  <button type="submit" name="calculer">Calculer</button>
</form>

<?php
  if (isset($_POST['calculer'])) {
    
      $nombre1 = (float)$_POST['nombre1'];
      $nombre2 = (float)$_POST['nombre2'];
      $operation = $_POST['operation'];
      $resultat = "";

      switch ($operation) {
          case 'addition':
              $resultat = $nombre1 + $nombre2;
              break;
          case 'soustraction':
              $resultat = $nombre1 - $nombre2;
              break;
          case 'multiplication':
              $resultat = $nombre1 * $nombre2;
              break;
          case 'division':
              if ($nombre2 != 0) {
                  $resultat = $nombre1 / $nombre2;
              } else {
                  $resultat = "Erreur : Division par zéro !";
              }
              break;
          default:
              $resultat = "Opération invalide";
      }

      echo "<p>Résultat : $resultat</p>";
  }
?>

</body>
</html>