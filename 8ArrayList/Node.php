<?php
class Node{
    public $data=[];
    public $next;
  public function __construct($data){   
     $this->data = $data;     
     $this->next = NULL;   
 }    
    // function aNode(){  
    //   return $this->data;    
    // }
}

class LinkedList extends Node{
    public $head;
    public $tail;
    public function __construct(){
        $this->head = NULL;
        $this->tail = NULL;
    }
    public function addFirst($item){
        array_unshift($this->
        data, $item);
    }public function addLast($item){
        $this->data=$item;
    }public function removeFirst(){
        array_shift($this->data);
    }public function removeLast(){
        array_pop($this->data);
    }public function getFirst(){
        return $this->data[0];
    }public function getLast(){
        return count($this->data)-1;
    }
}

$phi=new LinkedList();
$phi->addFirst(1);
print_r($phi->data);