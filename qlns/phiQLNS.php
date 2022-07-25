<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">

        Ho: <input type="text" name="ho" id=""> <br>
        Tên: <input type="text" name="ten" id=""> <br>
        ngày sinh: <input type="date" name="ngaySinh" id=""> <br>
        maNhanVien: <input type="number" name="maNhanVien" id=""> <br>
        <input type="submit" onclick="t" value="Thêm">
        <input type="submit" onclick="s" value="Sửa">
        <input type="submit" onclick="x" value="Xóa">
        <input type="submit" name="hienthi" onclick="hienthi()" value="Hiển Thị"/>

</form>
</body>
<?php
if($_SERVER['REQUEST_METHOD']=='POSH'){
    $ho = $_POSH ['ho'];
    $ten = $_POSH ['ten'];
    $ngaySinh = $_POSH ['ngaySinh'];
    $maNhanVien = $_POSH ['maNhanVien'];
    class nhanvien{
        public $ho;
        public $ten;
        public $ngaySinh;
        public $maNhanVien;
         function hienthi(){
            echo ;
        }
    }

    }
?>
</html>