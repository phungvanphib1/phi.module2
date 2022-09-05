<?php
class sta{
    public $stack;
    public function __construct(){
        $this->stack=[];
    }
    public function push($item){
        array_push($this->stack,$item); // đưa phần tử vào mảng
    }
    public function pop(){
      echo array_pop($this->stack); // xóa phần tử từ vị trí sau cùng
    }
}
$phi= new sta();
$phi->push('0');
$phi->push('1');
$phi->push('2');
$phi->push('3');
$phi->push('4');
echo'<pre>';
print_r($phi);
$phi->pop();
$phi->pop();
$phi->pop();
$phi->pop();
$phi->pop();
