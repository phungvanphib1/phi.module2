<?php
class Thutu{
    public $name;
    public $huychong;
    public $danhsach;
    public function __construct(){
        $this->name=$name;
        $this->huychong=$huychong;
        $this->danhsach=[];
    }
    public function push($n,$h){
        array_push($this->danhsach);
    }
    public function get(){
        return $this->danhsach;
    }
}
$phi = new Thutu();
$phi->push('VN',1);
$phi->push('VN',2);
$phi->push('VN',3);
$phi->push('VN',5);
echo '<pre>';
print_r($phi->get());


