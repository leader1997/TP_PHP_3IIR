<?php
include 'db.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM etudiants WHERE id = ?");
$stmt->execute([$id]);
$etudiant = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $stmt = $pdo->prepare("UPDATE etudiants SET nom = ?, email = ?, age = ? WHERE id = ?");
    $stmt->execute([$nom, $email, $age, $id]);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier l'étudiant</title>
</head>
<body>

<h2>Modifier l'étudiant</h2>
<form method="post">
    <input type="text" name="nom" value="<?php echo $etudiant['nom']; ?>" required>
    <input type="email" name="email" value="<?php echo $etudiant['email']; ?>" required>
    <input type="number" name="age" value="<?php echo $etudiant['age']; ?>" required>
    <button type="submit">Mettre à jour</button>
</form>

</body>
</html>
