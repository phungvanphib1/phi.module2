<?php

class Animal{
    public $name;
        public $color;
    public function __construct($ts_name,$ts_color){
        $this->name = $ts_name;
        $this->color = $ts_color;
    }
    public function say(){
        echo __METHOD__.'<br>';
    }
    public function go(){
        echo __METHOD__.'<br>';
        
    }
    public function setName($ts_name){
        // echo __METHOD__.'<br>';
        $this->name = $ts_name;
    }
    public function getName(){
        // echo __METHOD__.'<br>';
        return $this->name;
    }
    public function setColor($ts_color){
        // echo __METHOD__.'<br>';
        $this->color = $ts_color;
    }
    public function getColor(){
        // echo __METHOD__.'<br>';
        return $this->color;
    }
}

$meo = new Animal('Mèo', 'Đen');
$meo->say();
$meo->go();
$meo->setName('chó');
 $meo->getName();
$meo->setColor('trắng');
 $meo->getColor();

//  echo '</pre>';
echo '<pre>'; 
print_r($meo);
echo '<br>';
echo '<br>';


$cun=new Animal('Thắng', 'Trắng');
$cun->setName('đỏ');
$cun->setColor('đen');
echo $cun->getName();
echo '<br>';
echo $cun->getColor();
// echo $cun->name;
// echo '<br>';
// echo $cun->color;
// echo '<pre>';   
// print_r($cun);


//  echo '</pre>';





