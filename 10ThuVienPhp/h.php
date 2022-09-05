<?php
// $a= 13%2;
// echo $a;
$n=13;
$mang=[];
if ($n%2==0){
    array_push($mang,0);
    $b=Math.floor($n/2);
    $n=$b;
}else{
    array_push($mang,1);
    $b=Math.floor($n/2);
    $n=$b;
}