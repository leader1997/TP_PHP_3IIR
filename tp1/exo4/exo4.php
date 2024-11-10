<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        th,td,table{
            border : 1px solid red;
            border-collapse : collapse;
        }
    </style>
</head>
<body>
    <?php

        $personnes=array(
            "md_1"=>array("nom"=>"morad","age"=>15,"ville"=>"casa"),
            "md_2"=>array("nom"=>"farid","age"=>13,"ville"=>"fes"),
            "md_3"=>array("age"=>25,"nom"=>"imane","ville"=>"rabat"),
        );

        echo "
            <table>
                <tr>
                    <th>ID</th>
                    <th>nom</th>
                    <th>age</th>
                    <th>ville</th>
                <tr>
            ";

            foreach($personnes as $id => $person){
                echo "<tr>";
                    echo "<td>".$id."</td>";
                    // echo "<td>".$person["nom"]."</td>";
                    // echo "<td>".$person["age"]."</td>";
                    // echo "<td>".$person["ville"]."</td>";
                    foreach($person as  $v){
                        echo "<td>$v</td>";
                    }

                echo "</tr>";           
            }
            echo "</table>";
    ?>
</body>
</html>