<?php

class Parents{
    // public $xe;
    // public $nha;
    public function car(){
        // echo $xe.'<br>';
        // echo __METHOD__;
        echo 'xe của cha'.'<br>';

    }
    public function house(){
        'nhà của cha'.'<br>';
        // echo $nha.'<br>';
        // echo __METHOD__;

    }
}
class child extends Parents{
    public function car(){
        echo 'xe của con'.'<br>';
    }
        public function house(){
            echo 'nhà của cha';
}
}
$phi = new child;
$phi->car();
$phi->house();


?>