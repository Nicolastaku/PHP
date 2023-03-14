<?php
//Crear funcion
function sendEmail($to, $subject, $body) {
    echo "send an email to $to";
  }

  //llamar funcionF
sendEmail($to, $subject, $body);
  //sendEmail('test@test.com');
  sendEmail('test@test.com', 'subject', 'body of the email'); //Enviar varios argumentos

  /* Definir los tipos de variables
  function sendEmail(string $to, string $subject, string $body) {
    //...
  }
  
*/
/* Permite usar el resultado de la funcion
<?php
function sendEmail($to) {
	return true;
}

$success = sendEmail('test@test.com');

if ($success) {
  echo 'email sent successfully';
} else {
  echo 'error sending the email';
}

?>
*/

/*
function sendEmail($to) {
	return true;
}

    $success = sendEmail('test@test.com');

    if ($success) {
    echo 'email sent successfully';
    } else {
    echo 'error sending the email';
    }
*/


//Retorna solo a debido a que no es accesible a los valores dentro de la funcion
/*
    $character = 'a';

    function test($c) {
    echo $c;
    }

    test($character);
*/

//Mantiene el valor dentro de la funsion.
/*
    $character = 'a';

    function test(&$c) {
    $c = 'b';
    }

    test($character);

    echo $character; //'b'
*/


//Acceder a una variable que se encuentra fuera de la funsion
/*
    $test = 'test';

    $myfunction = function() use ($test) {
    echo $test;
    return 'ok';
    };

    $myfunction()
*/


/*  Funsion Flecha
    $printTest = fn() => 'test2';

    $printTest(); //'test2
*/
/*
Aginar parametros a funcion Flecha

    $multiply = fn($a, $b) => $a * $b;

    $c=$multiply(2, 4); //8
    var_dump($c);
*/
/* Funsiones anonimas->No tienen nombre pero tienen asignda una variable
    $myfunction = function() {
    //do something here
    };

    $myfunction()
*/

/* Funsion Flecha llamando variables externas
    $a = 2;
    $b = 4;

    $multiply = fn() => $a * $b;

    $c=$multiply();
    echo $c;
*/

/*Imprime mapeado de Array
    $numbers = [1, 2, 3, 4];
    $doubles = array_map(fn($value) => $value * 2, $numbers);
    echo '<pre>'; //Mas estetico
    print_r($doubles); //Imprime variable
    //$doubles is now [2, 4, 6, 8]
*/

/*Filtra matriz
    $numbers = [1, 2, 3, 4];
    $even = array_filter($numbers, fn($value) => $value % 2 === 0);
    echo '<pre>'; //Mas estetico
    print_r($even); //Imprime variable

//$even is now [2, 4]
*/

/*Reduce todos los elementos de una matriz al multiplicarlo
$numbers = [1, 2, 3, 4];
$result = array_reduce($numbers, fn($carry, $value) => $carry * $value, 1);
echo '<pre>'; //Mas estetico
print_r($result); //Imprime variable
*/

?>