<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
Quản Lí Thư Viện
    </h1>
    <td>
 <a href="list.php">Quay Lại Trang Chủ</a>
    </td> <hr><br><br>
<?php
include_once 'db.php';
$id = $_REQUEST['id'];
$sql = "SELECT * FROM `sinhvien` WHERE `id` = $id";
//truyen cau truy van vao
$stmt = $conn->query($sql);
//Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_OBJ);//array => object
//fetch se tra ve duy nhất 1 ket qua
$row = $stmt->fetch();
?>
<table border="1">
    <tr>
        <td> Họ Và Tên </td>
        <td> <?php echo $row->hovaten;?> </td>
    </tr>
    <tr>
        <td> Lớp Học </td>
        <td>  <?php echo $row->lop;?> </td>
    </tr>
    <tr>
        <td> Email </td>
        <td> <?php echo $row->email;?> </td>
    </tr>
    <tr>
        <td> Số Điện Thoại </td>
        <td> <?php echo $row->sodiendienthoai;?> </td>
    </tr>
</table>
<hr>
    <p>2022 library inc</p>
</body>
</html>