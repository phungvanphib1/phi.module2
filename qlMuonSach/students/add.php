<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../layou/ql.css">
</head>
<?php
include "../layou/header.php";
include_once "../db.php";
$sql = "SELECT * FROM sinhvien";
$stmt=$conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$rows = $stmt->fetchAll();
if($_SERVER['REQUEST_METHOD']=="POST"){
    $hovaten=$_REQUEST['hovaten'];
    $sodiendienthoai=$_REQUEST['sodiendienthoai'];
    $email=$_REQUEST['email'];
    $lop=$_REQUEST['lop'];
    $err=[];
    if($hovaten==''){$err['hovaten']='Bạn cần điền thông tin!';}
    if($sodiendienthoai==''){$err['sodiendienthoai']='Bạn cần điền thông tin!';}
    if($email==''){$err['email']='Bạn cần điền thông tin!';}
    if($lop==''){$err['lop']='Bạn cần điền thông tin!';}
    if(empty($err)){
        $sql="INSERT INTO `sinhvien`( `hovaten`, `sodiendienthoai`, `email`, `lop`) VALUES ('$hovaten','$sodiendienthoai','$email','$lop')";
        $conn->exec($sql);
header("location: index.php");

    }
}

?>
<form action="" method="post" >
    Họ và tên <br> 
    <input type="text" name='hovaten'> <br> 
    <span style="color: red"><?php if(isset($err['hovaten'])){echo $err['hovaten'];} ?></span> <br>
    Số Điện thoại liên hệ<br>
    <input type="text" name='sodiendienthoai'> <br> 
    <span style="color: red"><?php if(isset($err['sodiendienthoai'])){echo $err['sodiendienthoai'];} ?></span><br>
    email <br>
    <input type="text" name='email'> <br> 
    <span style="color: red"><?php if(isset($err['email'])){echo $err['email'];} ?></span><br>
    Lớp học <br>
    <input type="text" name='lop'> <br> 
    <span style="color: red"><?php if(isset($err['lop'])){echo $err['lop'];} ?></span><br>
    <button type="submit">Thêm</button>

</form>



<?php
include "../layou/footer.php";

?>