<?php
class Proveedor
{
    private $id;
    private $descripcion;
    
    public function getId()
    {
        return $this->id;
    }
    public function setId($i)
    {
        $this->id = $i;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }
    public function setDescripcion($d)
    {
        $this->descripcion = $d;
    }

}    