<?php
class Stack{
    protected $stack;
    protected $limit;
    public  function __construct($limit=3){
        $this->stack=[];
        $this->limit=$limit;
    }
    function push($item){
        array_unshift($this->stack,$item);
    }
    function pop(){
        array_shift($this->stack);
    }
    function isEmpty(){
        if(empty($this->stack)){
            echo 'false';
        }else{
            echo 'true';
        }
        
    }
    function peek(){
        return current($this->stack);
    }
    function isFull(){
        if ($this->limit==count($this->stack)){
            echo 'full';
        }else{
            echo 'no full';
        }
    }
    public function getstack()
    {
        return $this->stack;
    }
}

$phi=new Stack();
$phi->push('Văn');
$phi->push('sử');
$phi->push('địa');
// echo '<pre>';
$phi->pop();
print_r($phi->getstack());
echo '<br>';
echo $phi-> peek();
echo '<br>';
$phi->isFull();
echo '<br>';
$phi->isEmpty();