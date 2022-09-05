<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    a {
        color: var(--bs-link-color);
        text-decoration: none;
    }
</style>
<?php
include_once "../db.php";
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM hocsinh WHERE id='$id'";
    // echo $sql;
    //truyen cau truy van vao
    $stmt = $conn->query($sql);
    //Thiết lập kiểu dữ liệu trả về
    $stmt->setFetchMode(PDO::FETCH_OBJ); //array => object
    //fetchALL se tra ve du lieu nhieu hon 1 ket qua
    $rows = $stmt->fetch();
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $name = $_REQUEST['name'];
        $lop = $_REQUEST['lop'];
        $date = $_REQUEST['date'];
        $gioitinh = $_REQUEST['gioitinh'];
        $tt = $_REQUEST['tt'];
        if ($name == "") {
            $err['name'] = "bạn không thể để trống mục này!";
        }
        if ($lop == "") {
            $err['lop'] = "bạn không thể để trống mục này!";
        }
        if ($date == "") {
            $err['date'] = "bạn không thể để trống mục này!";
        }
        if (empty($err)) {
            $sql = "UPDATE `hocsinh` SET `name`='$name',`class`='$lop',`Dateofbirth`='$date',`gender`='$gioitinh', `information`='$tt' WHERE id='$id'";

            $conn->exec($sql);
            header("location: ../index/index.php");
        }


        // echo $sql;

    }
}


?>
categories<br>
<a class="btn btn-outline-success" href="../index/index.php">Back</a>
<form action="" method='post'>
    Tên<br>
    <input class="form-control" type="text" name='name' value="<?php if (isset($rows->name)) {
                                                echo $rows->name;
                                            } else {
                                                echo $err;
                                            } ?>"><br>
    Lớp<br>
    <input class="form-control" type="text" name='lop' value="<?php if (isset($rows->class)) {
                                                echo $rows->class;
                                            } else {
                                                echo $err;
                                            } ?>"><br>
    Ngày Sinh<br>
    <input class="form-control" type="date" name='date' value="<?php if (isset($rows->Dateofbirth)) {
                                                echo $rows->Dateofbirth;
                                            } else {
                                                echo $err;
                                            } ?>"><br>
    Giới Tính<br>
    <input class="form-control" type="text" name='gioitinh' value="<?php if (isset($rows->gender)) {
                                                    echo $rows->gender;
                                                } else {
                                                    echo $err;
                                                } ?>"><br>
    <input type="radio" name="gioitinh" value="Nam" checked> Nam<br>
    <input type="radio" name="gioitinh" value="Nư"> Nữ<br>
    <input type="radio" name="gioitinh" value="Khác"> Khác<br>
    Thông Tin<br>
    <textarea name="tt" id="" cols="204" rows="3">
    <?php if (isset($rows->information)) {
        echo $rows->information;
    } else {
        echo $err;
    } ?>">
    </textarea>


    <button class="btn btn-outline-success" type='submit'>submit</button>

</form>