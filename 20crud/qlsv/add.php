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
        <!-- <a href="add.php">Đăng Ký</a> -->
        <a href="list.php">Hiển Thị Danh Sách</a>
    </td> <hr><br><br>
<form action="" method="post">
    <input placeholder="Họ và Tên SV" type="text" name="hovaten">
    <input placeholder="Số điện thoại" type="text" name="sodiendienthoai">
    <input placeholder="Nhập Email" type="text" name="email">
    <input placeholder="Lớp" type="text" name="lop">
    <button type="submit">Them</button>
    <!-- <button type="submit" value="Submit">Submit</button> -->
</form>
<?php
// require_once 'db.php';
 include_once 'db.php';
// lấy tt
if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
$hovaten = $_POST['hovaten'];
$sodiendienthoai = $_POST['sodiendienthoai'];
$email = $_POST['email'];
$lop = $_POST['lop'];
// thêm sv
$addsv = "INSERT INTO sinhvien (hovaten, sodiendienthoai, email, lop ) VALUES ('$hovaten', '$sodiendienthoai', '$email', '$lop')";

// echo $addsv; exit;  //(kiểm tra lệnh fql)

//thực thi thêm sv
$conn->exec($addsv);
}
?>
<hr>
    <p>2022 library inc</p>
</body>
</html>

