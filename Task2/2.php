<?php
abstract class Figure
{
    abstract public function getPerimeter(): float;
    abstract public function getArea(): float;
}

class Circle extends Figure
{
    private $radius;

    public function __construct($radius)
    {
        if (empty($radius)) {
            throw new \Exception('Не указан радиус круга');
        }
        $this->radius = $radius;
    }

    public function getPerimeter(): float
    {
        return 2 * pi() * $this->radius;
    }

    public function getArea(): float
    {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle extends Figure
{
    private  $width;
    private $height;

    public function __construct(float $width, float $height)
    {
        if (empty($width)) {
            throw new \Exception('Не указана ширина прямоугольника');
        }
        if (empty($height)) {
            throw new \Exception('Не указана высота прямоугольника');
        }
        $this->width = $width;
        $this->height = $height;
    }

    public function getPerimeter(): float
    {
        return ($this->width + $this->height) * 2;
    }

    public function getArea(): float
    {
        return $this->width * $this->height;
    }
}

class Triangle extends Figure
{
    private $first_side;
    private $second_side;
    private $third_side;

    public function __construct(float $first_side, $second_side, $third_side)
    {
        if (empty($first_side)) {
            throw new \Exception('Не указана сторона треугольника');
        }
        if (empty($second_side)) {
            throw new \Exception('Не указана сторона треугольника');
        }
        if (empty($third_side)) {
            throw new \Exception('Не указана сторона треугольника');
        }
        $this->first_side = $first_side;
        $this->second_side = $second_side;
        $this->third_side = $third_side;
    }

    public function getPerimeter(): float
    {
        return ($this->first_side + $this->second_side + $this->third_side);
    }

    public function getArea(): float
    {
        $p = 0.5 * ($this->first_side + $this->second_side + $this->third_side);

        return sqrt($p * (($p - $this->first_side) * ($p - $this->second_side) * ($p - $this->third_side)));
    }
}

$circle = new Circle(15);
echo "Perimeter circle: " . $circle->getPerimeter() . "\n";
echo "Area circle: " . $circle->getArea() . "\n";

$rectangle = new Rectangle(3, 4);
echo "Area Rectangle: " . $rectangle->getArea() . "\n";
echo "Perimeter Rectangle: " . $rectangle->getPerimeter() . "\n";

$triangle = new Triangle(3, 4, 5);
echo "Area Triangle: " . $triangle->getArea() . "\n";
echo "Perimeter Triangle: " . $triangle->getPerimeter() . "\n";
