<?php
/**
 * Created by PhpStorm.
 * User: Oriol Gasset
 * Date: 6/6/2016
 * Time: 18:57
 */

namespace CursoSymfony;


class Punto
{
    private $x;
    private $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setX($x)
    {
        $this->x = $x;
    }

    public function setY($y)
    {
        $this->y = $y;
    }

    public function __toString()
    {
       return 'Punto [' . $this->getX() . ', ' . $this->getY() . ']';
    }

    public function distancia(Punto $p)
    {
        $difX = $p->getX() - $this->getX();
        $difY = $p->getY() - $this->getY();
        return sqrt(pow($difX,2) + pow($difY,2));
    }

}