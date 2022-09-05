<?php
$phi=new SplQueue();
// unshift() thêm phần tử vào đầu tiên của mảng
// thêm phần tử vào cuối 
$phi->enqueue('phi');
$phi->enqueue('cuong');
$phi->enqueue('tam');
$phi->enqueue('tan');
// $phi->unshift('1');
echo '<pre>';
print_r($phi);

//đưa trỏ chuột tới vị trí đầu tiên
$phi->rewind();
//kiểm tra trong mảng có phần tử hay không
while ($phi->valid()) {
echo $phi->current(), "\n";
//con trỏ nhảy
$phi->next();
}
echo '<hr>';
//đếm số phần tử trong mảng
echo $phi->count ().' Phần tử'.'<br>';
// lấy phần tử đầu tiên của mảng
echo $phi->bottom();
echo '<pre>';
print_r($phi);
// lấy và xáo phần tử đầu tiên của mảng 
echo $phi->dequeue();  // || shift()   ;phi
echo '<pre>';
print_r($phi);
// top() của queue lấy phần tử cuối của mảng mà không xóa
echo $phi->top(); //tan
echo '<pre>';
print_r($phi);
echo $phi->pop();  //xóa phần tử cuối mảng
echo '<pre>';
print_r($phi); 



?>