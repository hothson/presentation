<?php

//class AreaCalculator
//{
//    protected $shapes;
//
//    public function __construct($shapes = [])
//    {
//        $this->shapes = $shapes;
//    }
//
//    public function sum()
//    {
//        foreach ($this->shapes as $shape) {
//            if (is_a($shape, 'Square')) {
//                $area[] = pow($shape->length, 2);
//            } elseif (is_a($shape, 'Circle')) {
//                $area[] = pi() * pow($shape->radius, 2);
//            }
//        }
//
//        return array_sum($area);
//    }
//}

class Square
{
    public $length;

    public function __construct($length)
    {
        $this->length = $length;
    }

    public function area()
    {
        return pow($this->length, 2);
    }
}

class Circle
{
    public $radius;

    public function construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return pi() * pow($this->radius, 2);
    }
}

class AreaCalculator
{
    protected $shapes;

    public function __construct($shapes = [])
    {
        $this->shapes = $shapes;
    }

    public function sum()
    {
        foreach ($this->shapes as $shape) {
            $area[] = $shape->area();
        }

        return array_sum($area);
    }
}

$shapes = [
    new Circle(2),
    new Square(5),
    new Square(6),
];

$areas = new AreaCalculator($shapes);
echo $areas->sum();

//php solid/principle_2.php
