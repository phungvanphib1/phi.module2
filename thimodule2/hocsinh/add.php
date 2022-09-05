<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        a {
    color: var(--bs-link-color);
    text-decoration: none;
}
span{
    color:red
}
    </style>

</head>
<?php
include_once "../db.php";
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $name=$_REQUEST['name'];
    $lop=$_REQUEST['lop'];
    $date=$_REQUEST['date'];
    $gioitinh=$_REQUEST['gioitinh'];
    $tt=$_REQUEST['tt'];
    $err=[];
    if($name==''){$err['name']='Bạn cần điền thông tin!';}
    if($lop==''){$err['lop']='Bạn cần điền thông tin!';}
    if($date==''){$err['date']='Bạn cần điền thông tin!';}
    if($gioitinh==''){$err['gioitinh']='Bạn cần điền thông tin!';}
    if($tt==''){$err['tt']='Bạn cần điền thông tin!';}
    if(empty($err))
    {
    $sql = "INSERT INTO `hocsinh` 
        (`name`, `class`,`Dateofbirth`,`gender`,`information`) 
        VALUES 
        ('$name','$lop','$date','$gioitinh','$tt')";
// echo $sql;
$conn->exec($sql);
header("location: ../index/index.php");
    }
}
?>
<h1 style="text-align: center;"> Thêm Học Sinh </h1>

<button class="btn btn-outline-success"><a href="../index/index.php">Back</a></button>
<form action="" method='post'>
Tên<br>
<input class="form-control" type="text" name='name'><br>
<span><?php if(isset($err['name'])){echo $err['name'];} ?></span><br>
Lớp<br>
<select name='lop' class="form-select b-0">
<option  value="c05">c05</option>
<option  value="c07">c07</option>
<option  value="c06">c06</option>
<option  value="m08">m08</option>
</select>
<span><?php if(isset($err['lop'])){echo $err['lop'];} ?></span><br>
Ngày Sinh<br>
<input class="form-control" type="date" name='date'><br>
<span><?php if(isset($err['date'])){echo $err['date'];} ?></span><br>
Giới Tính<br>
<input  type="radio" name="gioitinh" value="Nam"  checked> Nam<br>
<input  type="radio" name="gioitinh" value="Nư" > Nữ<br>
<input  type="radio" name="gioitinh" value="Khác" > Khác<br>
<span><?php if(isset($err['gioitinh'])){echo $err['gioitinh'];} ?></span><br>
Thông Tin<br>
<textarea name="tt" id="" cols="204" rows="3"></textarea>
<span><?php if(isset($err['tt'])){echo $err['tt'];} ?></span><br>

<button class="btn btn-outline-success" type='submit'>submit</button>

</form>