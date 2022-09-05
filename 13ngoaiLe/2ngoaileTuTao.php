<?php
class customException extends Exception{
    public function hien_thi_loi(){
        $error='';
        $error .='<br> loi:'.$this-> getMessage();
        $error .='<br> code:'.$this-> getCode();
        $error .='<br> file:'.$this-> getFile(); 
        $error .='<br> line:'.$this-> getLine();  
        return $error;
    }
}

function sum($a,$b){
    if($b==0){
        throw new customException('so chia =0');
    }
    $c = $a/$b;
    echo 'kq'. $c;
}
try {
    sum(5,0);
} catch (\Exception $e) {
    echo $e->hien_thi_loi();
}