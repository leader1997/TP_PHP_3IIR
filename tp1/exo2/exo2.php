<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php

            for($i=1;$i<=30;$i++){
                echo "<li>$i <sup>2</sup>=".$i*$i."</li>";
            }
        
        ?>
    </ul>
    
</body>
</html>