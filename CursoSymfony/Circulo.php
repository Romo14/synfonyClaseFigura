<?php
/**
 * Created by PhpStorm.
 * User: Oriol Gasset
 * Date: 6/6/2016
 * Time: 19:32
 */

namespace CursoSymfony;

require_once 'Punto.php';
require_once 'Figura.php';

class Circulo extends Figura
{
    private $r;
    public function __construct($r, Punto $origen)
    {
        parent::__construct($origen);
        $this->r = $r;
    }

    /**
     * @return mixed
     */
    public function getR()
    {
        return $this->r;
    }

    /**
     * @param mixed $r
     */
    public function setR($r)
    {
        $this->r = $r;
    }

    public function area()
    {
        return M_PI * pow($this->getR(), 2);
    }

    public function perimetro()
    {
        return 2 * M_PI * $this->getR();
    }

    public function __toString()
    {
        return 'Circulo [ radio=' . $this->getR() . ', origen=' . $this->getOrigen() . ' ]';
    }

}