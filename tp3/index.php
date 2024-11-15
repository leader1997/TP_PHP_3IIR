<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>CRUD PHP MySQL - Étudiants</title>
</head>
<body>

<h2>Ajouter un étudiant</h2>
<form action="inserer.php" method="post">
    <input type="text" name="nom" placeholder="Nom" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="number" name="age" placeholder="Âge" required>
    <button type="submit">Ajouter</button>
</form>

<hr>

<h2>Liste des étudiants</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Email</th>
        <th>Âge</th>
        <th>Actions</th>
    </tr>
    <?php
    $stmt = $pdo->query("SELECT * FROM etudiants");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['nom']}</td>";
        echo "<td>{$row['email']}</td>";
        echo "<td>{$row['age']}</td>";
        echo "<td>
                <a href='modifier.php?id={$row['id']}'>Modifier</a> |
                <a href='supprimer.php?id={$row['id']}'>Supprimer</a>
              </td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
