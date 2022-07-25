<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Nhập số</h1>
    <div><form action='' class="dangnhap" method='POST'> 
Nhập số vào : <input type='text' name='nhap' /> </div> 
<input type='submit' class="button" name="ok" value='Ố kề' /> </div>

</body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nhap = $_POST["nhap"];
    $songuyento=0;
    if($nhap!=''){
        if($nhap<2){
            echo "không có có số nguyên bé hơn 2! ";

        }else{
            
            echo "| 2 | là số nguyên duy nhất là số chẵn " . "<br>" ;
            for($i=2;$i<=$nhap;$i++){
                if($nhap%$i!=0){
                    echo $i .' | ';
                    $songuyento++;
                }
            }
            echo'<br>';
            echo 'Số nguyên tố có:'.$songuyento.' SỐ';
        }
        
    }else{
        echo 'nhập số vào';
    }
}

?>
</html>