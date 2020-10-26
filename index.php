<?php
require_once 'modelo/PedidoCompra.php';
require_once 'modelo/Proveedor.php';
require_once 'modelo/LineaCompra.php';
require_once 'modelo/Producto.php';

$producto = new Producto();
$producto->setCodigo(18390);
$producto->setDescripcion("Zapatillas negras");
$producto->setPrecioVenta("$7.500");

$producto2 = new Producto();
$producto2->setCodigo(19012);
$producto2->setDescripcion("Jean celeste con roturas");
$producto2->setPrecioVenta("$1.500");

$lc = new LineaCompra();
$lc->setProducto($producto);
$lc->setCantidad(2);
$lc->setCostoUnitario("$7.500");
$lc->setFueEntregado("Si");

$lc2 = new LineaCompra();
$lc2->setProducto($producto2);
$lc2->setCantidad(1);
$lc2->setCostoUnitario("$1500");
$lc2->setFueEntregado("Si");

$proveedor = new Proveedor();
$proveedor->setId(4);
$proveedor->setDescripcion("Joao Ind");

$pc = new PedidoCompra();
$pc->setFecha("26/10/2020");
$pc->setProveedor($proveedor);
$pc->setFechaEntregaEstimada("1/11/2020");
$pc->setCostoTotal("$16.500");
$pc->setPedidoCerrado("Si");
$pc->setLineasCompras($lc);
$pc->setLineasCompras($lc2);
$pc->MostrarInformacion();