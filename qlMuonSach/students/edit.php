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
if(isset($_REQUEST['id']))
{
    $id=$_REQUEST['id'];
    $sql = "SELECT * FROM sinhvien WHERE id='$id'";
    // echo $sql;
    //truyen cau truy van vao
    $stmt = $conn->query($sql);
    //Thiết lập kiểu dữ liệu trả về
    $stmt->setFetchMode(PDO::FETCH_OBJ);//array => object
    //fetchALL se tra ve du lieu nhieu hon 1 ket qua
    $rows = $stmt->fetch();
    if($_SERVER['REQUEST_METHOD']=="POST")
    {   
        $hovaten=$_REQUEST['hovaten'];
        $sodiendienthoai=$_REQUEST['sodiendienthoai'];
        $email=$_REQUEST['email'];
        $ls=$_REQUEST['lop'];
        if($hovaten==""){$err['hovaten']="bạn không thể để trống mục này!";}
        if($sodiendienthoai==""){$err['sodiendienthoai']="bạn không thể để trống mục này!";}
        if($email==""){$err['email']="bạn không thể để trống mục này!";}
        if($lop==""){$err['lop']="bạn không thể để trống mục này!";}
        if(empty($err))
        {
            $sql = "UPDATE `sach` SET `tenSach`='$name',`tacGia`='$tg',`ngayph`='$date',`category_id`='$ls' WHERE id='$id'";

        $conn->exec($sql);
        header("location: index.php");
        }
        
    
    // echo $sql;
    $conn->exec($sql);
    header("location: index.php");
    }
}else{
    header("location: index.php");
}


?>
categories<br>
<a href="index.php">Back</a>
<form action="" method='post'>
Họ Và Tên<br>
<input type="text" name='name' value="<?php if(isset($rows->hovaten)){echo $rows->hovaten;}else{echo '';}?>"><br>
Số Điện Thoại<br>
<input type="text" name='name' value="<?php if(isset($rows->sodiendienthoai)){echo $rows->sodiendienthoai;}else{echo '';}?>"><br>
Email<br>
<input type="text" name='name' value="<?php if(isset($rows->email)){echo $rows->email;}else{echo '';}?>"><br>
Lớp<br>
<input type="text" name='name' value="<?php if(isset($rows->lop)){echo $rows->lop;}else{echo '';}?>"><br>

<button type='submit'>submit</button>

</form>





<?php
include "../layou/footer.php";

?>