<?php
class Parents{
    // public $xe;
    // public $nha;
    public function car(){
        // echo $xe.'<br>';
        echo __METHOD__;
        echo '<br>';

    }
    public function house(){
        // echo $nha.'<br>';
        echo __METHOD__;

    }
}
class child extends Parents{

}
$phi = new child;
$phi->car();
$phi->house();

?>