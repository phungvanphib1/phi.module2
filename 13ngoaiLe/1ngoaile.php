<?php

function sum($a,$b){
    if($b==0){
        throw new Exception('so chia =0');
    }
    $c = $a/$b;
    echo 'kq'. $c;
}
try {
    sum(5,0);
} catch (\Exception $e) {
    echo $e->getMessage;
}