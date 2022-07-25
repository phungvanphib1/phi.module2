<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  method="post">
Nhập số cần chuyển: <input type="text" name="so1"><br>
<input type="submit" value="Đổi">
</form>
</body>
 <?php
 $donvi=[
    "0"=>"Không",
    "1"=>" Một",
    "2"=>" Hai",
    "3"=>" ba",
    "4"=>" Bốn",
    "5"=>" Năm",
    "6"=>" Sáu",
    "7"=>" Bảy",
    "8"=>" Tám",
    "9"=>" Chín",
    "10"=>" Mười",
 ];
 $Chuc=[
    "11"=>"Mười Một",
    "12"=>"Mười hai",
    "13"=>"Mười ba",
    "14"=>"Mười Bốn",
    "15"=>"Mười Lăm",
    "16"=>"Mười Sáu",
    "17"=>"Mười Bảy",
    "18"=>"Mười Tám",
    "19"=>"Mười chín",
    
 ];
 $hangChuc=[
    "20"=>"Hai Mươi",
    "30"=>"Ba Mươi",
    "40"=>"Bốn Mươi",
    "50"=>"Năm Mươi",
    "60"=>"Sáu Mươi",
    "70"=>"Bảy Mươi",
    "80"=>"Tám Mươi",
    "90"=>"Chín Mươi",
 ];
 $hangtram=[
    "100"=>"Một Trăm",
    "200"=>"Hai Trăm",
    "300"=>"Ba Trăm",
    "400"=>"Bốn Trăm",
    "500"=>"Năm Trăm",
    "600"=>"Sáu Trăm",
    "700"=>"Bảy Trăm",
    "800"=>"Tám Trăm",
    "900"=>"Chín Trăm",
 ];

 if($_SERVER['REQUEST_METHOD']=='POST'){
    $so1 = $_POST ['so1'];
    switch ($so1){
        case $so1 < 0:
            echo "Không";
            break;
        case $so1 > 0 && $so1<=10:
            echo $donvi[$so1];
            break;
        case $so1 >=11 && $so1 <=19:
            echo $Chuc[$so1];    
            break;
        case $so1>=20&&$so1<=99:
            $chuc_1=(int)($so1/10)*10;
            $donvi_1=($so1-$chuc_1);
            if($donvi_1==0){
                echo $hangChuc[$chuc_1]; 
            }else{
                echo $hangChuc[$chuc_1].$donvi[$donvi_1];
            }
            break;

        case $so1 >= 111 && $so1<=119:
            $ngu =$so1-100; 
            echo $hangtram["100"]." ".$Chuc[$ngu];
            break;
        case $so1>=100&&$so1<=999:  
            
            $tram_1 = (int)($so1/100)*100;
            $chuc_1 = ($so1-$tram_1);
            $chuc_2 = (int)($chuc_1/10)*10;
            $donvi_1= $chuc_1-$chuc_2;
            if($chuc_2==0&& $donvi_1==0){
                echo $hangtram[$tram_1];
            }
            elseif($donvi_1==0){
                echo $hangtram[$tram_1].' '.$hangChuc[$chuc_2];
            }
            elseif($chuc_2==0){
                echo $hangtram[$tram_1].'  Lẽ '.$donvi[$donvi_1];
            }
            else{
                echo $hangtram[$tram_1].' '.$hangChuc[$chuc_2].' '.$donvi[$donvi_1];
            }
            break;
            default:
            echo "Chưa nhập";
    }
 }

 ?>
</html>