<?php
/**
 * Created by PhpStorm.
 * User: Oriol Gasset
 * Date: 6/6/2016
 * Time: 19:46
 */

namespace CursoSymfony;

require_once 'Punto.php';


class Cuadrado extends Figura
{
    protected $origen;
    private $ancho;

    public function __construct($ancho, Punto $origen)
    {
        parent::__construct($origen);
        $this->ancho = $ancho;
    }

    /**
     * @return mixed
     */
    public function getAncho()
    {
        return $this->ancho;
    }
    

    /**
     * @param mixed $ancho
     */
    public function setAncho($ancho)
    {
        $this->ancho = $ancho;
    }

    public function area()
    {
        return pow($this->getAncho(), 2);
    }


    public function perimetro()
    {
        return $this->getAncho() * 4;
    }

    public function __toString()
    {
        return 'Cuadrado [ ancho=' . $this->getAncho() . ', origen=' . $this->getOrigen() . ' ]';
    }
}