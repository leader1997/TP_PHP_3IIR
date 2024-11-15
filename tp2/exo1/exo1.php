<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php
        echo "Request received method :". $_SERVER["REQUEST_METHOD"];
    ?>
    
    <hr>

    <form action="exo1.php" method="post">
        <label for="search">Search : </label>
        <input type="text" name="search">
        <br><br>

        <input type="submit" value="Envoyer">
    </form>
 
    <?php

    $pers=array(
        "pseudo_1"=>array("nom"=>"mossab_1","age"=>16),
        "pseudo_2"=>array("nom"=>"mossab_2","age"=>16),
        "pseudo_3"=>array("nom"=>"mossab_3","age"=>16),
    );

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST["search"])){
            if(array_key_exists($_POST["search"],$pers)){
                echo "<hr>- nom :".$pers[$_POST["search"]]["nom"].
                    "<br>- age :".$pers[$_POST["search"]]["age"];
            }
            else{
                echo "<hr>user does not exists!";
            }
        }
        
    }
    
    ?>

</body>
</html>
