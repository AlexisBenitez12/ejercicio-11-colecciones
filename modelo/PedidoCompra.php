<?php
class PedidoCompra
{
    private $fecha;
    private $proveedor;
    private $fechaEntregaEstimada;
    private $costoTotal;
    private $pedidoCerrado;
    private $listLineasCompras = array();

    public function getFecha()
    {
        return $this->fecha;
    }
    public function setFecha($f)
    {
        $this->fecha = $f;
    }

    public function getProveedor()
    {
        return $this->proveedor;
    }
    public function setProveedor($p)
    {
        $this->proveedor = $p;
    }

    public function getFechaEntregaEstimada()
    {
        return $this->fechaEntregaEstimada;
    }
    public function setFechaEntregaEstimada($fee)
    {
        $this->fechaEntregaEstimada = $fee;
    }

    public function getCostoTotal()
    {
        return $this->costoTotal;
    }
    public function setCostoTotal($c)
    {
        $this->costoTotal = $c;
    }

    public function getPedidoCerrado()
    {
        return $this->pedidoCerrado;
    }
    public function setPedidoCerrado($pc)
    {
        $this->pedidoCerrado = $pc;
    }

    public function getListLineasCompras()
    {
        return $this->listLineasCompras;
    }
    public function setLineasCompras($lc)
    {
        $this->listLineasCompras [] = $lc;
    }

    public function MostrarInformacion()
    {
        echo 'Fecha: '.$this->getFecha().'<br>'.'<br>';
        echo 'Proveedor: '.'<br>';
        echo 'Id: '.$this->getProveedor()->getId().'<br>';
        echo 'Descripcion: '.$this->getProveedor()->getDescripcion().'<br>'.'<br>';
        echo 'Fecha estimada de entrega: '.$this->getFechaEntregaEstimada().'<br>'.'<br>';
        echo 'Costo total: '.$this->getCostoTotal().'<br>'.'<br>';
        echo 'Pedido Cerrado: '.$this->getPedidoCerrado().'<br>'.'<br>';
        echo 'Producto: '.'<br>';
        foreach($this->getListLineasCompras() as $lc)
        {
            echo 'Codigo del producto: '.$lc->getProducto()->getCodigo().'<br>';
            echo 'Descripcion: '.$lc->getProducto()->getDescripcion().'<br>';
            echo 'Precio venta: '.$lc->getProducto()->getPrecioVenta().'<br>';
            echo 'Cantidad: '.$lc->getCantidad().'<br>';
            echo 'Costo unitario: '.$lc->getCostoUnitario().'<br>';
            echo 'Fue entregado: '.$lc->getFueEntregado().'<br>';
            echo '---'.'<br>';
        }
    }
}