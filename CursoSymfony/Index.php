<?php
/**
 * Created by PhpStorm.
 * User: Oriol Gasset
 * Date: 6/6/2016
 * Time: 18:04
 */

namespace CursoSymfony;

require_once 'Punto.php';
require_once 'Circulo.php';
require_once 'Cuadrado.php';
require_once 'Rectangulo.php';
require_once 'Figura.php';

$index = new Index();


$p1 = new Punto(2, 1);
$c1 = new Circulo(3, $p1);
$q1 = new Cuadrado(5, new Punto(3,5));
$r1 = new Rectangulo(2,4,$p1);

echo 'Circulo <br> Area: ' . $c1->area() . '<br>';
echo 'Perimetro: ' . $c1->perimetro() . '<br>';
echo $c1 . '<br><br>';

echo 'Rectangulo <br> Area: ' . $r1->area() . '<br>';
echo 'Perimetro: ' . $r1->perimetro() . '<br>';
echo $r1 . '<br><br>';

echo 'Cuadrado <br> Area: ' . $q1->area() . '<br>';
echo 'Perimetro: ' . $q1->perimetro() . '<br>';
echo $q1 . '<br><br>';

echo 'Distancia entre ' . $c1 . ' y '. $q1 . '= ' . $c1->distancia($q1). '<br>';

die;

var_dump($p1);

class Index
{
    public static function salida()
    {
        phpinfo();
    }

    public function prueba()
    {
        echo '<h1>Hello World</h1>';
    }
}

//Index::salida();