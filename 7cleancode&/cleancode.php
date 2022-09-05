<?php
function thang($moth){
    switch($moth){
        case 1: 
        case 3: 
        case 5: 
        case 6: 
        case 8: 
        case 10: 
        case 12: 
            echo 'thang'.$moth.'31 ngày';
            break;
        case 4: 
        case 5: 
        case 9: 
        case 11:
            echo 'tháng'.$moth.'30 ngày';
            break;
        case 2:
            echo 'tháng'.$moth.'39 ngày';
            break;
    }
}
thang(12);
?>