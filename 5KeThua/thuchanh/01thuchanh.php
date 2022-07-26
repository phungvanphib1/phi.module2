<?php


class Shape{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function show(): string
    {
        return "I am a shape. My name is $this->name";
    }
}
// use JetBrains\PhpStorm\Pure;

class Circle extends Shape
{
    public int|float $radius;

    #[Pure] public function __construct(string $name, int|float $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    #[Pure] public function calculateArea(): int|float
    {
        return pi() * pow($this->radius, 2);
    }

    #[Pure] public function calculatePerimeter(): int|float
    {
        return pi() * $this->radius * 2;
    }
}
// use JetBrains\PhpStorm\Pure;

class Cylinder extends Circle
{
    public int $height;

    #[Pure] public function __construct(string $name,int|float $radius, int $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }

    #[Pure] public function calculateArea(): int|float
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }

    #[Pure] public function calculateVolume(): int|float
    {
        return parent::calculateArea() * $this->height;
    }
}
// use JetBrains\PhpStorm\Pure;

class Rectangle extends Shape
{
    public int $width;
    public int $height;

    #[Pure] public function __construct(string $name,
                                        int $width,
                                        int $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea(): float|int
    {
        return $this->height * $this->width;
    }

    public function calculatePerimeter(): float|int
    {
        return ($this->height + $this->width) * 2;
    }
}
// use JetBrains\PhpStorm\Pure;

class Square extends Rectangle
{
    #[Pure] public function __construct(string $name, int $width)
    {
        parent::__construct($name, $width, $width);
    }
}
$circle = new Circle('Circle 01', 3);
echo 'Circle area: ' . $circle->calculateArea() . '<br />';
echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';

$cylinder = new Cylinder('Cylinder 01', 3, 4);
echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter() . '<br />';

$rectangle = new Rectangle('Rectangle 01', 3, 4);
echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br />';

$square = new Square('Square 01', 4);
echo 'Square area: ' . $square->calculateArea() . '<br />';
echo 'Square perimeter: ' . $square->calculatePerimeter() . '<br />';