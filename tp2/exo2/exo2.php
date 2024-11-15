<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
<h2>Calculatrice Simple</h2>

<form method="post" action="exo2.php">
    
  <label for="nombre1">Nombre 1 :</label>
  <input type="number" id="nombre1" name="nombre1" required ><br><br>

  
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

  include "calcul.php";

  if (isset($_POST['calculer'])) {
    
      $nombre1 = (float)$_POST['nombre1'];// "15.5" => 15.5
      $nombre2 = (float)$_POST['nombre2'];
      $operation = $_POST['operation'];
      $resultat = calculatrice($nombre1,$nombre2,$operation);


      echo "<p>Résultat : $resultat</p>";
  }
?>

</body>
</html>