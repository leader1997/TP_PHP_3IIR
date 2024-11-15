<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php    
        $loisirs=array("php","java","js");
    ?>
    <form action="" method="post">
        <?php
            foreach($loisirs as $loisir){
                echo "$loisir <input type='radio' name='loisir' value='$loisir'>";
            }        
        ?>
        <input type="submit" value="Envoyer">
    </form>

    <hr>

    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            echo "<hr>Votre loisir est ".$_POST["loisir"];
        }
    ?>

</body>
</html>