<?php
include_once 'db.php';

// echo '<pre>';
// print_r($_REQUEST);
// die();
//
$id = $_REQUEST['id'];
// echo $id;
$xoasv = "DELETE FROM `sinhvien` WHERE `sinhvien`.`id` = $id ";
// echo $sql;
$conn->exec($xoasv);

//chuyen huong ve trang list.php
header("Location: list.php");