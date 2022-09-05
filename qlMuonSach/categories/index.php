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

?>

<a href="add.php">add</a>
<table class="table">
    <tr>
        <th>code</th>
        <th>loại sách</th>
        <th>tùy chọn</th>
    </tr>
    <?php foreach($rows as $key => $item) : ?>
        
    <tr>
        <td><?=$key+1?></td>
        <td><?=$item->loaisach?></td>
        <td>
            <a href="edit.php?id=<?=$item->id?>">Sửa</a>
            <a href="delete.php?id=<?=$item->id?>" onclick="return confirm('Bạn có chắc muốn xóa không?');">Xóa</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>





<?php
include "../layou/footer.php";

?>