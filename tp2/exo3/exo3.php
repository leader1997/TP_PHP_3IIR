<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exo3.php" method="post">
        <label >Skills : </label>
        JAVA  <input type="checkbox" name="skills[]" value="JAVA">
        PYTHON <input type="checkbox" name="skills[]" value="PYTHON">
        C++     <input type="checkbox" name="skills[]" value="C++">
        <input type="submit" value="Envoyer">
    </form>
    
    <br>

    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        print_r($_POST["skills"]);
    }

    ?>
</body>
</html>