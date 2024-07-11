
<?php

interface Poligon
{
    public function calculateArea(): int;
    public function printArea(): void;
}
class Triangle implements Poligon
{
    private $base;
    private $heigth;


    function __construct($base, $heigth)
    {
        $this->base = $base;
        $this->heigth = $heigth;
    }

    public function calculateArea(): int
    {
        return ($this->base * $this->heigth) / 2;
    }

    public function printArea(): void
    {
        print_r("El area del triangulo será: " . $this->calculateArea() . "<br>");
    }
}

class Rectangle implements Poligon
{
    private $base;
    private $heigth;


    function __construct($base, $heigth)
    {
        $this->base = $base;
        $this->heigth = $heigth;
    }

    public function calculateArea(): int
    {
        return ($this->base * $this->heigth);
    }

    public function printArea(): void
    {
        print_r("El area del rectangulo será: " . $this->calculateArea() . "<br>");
    }
}

class Square implements Poligon
{
    private $side;


    function __construct($side)
    {
        $this->side = $side;
    }

    public function calculateArea(): int
    {
        return ($this->side * $this->side);
    }

    public function printArea(): void
    {
        print_r("El area del cuadrado será: ". $this->calculateArea() . "<br>");
    }
}

$triangle = new Triangle(10, 5);
$rectangle = new Rectangle(10, 5);
$square = new Square(4);

function areaPoligon(Poligon $poligon)
{
    $poligon->printArea();
}

// Mostrar áreas de los poligonos
areaPoligon($triangle);
areaPoligon($rectangle);
areaPoligon($square);

?>