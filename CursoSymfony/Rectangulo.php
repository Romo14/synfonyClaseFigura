<?php
/**
 * Created by PhpStorm.
 * User: Oriol Gasset
 * Date: 7/6/2016
 * Time: 17:21
 */

namespace CursoSymfony;

require_once 'Cuadrado.php';

class Rectangulo extends Cuadrado
{

    private $alto;

    public function __construct($alto, $ancho, Punto $origen)
    {
        parent::__construct($ancho, $origen);
        $this->alto = $alto;
    }

    /**
     * @return Punto
     */
    public function getAlto()
    {
        return $this->alto;
    }

    /**
     * @param Punto $alto
     */
    public function setAlto($alto)
    {
        $this->alto = $alto;
    }

    public function perimetro()
    {
        return $this->getAncho() * 2 + $this->getAlto() * 2;
    }

    public function area()
    {
        return $this->getAncho() * $this->getAlto();
    }

    public function __toString()
    {
        return 'Rectangulo [ Alto:' . $this->getAlto() . ', Ancho:' . $this->getAlto() . ', Punto:' . $this - $this->getOrigen() . ' ]';
    }

}