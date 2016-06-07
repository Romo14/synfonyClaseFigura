<?php
/**
 * Created by PhpStorm.
 * User: Oriol Gasset
 * Date: 6/6/2016
 * Time: 19:56
 */

namespace CursoSymfony;


abstract class Figura
{
    protected $origen;

    private static $num_figuras;

    public function __construct(Punto $origen)
    {
        $this->origen = $origen;
        self::$num_figuras++;
    }

    /**
     * @return Punto
     */
    public function getOrigen()
    {
        return $this->origen;
    }

    /**
     * @param Punto $origen
     */
    public function setOrigen($origen)
    {
        $this->origen = $origen;
    }

    public static function getNumFiguras()
    {
        return self::$num_figuras;
    }

    /**
     * @param mixed $num_figuras
     */
    public static function setNumFiguras($num_figuras)
    {
        self::$num_figuras = $num_figuras;
    }

    abstract function area();

    abstract function perimetro();
    
}