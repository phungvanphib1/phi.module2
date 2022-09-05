<?php
 class Arraylist{
    private $elements=[];
    // private $this->elements = $elements;
    public function add($item){
        array_push($this->elements , $item);
    }
    public function get($index) {
        
        echo 'phần tử truy cập' . $this-> elements[$index];
    }
    public function size(){
        echo 'độ dài mảng ' . count($this->elements);
    }
    public function isEmpty(){
        if(count($this->elements)==0){
            var_dump(true);
        }else{
            var_dump(false) ;
        }
    }
    public function find($index){
        echo 'tìm ' . $this->elements[$index];
    }
    public function removeByIndex($index){
        unset ($this->elements[$index]);
    }
    public function toArray(){
        echo '<pre>';
        print_r ($this->elements);
    }
    public function addAtPos($item,$index){
        array_splice($this->elements, $index,0 ,$item);
    }
 }

 $hihi = new Arraylist;
 $hihi->add(5);
 $hihi->add(2);
 $hihi->add(3);
 $hihi->add(4);
 $hihi->get(1);
 echo '<br>';
 $hihi->size();
 echo '<br>';
 $hihi->addAtPos( 7 , 1);
 $hihi->removeByIndex(2);
 $hihi->find(1);
 $hihi->toArray();
 $hihi->isEmpty();
 