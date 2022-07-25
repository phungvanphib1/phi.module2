<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Chuyển Đổi Tiền Tệ</h1>
<form  method="post">
Nhập: <input type="number" name="tien"><br>
<input type="submit" value="Đổi">
<td>
    <select name="vao1">
     <option value="vnd">vnd</option>
     <option value="usd">usd</option>
    <select></td>
<td>
    <select name="ra1">
     <option value="vnd">vnd</option>
     <option value="usd">usd</option>
    </select>
</td>
</form>
</body>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $tien = $_POST ['tien'];                                                                                                                            
    $vao1 = $_POST ['vao1'];
    $ra1 = $_POST ['ra1'];
    if($tien!=''){
        if($vao1=='vnd'&&$ra1=='usd'){
            $usd = round(($tien / 23000)*100) / 100 .'USD';
        echo $usd.'<br>';
        echo "tỉ giá 23.000VND/1USD";
        }elseif($vao1=='usd'&&$ra1=='vnd'){
            $vnd = round(($tien * 23000)*100) / 100 .'VND';
            echo $vnd .'<br>';
            echo "tỉ giá 1USD=23.000VND";
        }else{
            echo ' Thay đổi value muốn chuyển!';
        }
    }else{
        echo 'nhập tiền vào';
    }
    
}
?>
</html>