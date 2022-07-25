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
        Nhập: <input type="text" name="nhap" > <br>
        <input type="submit" value="dịch">
    </form> 
</body>
<?php
$dich =  [
    
    "hello" => "xin chào",
    "how" => "thế nào", 
    "book" => "quyển vở", 
    "computer" => "máy tính"
]; 
if($_SERVER['REQUEST_METHOD']=='POST'){
    $nhap = $_POST ['nhap']; 
    echo $dich[$nhap];
}
?>

</html>