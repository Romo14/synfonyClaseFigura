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

$index = new Index();


$p1 = new Punto(2, 1);
$c1 = new Circulo(3, $p1);
$q1 = new Cuadrado(5, $p1);

echo 'Circulo <br> Area: ' . $c1->area() . '<br>';
echo 'Perimetro: ' . $c1->perimetro() . '<br>';
echo $c1 . '<br><br>';


echo 'Cuadrado <br> Area: ' . $q1->area() . '<br>';
echo 'Perimetro: ' . $q1->perimetro() . '<br>';
echo $q1;

die;
echo $p1->distancia(new Punto(5, 6)) . '<br>';
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