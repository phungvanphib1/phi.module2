
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
include "../db.php";

$sql = "SELECT * FROM categories";
// echo $sql;

//truyen cau truy van vao
$stmt = $conn->query($sql);

//Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_OBJ);//array => object

//fetchALL se tra ve du lieu nhieu hon 1 ket qua
$items = $stmt->fetchAll();

if(isset($_REQUEST['id']))
{

    $id=$_REQUEST['id'];
    $sql = "SELECT * FROM sach WHERE id ='$id'";
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
        $tg=$_REQUEST['tg'];
        $date=$_REQUEST['date'];
        $ls=$_REQUEST['ls'];
        if($name==""){$err['name']="bạn không thể để trống mục này!";}
        if($tg==""){$err['tg']="bạn không thể để trống mục này!";}
        if(empty($err))
        {
            $sql = "UPDATE `sach` SET `tenSach`='$name',`tacGia`='$tg',`ngayph`='$date',`category_id`='$ls' WHERE id='$id'";

        $conn->exec($sql);
        header("location: index.php");
        }
}

}else{
    header("location: index.php");
}
?>
thêm sách<br>
<a href="index.php">Back</a>
<form action="" method='post'>
tên sách<br>
<input type="text" name='name' value="<?=$rows->tenSach?>"><br>
<span style="color: red" ><?php if(isset($err['name'])){echo $err['name'];} ?><br></span>
tác giả<br>
<input type="text" name='tg' value="<?=$rows->tacGia?>"><br>
<span style="color: red"><?php if(isset($err['tg'])){echo $err['tg'];} ?><br></span>
ngày phát hành<br>
<input type="date" name='date' value="<?=$rows->ngayph?>"><br>
loại sách<br>
<select name="ls" id="">
   <?php foreach($items as $key=>$item) : ?>
<option <?=$item->id==$rows->category_id  ? 'selected' : ''?> value="<?=$item->id?>"><?=$item->loaisach?></option>
<?php endforeach; ?>
</select><br>
<button type='submit'>submit</button>

</form>




<?php
include "../layou/footer.php";

?>