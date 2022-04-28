<?php
$stack= array();

array_push($stack,"limones");
array_push($stack,"peras");
array_push($stack,"sandías");
print_r($stack);
$pedido = array_pop($stack);
print_r($stack);


 $cola = new SplQueue();
 
 $cola->enqueue('pan');
 $cola->enqueue('carne');
 $cola->enqueue('pescado');
 
 print_r($cola);
 
 $cola->enqueue('cosmeticos');

 print_r($cola);
 
 $cola->dequeue();
 
 print_r($cola);


$stack= array();
array_push($stack,"pan");
array_push($stack,"carne");
array_push($stack,"pescado");
print_r($stack);
$pedido = array_pop($stack);
print_r($stack);
?>
