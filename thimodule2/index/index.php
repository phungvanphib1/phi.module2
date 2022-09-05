<?php
include_once "../db.php";
$sql = "SELECT * FROM hocsinh";
// echo $sql;

//truyen cau truy van vao
$stmt = $conn->query($sql);

//Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_OBJ); //array => object

//fetchALL se tra ve du lieu nhieu hon 1 ket qua
$rows = $stmt->fetchAll();


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $search = $_REQUEST['search'];
    if (isset($search)) {
        // $search = $_REQUEST['term'];
        $sql = "SELECT * FROM hocsinh WHERE name LIKE '%$search%' or class LIKE '%$search%' ";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $rows = $stmt->fetchAll();
        // print_r($rows1);
        // return $rows; 
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
        a {
    color: var(--bs-link-color);
    text-decoration: none;
}
    </style>

<body>
    <h1 style="text-align: center">Danh Sách Học Sinh</h1>
    <form method="POST" class="navbar-form navbar-left">
        <div class="row">
            <div class="col-10">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search" name='search'>
                </div>
            </div>
            <div class="col-2">
                <button type="submit" class="btn btn-default">Tìm kiếm</button>
            </div>
        </div>
    </form>
    <!-- <button><a href="../hocsinh/timkiem.php">Tim kiem</a></button> -->

    <button class="btn btn-outline-success"><a href="../hocsinh/add.php">Thêm Học Sinh</a></button>
    </form>
    <table class="table">
        <tr>
            <th>STT</th>
            <th>Tên Học Sinh</th>
            <th>Lớp</th>
            <th>Ngày Sinh</th>
            <th>Giới Tính</th>
            <th>Thông Tin</th>
            <th>Tùy Chỉnh</th>
        </tr>
        <?php foreach ($rows as $key => $item) : ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td><?= $item->name ?></td>
                <td><?= $item->class ?></td>
                <td><?= $item->Dateofbirth ?></td>
                <td><?= $item->gender ?></td>
                <td><?= $item->information ?></td>
                <td>
                    <a class="btn btn-outline-warning" href="../hocsinh/edit.php?id=<?= $item->id ?>">Sửa</a>
                    <a class="btn btn-outline-danger" href="../hocsinh/delete.php?id=<?= $item->id ?>" onclick="return confirm('Bạn có chắc muốn xóa không?');">Xóa</a>
                </td>
            </tr>
        <?php endforeach; ?>


    </table>
    <?php if (isset($search)) { ?>
        <button class="btn btn-outline-success" ><a href="index.php">Quay Lại</a></button>
    <?php } ?>



    </table>
    <ul class="pagination">
        <li class="active"><a href="http://localhost:3000/thimodule2/index/index.php">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
    </ul>

</body>

</html>