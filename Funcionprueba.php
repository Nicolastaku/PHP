<?php
$numbers = [1, 2, 3, 4];
$result = array_reduce($numbers, fn($carry, $value) => $carry * $value, 1);
echo '<pre>'; //Mas estetico
print_r($result); //Imprime variable

?>