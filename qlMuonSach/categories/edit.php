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
    $sql = "SELECT * FROM categories WHERE id='$id'";
    // echo $sql;
    //truyen cau truy van vao
    $stmt = $conn->query($sql);
    
    //Thiết lập kiểu dữ liệu trả về
    $stmt->setFetchMode(PDO::FETCH_OBJ);//array => object
    //fetchALL se tra ve du lieu nhieu hon 1 ket qua
    $rows = $stmt->fetch();
    
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $name=$_REQUEST['name'];
        $sql = "UPDATE `categories` SET `loaisach`='$name' WHERE id='$id'";
    
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
name of category<br>
<input type="text" name='name' value="<?php if(isset($rows->loaisach)){echo $rows->loaisach;}else{echo '';}?>"><br>
<button type='submit'>submit</button>

</form>





<?php
include "../layou/footer.php";

?>