<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        table,td{
            border:1px solid blue;
            border-collapse: collapse;
        }
    </style>
    
    <!--<link rel="stylesheet" href="style.css">-->
</head>
<body>
    <table >
        <tr >
            <td>11</td>
            <td>12</td>
            <td>13</td>
        </tr>
        <tr>
            <td>21</td>
            <td>22</td>
            <td>23</td>
        </tr>
        <tr>
            <td>31</td>
            <td>32</td>
            <td>33</td>
        </tr>
    </table>

    <br>
    
        <?php
            echo "<table>";

            for($i=1;$i<=3;$i++){
                echo "<tr>";
                    for($j=1;$j<=3;$j++){
                        if($i==1 && $j==1){
                            echo "<td></td>";
                        }
                        elseif($i==1 or $j==1 or $i==$j){
                            echo "<td><b>".$i*$j."<b></td>";
                        }else{
                           echo "<td>".$i*$j."</td>";
                        }
                    }
                echo "</tr>";
            }

            echo "</table>";
        ?>
    

</body>
</html>