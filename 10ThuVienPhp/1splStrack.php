<?php
//Khởi tạo đối tươngn
$phi=new SplStack();
//Thêm phần tử vào mảng Stack
$phi->push('phi');
$phi->push('tan');
$phi->push('cuong');
$phi->push('tam');
echo '<pre>';
print_r($phi); 

// lấy phần tử đầu tiên của mảng nhưng không xóa
echo $phi->top();
// xóa phần tử đầu tiên của mảng
ech0o $phi->pop();
echo '<pre>';
print_r($phi);

//đưa trỏ chuột tới vị trí đầu tiên
$phi->rewind();

//kiểm tra stack có phần tử hay không
// $phi->valid();

while( $phi->valid() ){
    echo $phi->current().'<br>';
    //
    //con trỏ nhảy
    $phi->next();
}
