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
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $name=$_REQUEST['name'];
    $sql = "INSERT INTO `categories` 
        (`loaisach`) 
        VALUES 
        ('$name')";

// echo $sql;
$conn->exec($sql);
header("location: index.php");
}
?>
categories add<br>
<a href="add.php">add</a>
<form action="" method='post'>
name of category<br>
<input type="text" name='name'><br>
<button type='submit'>submit</button>

</form>




<?php
include "../layou/footer.php";

?>