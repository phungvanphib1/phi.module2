<?php
if (  $_SERVER['REQUEST_METHOD'] == 'POST'){
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
   $pheptinh = $_POST['pheptinh'];
   if (!
   ($number1 == "" && $number2 == "")){
    switch ($pheptinh) {
        case 'cong':
            echo "Kết quả : ". $number1 + $number2;
        break;
        case 'tru':
            echo "Kết quả : ". $number1 - $number2;
        break;
        case 'nhan':
            echo "Kết quả : ". $number1 * $number2;
        break;
        case 'chia':
            if ($number2 == 0){
                echo 'Vô cực';
                break;
            }
            echo "Kết quả : ". $number1 / $number2;
        break;
    }
   } else {
    echo " vui lòng nhập số";
   }
    
 }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="number1" placeholder="nhập số thứ nhất"><br>
    <select name="pheptinh" id="">
        <option name="cong" value="cong">+</option>
        <option name="tru"  value="tru">-</option>
        <option name="nhan" value="nhan">*</option>
        <option name="chia" value="chia">/</option>
    </select><br>
    <input type="text" name="number2" placeholder="nhập số thứ hai"> <br>
    <input type="submit" name="submit" value="Kiểm tra">
    </form>
</body>
</html>

.
.

