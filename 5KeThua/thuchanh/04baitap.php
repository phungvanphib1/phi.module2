<?php 
class point{
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
        return $this->x;
    }
    public function set_y($y){
        $this->y=$y;
        
    }
    public function get_y(){
        return $this->y;
        
    }
    public function set_xy($x,$y){
        $this->x=$x;
        $this->y=$y;

    }
    public function get_xy(){
        return [$this->x , $this->y];
        
    }
    public function toString(){
        return' hiih ' ;
    }
}
class MoveablePoint extends point{
    public $xSpeed;
    public $ySpeed;
    public function __construct($x,$y,$xSpeed,$ySpeed){
        $this->xSpeed=$xSpeed;
        $this->ySpeed=$ySpeed;
        parent::__construct($x,$y);
    }
    public function set_xSpeed($xSpeed){
        $this->xSpeed=$xSpeed;
    }
    public function get_xSpeed(){
        return $this->xSpeed;
    }
    public function set_ySpeed($ySpeed){
        $this->ySpeed=$ySpeed;

    }
    public function get_ySpeed(){
        return $this->ySpeed;

    }
    public function get_Speed(){
        return [$this->x,$this->y,$this->xSpeed,$this->ySpeed];
    }
    public function move(){
       return 'một con chó'; 
    }
}
$phi= new MoveablePoint(1,2,3,4);

echo $phi -> get_x();
echo $phi -> get_y();
echo $phi -> get_xSpeed();
echo $phi -> get_ySpeed();

echo '<pre>';
print_r ($phi-> get_Speed());
print_r ($phi -> get_xy());
echo $phi->move();
echo $phi->toString();

?>
