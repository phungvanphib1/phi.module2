<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr,td{
            border:1px solid;
            width:50px;
        }
    </style>
</head>
<body>
    <table>
        <?php for($i = 0; $i < 8; $i++){  
            echo "<tr>" ;
             for( $j = 0; $j < 3; $j++){
                echo "<td>".$i.$j."</td>";
             }
             echo '</tr>';
         }?>
    </table>
</body>
</html>