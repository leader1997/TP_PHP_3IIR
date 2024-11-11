<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            margin-bottom: 20px;
        }
        .result {
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <?php
        echo "Request received method: " . htmlspecialchars($_SERVER["REQUEST_METHOD"]);
    ?>
    
    <hr>

    <form action="exo1.php" method="post">
        <label for="search">Search: </label>
        <input type="text" name="search" id="search" required>
        <br><br>
        <input type="submit" value="Envoyer">
    </form>
 
    <?php

    $pers = array(
        "pseudo_1" => array("nom" => "mossab_1", "age" => 16),
        "pseudo_2" => array("nom" => "mossab_2", "age" => 16),
        "pseudo_3" => array("nom" => "mossab_3", "age" => 16),
    );

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["search"])) {
            $search = htmlspecialchars($_POST["search"]);
            if (array_key_exists($search, $pers)) {
                echo "<div class='result'><hr>- nom: " . htmlspecialchars($pers[$search]["nom"]) .
                    "<br>- age: " . htmlspecialchars($pers[$search]["age"]) . "</div>";
            } else {
                echo "<div class='result'><hr>User does not exist!</div>";
            }
        }
    }
    
    ?>

</body>
</html>
