<?php
class maso{
    public $name;
    public $code;
    public function __construct($name,$code){
        $this->name=$name;
        $this->code=$code;
    }

}
class Patient{
    protected $lisdata;

    public function __construct(){
        $this->lisdata=[];
    }
    public function push($name,$code){
        $bannhan=new maso($name,$code);
        array_push($this->lisdata,$bannhan);
    }
    public function kham(){
        array_shift($this->lisdata);
    }
    public function kt_benh(){
        $this->lisdata;
    }
    public function getQueue(){
        return $this->lisdata;
    }
}
$danhsach=new Patient();
// $danhsach->push('phi','1');
$danhsach->push('phi',2);
$danhsach->push('cuong',23);
$danhsach->push('tan',1);
$danhsach->push('thang',6);



// $danhsach->push('phi',2);

// $danhsach->push('cuong');
// $danhsach->push('thang');
// $danhsach->push('tan');
// $danhsach->chuyen_mang();
// echo'<pre>';
// print_r($danhsach->getQueue());
// $danhsach->kham();

echo'<pre>';
print_r($danhsach->getQueue());
$danhsach->kt_benh();
echo'<pre>';
print_r($danhsach->getQueue());

