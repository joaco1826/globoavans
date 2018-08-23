<?php

namespace App\Soap;

class GetTest
{
    /**
     * @var string
     */
    protected $prueba;

    public function __construct($prueba)
    {
        $this->prueba = $prueba;
    }

    /**
     * @return string
     */
    public function getprueba()
    {
        return $this->prueba;
    }

}