<?php
class Producto
{
    private $codigo;
    private $descripcion;
    private $precioVenta;

    public function getCodigo()
    {
        return $this->codigo;
    }
    public function setCodigo($c)
    {
        $this->codigo = $c;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }
    public function setDescripcion($d)
    {
        $this->descripcion = $d;
    }


    public function getPrecioVenta()
    {
        return $this->precioVenta;
    }
    public function setPrecioVenta($pv)
    {
        $this->precioVenta = $pv;
    }


}