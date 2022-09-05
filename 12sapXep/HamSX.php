<?php
$array=['a','g','b','u','y','c',1,8,7];
// sắp xếp theo thứ tực apb;
sort($array);
echo'<pre>';
print_r($array);

$so=[999,0,5,87,7,99,55,77,111,46,7,'88'];
// sắp xếp theo thứ tự nhỏ đến lớn. SORT_REGULAR (chuyển chuổi hoặc số)
sort($so,SORT_REGULAR);
echo'<pre>';
print_r($so);

$nhoDenLon=[999,0,5,87,7,99,55,77,111,46,7,'88'];
// sắp xếp theo thứ tự lớn đến nhỏ.
rsort($londennho);
echo'<pre>';
print_r($londennho);



$taxRates = [
    'a' => 7.75,
    'c' => 8.25,
    'b' => 8.875,
    'v' => 1.22,
    'p' => 4.11
];
// asort($taxRates); //Sắp xếp theo giá trị tăng dần
// echo'<pre>';
// print_r($taxRates);
// ksort($taxRates); //Sắp xếp theo key tăng dần
// echo'<pre>';
// print_r($taxRates);
// arsort($taxRates); //Sắp xếp theo giá trị giảm dần
echo'<pre>';
print_r($taxRates);
ksort($taxRates); //Sắp xếp theo key giảm dần
echo'<pre>';
print_r($taxRates);
