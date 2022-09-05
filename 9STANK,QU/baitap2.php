<?php
    class Queue{
        protected $queue;
        protected $limit;
        public function __construct($limit=3){
            $this->queue=[];
            $this->limit=$limit;
        }
        public function enqueue($item){
            array_push($this->queue,$item);
        }
        public function dequeue(){
            array_shift($this->queue);
        }
        public function isEmpty(){
            if(empty($this->queue)){
                echo 'false';
            }else{
                echo 'true';
            }
        }
        public function isFull(){
            if ($this->limit==count($this->queue)){
                echo 'full';
            }else{
                echo 'no full';
            }
        }
        public function getQueue(){
            return $this->queue;
        }
    }

   $phi=new Queue();
   $phi->enqueue('văn');
   $phi->enqueue('sử'); 
   $phi->enqueue('địa'); 
   echo '<pre>';
   print_r ($phi->getQueue());
   echo '<br>';
   $phi->dequeue();
   echo '<pre>';
   print_r ($phi->getQueue());
   $phi->isEmpty();
   echo '<br>';
   $phi->isFull();
?>