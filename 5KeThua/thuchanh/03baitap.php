<?php
class point2D{
    public $x;
    public $y;
    public function __construct($x,$y){
        $this->x=$x;
        $this->y=$y;
    }
    public function set_x($x){
        $this->x=$x;
    }
    public function get_x(){
         return 'x '.$this->x;   
    }
    public function set_y($y){
        $this->y=$y;
    }
    public function get_y(){
        return 'y '.$this->y;
    }public function set_xy($x,$y){
        $this->x=$x;
        $this->y=$y;
    }
    public function get_xy(){
       return  [$this->x,$this->y];
    }
}
class Point3D extends point2D{
    public $z;
    public function __construct($x,$y,$z){
        parent::__construct($x,$y);
        $this->z=$z;
    }
    public function set_z ($z){
        $this->z=$z;
    }
    public function get_z(){
        return 'z '.$this->z;
    }
    public function set_xyz($x,$y,$z){
        $this->x;
        $this->y;
        $this->z;
    }
    public function get_xyz(){
        return [$this->x ,$this->y,$this->z];
    }
    public function toString(){
        return $this->x . $this->y . $this->z; 
    }
}

$po = new Point3D(1,2,3);
echo $po->get_x();
echo '<br>';
echo $po->get_y();
echo '<br>';
echo $po->get_z();
echo '<pre>';
print_r($po->get_xy());
echo '<pre>';
print_r($po->get_xyz()) ;
echo '<br>';
echo $po->toString();


