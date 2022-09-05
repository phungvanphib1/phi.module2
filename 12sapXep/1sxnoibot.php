<?php
//demo that toan noi bot;
// $book=['van','su','dia'];
// echo'<pre>';
// print_r($book);
// $temp=$book[0];
// $book[0]=$book[1];
// $book[1]=$temp;
// echo'<pre>';
// print_r($book);


// sap xep noi bot;
// $so=[6,5,34,22,40,11,18,23];
// echo '<pre>';
// print_r($so);
// for($i=0;$i<count($so)-1;$i++){
//     for($j=count($so)-1;$j>$i;$j--){
//         if($so[$j]<$so[$j-1]){
//             $temp=$so[$j-1];
//             $so[$j-1]=$so[$j];
//             $so[$j]=$temp;
//         }
//     }
// }
// echo '<pre>';
// print_r($so);

// $so=[6,5,34,22,40,11,18,23];
// echo '<pre>';
// print_r($so);
// for ($i=1;$i<count($so);$i++){
//     $j=$i-1;
//     $temp=$so[$i];
//     while($temp<$so[$j] && $j>0){
//         $so[$j+1]=$so[$j];
//         $j--;
//     }
//     $so[$j+1]=$temp;
// }
// echo '<pre>';
// print_r($so);

$so=[5,6,34,22,40,11,18,23];
echo '<pre>';
print_r($so);
for($i=1;$i<count($so)-1;$i++){
    $min=$i;
    for($j=$i+1;$j<count($so);$j++){
        if($so[$j]<$so[$min]){
            $min=$j;
        }
        
    }
    if($min!=$i){
        $temp=$so[$min];
        $so[$min]=$so[$i];
        $so[$i]=$temp;
    }
}
echo '<pre>';
print_r($so);