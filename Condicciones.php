<?php
/*
    $age = 17;

    if ($age > 18) {
    echo '1-You can enter the pub';
    } else {
    echo '2-You cannot enter the pub';
    }

//Encadenar if con otro if- elseif
        $age = 17;

        if ($age > 20) {
        echo 'You are 20+';
        } elseif ($age > 18) {
        echo 'You are 18+';
        } else {
        echo 'You are <18';
        }
        */

//Break cierra la condicion
/*
    $age = 17;
    switch($age) {
    case 15:
            echo 'You are 15';
        break;
    case 16:
            echo 'You are 16';
        break;
    case 17:
            echo 'You are 17';
        break;
    case 18:
            echo 'You are 18';
        break;
    default:
        echo "You are $age";
    }
*/

//while
    $counter = 0;

    while ($counter < 10) {
    echo $counter;
    $counter++;
    }

//do while
    $counter = 0;

    do {
    echo $counter;
    $counter++;
    } while ($counter < 10);

//Foreach-> traer datos de una Matriz

    $list = ['a', 'b', 'c'];

    foreach ($list as $value) {
    echo $value;
    }

    $list = ['a', 'b', 'c'];

    foreach ($list as $key => $value) {
    echo $key;
    }

//For
    for ($i = 0; $i < 10; $i++) {
        echo $i;
    }
  
  //result: 0123456789

  //Sobre una matriz
    $list = ['a', 'b', 'c'];

    for ($i = 0; $i < count($list); $i++) {
    echo $list[$i];
    }

//result: abc

//Break /Continue-> Vuelve al bucle

    $list = ['a', 'b', 'c'];

    for ($i = 0; $i < count($list); $i++) {
        if ($list[$i] == 'b') {
        break;
    }
    echo $list[$i];
    }

//result: a
