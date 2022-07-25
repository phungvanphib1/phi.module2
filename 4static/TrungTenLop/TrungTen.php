<?php
include_once 'DongHa/Tam.php';
include_once 'GioLinh/Tam.php';

use DongHa\Tam;
use GioLinh\Tam as TamGioLinh;

$taiTam = new Tam('tam',22);
$phongTam = new TamGioLinh('Tâm',32);

$taiTam_1 = new DongHa\Tam('tam',22);
$phongTam_1 = new GioLinh\Tam('Tâm',32);

echo '<pre>';
print_r($taiTam);
print_r($phongTam);

echo '<hr>';
echo '<pre>';
print_r($taiTam_1);
print_r($phongTam_1);

?>