<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    
        $mois = array("janvier","fev","mars");

        $mois[]="avril";

        echo " - count : ".count($mois)."<br>";

        for($i=0;$i<count($mois);$i++){
            echo "- $mois[$i]<br>";
        }

        echo '<hr>';
        
        foreach($mois as $cle => $value){
            echo "$cle - $value <br>";
        }
        
        echo '<hr>';

        $etudiant = array(
            "nom"=>"adil",
            "age"=>19,
            "filiere"=>"3IIR"
        );

        foreach($etudiant as $key => $value){
            echo "- $key : $value <br>";
        }


    
    
    ?>
</body>
</html>