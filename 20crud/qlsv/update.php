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
        <a href="add.php">Đăng Kí</a>
        <a href="list.php">Hiển Thị Danh Sách</a>
    </td> <hr><br><br>

    <form action="" method="post">
    <input placeholder="Họ và Tên SV" type="text" name="hovaten">
    <input placeholder="Số điện thoại" type="text" name="sodiendienthoai">
    <input placeholder="Nhập Email" type="text" name="email">
    <input placeholder="Lớp" type="text" name="lop">
    <button type="submit">Update</button>
</body>

</html>
<?php
include_once 'db.php';
$id=$_REQUEST['id'];
$sql = "SELECT * FROM sinhvien WHERE id='$id'";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetch se tra ve du lieu 1 ket qua
$rows = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$hovaten = $_POST['hovaten'];
$sodiendienthoai = $_POST['sodiendienthoai'];
$email = $_POST['email'];
$lop = $_POST['lop'];
        $updateSv = "UPDATE sinhvien SET hovaten = '$hovaten', sodiendienthoai = '$sodiendienthoai', email = '$email', lop = '$lop' WHERE id = '$id'";
        // echo $updateSv; exit;
        $conn->query($updateSv);
        // header('location:index.php');
        $_SESSION['flash_message'] = "Chỉnh sửa  thành công";

    }
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