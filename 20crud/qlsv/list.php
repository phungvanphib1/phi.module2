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
        <a href="add.php">Đăng ký mượn sách</a>
    </td><hr><br><br>
<?php
include_once 'db.php';
$table = 'sinhvien';
$sql = "SELECT * FROM $table";
// echo $sql;

//truyen cau truy van vao
$stmt = $conn->query($sql);

//Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_OBJ);//array => object

//fetchALL se tra ve du lieu nhieu hon 1 ket qua
$rows = $stmt->fetchAll();

?>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Họ Và Tên</th>
            <th>Lơp</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach( $rows as $key => $row ): ?>
            <tr>
                <td><?php echo $row->id; ?></td>
                <td><?php echo $row->hovaten; ?></td>
                <td><?php echo $row->lop; ?></td>
                <td>
                    <a href="show.php?id=<?php echo $row->id; ?>">Xem</a> | 
                    <a href="update.php?id=<?php echo $row->id; ?>">Sua</a> | 
                    <a href="delete.php?id=<?php echo $row->id; ?>">Xoa</a> 
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>
<hr>
    <p>2022 library inc</p>
</body>
</html>
