<?php

//bia 2
$age=18;
if($age>=18){
    echo "duoc uong bia";
}
echo '<br>';

//bai 3
$age=18;
$money=true;
if($age>=18&&$money==true){
    echo "duoc uong bia";
}
echo '<br>';

// bai 4
$age=18;
$money=true;
if($age>=18||$money==true){
    echo "duoc uong bia";
}
echo '<br>';

// bai 5
$age=17;
$money=true;
if($age!=18){
    echo "bạn phải uống nước ngọt";
} 

echo '<br>';

// bai 6

$money = true;
$quanMo = true;
$choNo = true; 

if($quanMo==true){
    if($money==true||$choNo==true){
        echo"được nhậu";
    }
}
echo '<br>';

// bai7

$quanMo = true;
$choNo = false; 
$money = false;


if($quanMo==true){
    if($money==true||$choNo==true){
        echo"nhậu";
    }else{
        echo"cút về";
    }
}
echo"<br>";

// bai8
$day = 8;
switch($day){
        case ($day <= 2 || $day <= 6):
            echo 'đi làm';
            break;
        case ($day == 7):
            echo 'đi chơi';
            break;
    default:
            echo'ở nhà';
            break;
}
echo"<br>";

// bai 9
$month = 2;
switch($month){
        case ($month ==1 ):
            echo '31 ngày';
            break;
        case ($month == 2):
            echo '28 ngày';
            break;
    default:
            echo'30 ngày';
            break;
}
echo"<br>";

//bài 10
$day = 7;
switch($day){
        case 2:
            echo 'đi làm';
            break;
        case 3:
            echo 'đi làm';
            break;
        case 4:
            echo 'đi làm';
            break;  
        case 5:
            echo 'đi làm';
            break;  
        case 6:
            echo 'đi làm';
            break;    
        case 7:
            echo 'đi chơi';
            break;
    default:
            echo'ở nhà';
            break;
}
echo"<br>";

// bài 11 
$age = 18; 
echo ($age>=18)? 'được uống bia' : 'méo';

echo '<br>';

//bai 12
$day = 8;
switch($day){
        case ($day >= 2 && $day <= 6):
            echo 'đi làm';
            break;
        case ($day == 7):
            echo 'sinh hoạt';
            break;
    default:
            echo'relax';
            break;
}
echo"<br>";

//bai 13
for ($i=0;$i<=5;$i++){
    echo $i;
}

echo'<br>';

//bài 14
for ($i=1;$i<=10;$i++){
    echo "5 X ". $i . "=" . (5*$i). '<br>';
}

echo'<br>';
// bài 15

for ($i=1;$i<=100;$i++){
    if($i%2==0){
        echo $i . '<br>' ;
    }
}
echo'<br>';

// bài 16
for ($i=100;$i>=1;$i--){
    if($i%2!=0){
        echo $i . '<br>' ;
    }
}
echo'<br>';

// bai 17



