<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  method="post" >
Product Description: <input type="text" name="description" style="width: 300px;" > <br>
List Price: <input type="text" name="price" > <br>
Discount Percent: <input type="text" name="percent" > <br>
        <input type="submit" value="OK">
</body>
<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $description = $_POST ['description'];
    $price = $_POST ['price'];
    $percent = $_POST ['percent'];
 $DiscountAmount = $price * $percent * 0.1; 
 echo '<br>'; 
 echo "description: ".$description.'<br>';
 echo 'price: '. $price."VND".'<br>';
 echo 'DiscountAmount: '.$DiscountAmount ." VND". '=' .$price-$DiscountAmount."VND";
}
?>
</html>