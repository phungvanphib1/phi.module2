<?php
class circle{
    public $radius;
    public $color;
    public function __construct($radius, $color){
        $this->radius=$radius;
        $this->color=$color;
    }
    public function set_radius(){
        $this->radius=$radius;
    }
    public function get_radius(){
        return 'radius: '.$this->radius;
    }
    public function set_color(){
        $this->color=$color;
    }
    public function get_color(){
        return 'Color: '.$this->color;
    }
    public function area(){
        return 'diện tích: '.$this->area=pow($this->radius,2)*3.14 . ' Cm2';
    }

}
class cylinder extends circle{
    public $height;
    public function __construct($height,$radius,$color){
        parent::__construct($radius,$color);
        $this->height=$height;
    }    
    public function volume(){
        return 'V='. 3.14 * pow($this->radius,2)*$this->height . ' Cm3';
    }
}
$hinhtru= new cylinder(4,4,'đen');
echo $hinhtru->get_radius();
echo '<br>';
echo $hinhtru->get_color();
echo '<br>';
echo $hinhtru->area();
echo '<br>';
echo $hinhtru->volume();
?>