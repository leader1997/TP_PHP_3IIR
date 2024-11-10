<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $stmt = $pdo->prepare("INSERT INTO etudiants (nom, email, age) VALUES (?, ?, ?)");
    $stmt->execute([$nom, $email, $age]);

    header("Location: index.php");
}
?>
