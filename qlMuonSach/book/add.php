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

$sql = "SELECT * FROM categories";
// echo $sql;

//truyen cau truy van vao
$stmt = $conn->query($sql);

//Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_OBJ);//array => object

//fetchALL se tra ve du lieu nhieu hon 1 ket qua
$rows = $stmt->fetchAll();

if($_SERVER['REQUEST_METHOD']=="POST")
{
    $name=$_REQUEST['name'];
    $tg=$_REQUEST['tg'];
    $date=$_REQUEST['date'];
    $ls=$_REQUEST['ls'];
    $err=[];
    if($name==""){$err['name']="bạn không thể để trống mục này!";}
    if($tg==""){$err['tg']="bạn không thể để trống mục này!";}
    if($date==""){$err['date']="bạn không thể để trống mục này!";}
    if(empty($err))
    {
        $sql="INSERT INTO `sach`( `tenSach`, `tacGia`, `ngayph`, `category_id`) VALUES ('$name','$tg','$date','$ls')";
    $conn->exec($sql);
    header("location: index.php");
    }
// header("location: index.php");
}
?>
thêm sách<br>
<a href="index.php">Back</a>
<form action="" method='post'>
tên sách<br>
<input type="text" name='name'><br>
<span><?php if(isset($err['name'])){echo $err['name'];} ?></span><br>
tác giả<br>
<input type="text" name='tg'><br>
<span><?php if(isset($err['tg'])){echo $err['tg'];} ?></span><br>
ngày phát hành<br>
<input type="date" name='date'><br>
<span><?php if(isset($err['date'])){echo $err['date'];} ?></span><br>
loại sách<br>
<select name="ls" id="">
   <?php foreach($rows as $key=>$item) : ?>
<option value="<?=$item->id?>"><?=$item->loaisach?></option>
<?php endforeach; ?>
</select><br>

<button type='submit'>submit</button>
</p>






<?php
include "../layou/footer.php";

?>