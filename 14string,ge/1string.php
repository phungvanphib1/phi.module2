<?php
$str_phones = '0943612567,0905444555,0968787878,0941888999';
/*
B1: Tách chuỗi sang mảng
    B1.1: Tạo mảng vinaphones
B2: Duyệt mảng
    B2.1: So sánh 3 kí tự đầu tiên của chuỗi với 094 và 091
    B2.2: Nếu bằng thì push vào mảng vinaphones
B3: Dùng hàm implode với ký tự phân tách là ,
*/
//Output
//0943612567,0941888999
$hi=explode (',', $str_phones);
$vina=[];
foreach ($hi as $key => $value) {
    $ha = substr( $value,0,3);
    if($ha=='094'||$ha=='091'){
        array_push($vina,$value);
    }
}
$ih = implode(', ',$vina);
echo 'vinaphone: '. $ih;


