<?php
function isPrimeNumber($n)
{
    // so nguyen n < 2 khong phai la so nguyen to
    if ($n < 2) {
        return false;
    }
    // check so nguyen to khi n >= 2
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {+
            
            return false;
        }
    }
    return true;
}

echo("Các số nguyên tố nhỏ hơn 100 là: <br>");
for ($i = 0; $i < 100; $i++) {
    if (isPrimeNumber($i)) {
        echo($i . " ");
    }
}
$nam = array(
    1990,
    1991,
    1992,
    1993,
    1994,
    1995
);
  
//Dùng foreach xuất ra các năm trong $nam
foreach ($nam as $key => $value){
    echo $value;
}
?>