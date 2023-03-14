<?php
$name = 'Flavio';
strlen($name); //6

//Podemos obtener una porción de una cadena usando substr():

$name = 'Flavio';
substr($name, 3); //"vio" - start at position 3, get all the rest
substr($name, 2, 2); //"av" - start at position 2, get 2 items

//Podemos reemplazar una parte de una cadena usando str_replace():

$name = 'Flavio';
str_replace('avio', 'ower', $name); //"Flower"

//Por supuesto podemos asignar el resultado a una nueva variable:

$name = 'Flavio';
$itemObserved = str_replace('avio', 'ower', $name); //"Flower"

//trim();//elimina el espacio en blanco al principio y al final de una cadena
//strtoupper();//hace una cadena en mayúsculas
//strtolower();//hace una cadena en minúsculas
//ucfirst();//pone el primer caracter en mayusculas
//strpos();//encuentra la primera aparición de una subcadena en la cadena
//explode();//para dividir una cadena en una matriz
//implode();//para unir elementos de matriz en una cadena



?>
