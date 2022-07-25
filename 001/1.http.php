<?php
$name = 'Phi'; // chuổi
$songuyen = 1236;  //nuber
$soThapPhan = 10.102; //float
$tHoacf = true; //Boolean
$mang = ['chơi game', 'bơi lội']; // array
// $doituong = new phi(); // object 
$nu = null;

//khai báo hằng số
// define('phi', 19,5);
const pi = 3.14;

//output
//  +echo : dùng cho. string, interger, float
echo $name.'<br>';
$bien =5;
echo $bien.'<br>';
echo 11.11.'<br>';
echo '<br>';
//  +print : dùng cho. string, interger, float
print $name.'<br>';
$bien1 =6;
print $bien1.'<br>';
print 11.12.'<br>';


//  +print_r : string, interger, float, array
print_r($name.'<br>');
$bien1 =6;
print_r($bien1.'<br>');
print_r(11.15.'<br>');
echo '<pre>';
print_r($mang);
echo '</pre>';




//  +var_dump : string, interger, float, array, Boolean, Null
var_dump($name);
$bien1 =7;
var_dump($bien1.'<br>');
var_dump(11.17.'<br>');
echo '<pre>';
var_dump($mang);
echo '</pre>';

var_dump($tHoacf).'<br>';
var_dump($nu).'<br>';


