<?php

//Imprimir en pantalla
echo "PHP";

//Definir variable
$name = 'Flavio';
$name = "Flavio";
$age = 20;
$name = 3;

//Imprimir valor de variable
var_dump($age);

//Operadores
$base = 20;
$height = 10;

$area = $base * $height;
var_dump($area);

//+, -, *, /(división), %(resto) y **(exponencial).

//Operadores de Comparacion

2 < 1; //false
1 <= 1; // true
1 <= 2; // true

1 == '1'; //true   si son iguales
1 === '1'; //false si son identicos

// Operadores-Diferentes

1 != 1; //false
1 != '1'; //false
1 != 2; //true

// Operadores-No son identicos

1 !== 1; //false
1 !== '1'; //true

// Logical AND with && or "and"

true && true; //true
true && false; //false
false && true; //false
false && false; //false

true and true; //true
true and false; //false
false and true; //false
false and false; //false

// Logical OR with || or "or"

true || true; // true
true || false; //true
false || true; //true
false || false; //false

true or true; // true
true or false; //true
false or true; //true
false or false; //false

// Logical XOR (one of the two is true, but not both)

true xor true; // false
true xor false; //true
false xor true; //true
false xor false; //false

//Operador not

$test = true;
!$test; //false

//Operadores combiandas

1 > 2 || 2 > 1; //true

1 !== 2 && 2 > 2; //false


//Operadores unarios

$age = 20;
$age++;
//age is now 21

$age--;
//age is now 20


//Cadenas
$name = 'Flavio'; //string defined with single quotes

$name = "Flavio"; //string defined with double quotes

$test = 'an example';

$example = "This is $test"; //This is an example

//Espacio en texto

$example = "This is a line\nThis is a line";

/*
\n & \t
output is:

This is a line
This is a line
*/

//Concatenar dos cadenas
$firstName = 'Flavio';
$lastName = 'Copes';

$fullName = $firstName . ' ' . $lastName;



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

/*Operaciones con cadenas

trim();//elimina el espacio en blanco al principio y al final de una cadena
strtoupper();//hace una cadena en mayúsculas
strtolower();//hace una cadena en minúsculas
ucfirst();//pone el primer caracter en mayusculas
strpos();//encuentra la primera aparición de una subcadena en la cadena
explode();//para dividir una cadena en una matriz
implode();//para unir elementos de matriz en una cadena
addcslashes — Cadena de comillas con barras en estilo C
addlashes — Cadena de comillas con barras
bin2hex — Convierte datos binarios en representación hexadecimal
picar — Alias ​​de rtrim
chr — Genera una cadena de un solo byte a partir de un número
chunk_split — Dividir una cadena en trozos más pequeños
convert_cyr_string — Convierte de un conjunto de caracteres cirílicos a otro
convert_uudecode — Decodifica una cadena uuencoded
convert_uuencode — Uuencode una cadena
count_chars — Devuelve información sobre los caracteres utilizados en una cadena
crc32 — Calcula el polinomio crc32 de una cadena
crypt — Hashing de cadena unidireccional
echo — Salida de una o más cadenas
explotar — Dividir una cadena por una cadena
fprintf — Escribe una cadena formateada en una secuencia
get_html_translation_table — Devuelve la tabla de traducción utilizada por htmlspecialchars y htmlentities
hebrev — Convierte texto hebreo lógico en texto visual
hebrevc — Convierta texto hebreo lógico en texto visual con conversión de nueva línea
hex2bin — Decodifica una cadena binaria codificada hexadecimalmente
html_entity_decode — Convierte entidades HTML a sus caracteres correspondientes
htmlentities : convierte todos los caracteres aplicables en entidades HTML
htmlspecialchars_decode — Convierte entidades HTML especiales de nuevo en caracteres
htmlspecialchars — Convierte caracteres especiales en entidades HTML
implode — Unir elementos de matriz con una cadena
unirse - Alias ​​de implosión
lcfirst — Convierte el primer carácter de una cadena en minúsculas
levenshtein — Calcula la distancia de Levenshtein entre dos cadenas
localeconv — Obtener información de formato numérico
ltrim — Elimina los espacios en blanco (u otros caracteres) desde el principio de una cadena
md5_file — Calcula el hash md5 de un archivo dado
md5 — Calcula el hash md5 de una cadena
metaphone — Calcula la clave metaphone de una cadena
money_format — Formatea un número como una cadena de moneda
nl_langinfo — Consultar idioma e información local
nl2br — Inserta saltos de línea HTML antes de todas las nuevas líneas en una cadena
number_format — Dar formato a un número con miles agrupados
ord — Convierte el primer byte de una cadena a un valor entre 0 y 255
parse_str — Analiza la cadena en variables
print — Salida de una cadena
printf — Muestra una cadena formateada
quoted_printable_decode — Convierte una cadena imprimible entre comillas en una cadena de 8 bits
quoted_printable_encode — Convierte una cadena de 8 bits en una cadena imprimible entre comillas
quotemeta — Cita metacaracteres
rtrim — Elimina los espacios en blanco (u otros caracteres) del final de una cadena
setlocale — Establecer información de configuración regional
sha1_file — Calcula el hash sha1 de un archivo
sha1 — Calcula el hash sha1 de una cadena
similar_text — Calcula la similitud entre dos cadenas
soundex — Calcula la clave soundex de una cadena
sprintf — Devuelve una cadena formateada
sscanf — Analiza la entrada de una cadena según un formato
str_contains — Determinar si una cadena contiene una subcadena dada
str_ends_with — Comprueba si una cadena termina con una subcadena determinada
str_getcsv — Analiza una cadena CSV en una matriz
str_ireplace — Versión que no distingue entre mayúsculas y minúsculas de str_replace
str_pad — Rellena una cadena a una cierta longitud con otra cadena
str_repeat — Repetir una cadena
str_replace — Reemplaza todas las apariciones de la cadena de búsqueda con la cadena de reemplazo
str_rot13 — Realiza la transformación rot13 en una cadena
str_shuffle — Mezcla aleatoriamente una cadena
str_split — Convierte una cadena en una matriz
str_starts_with — Comprueba si una cadena comienza con una subcadena dada
str_word_count — Devuelve información sobre las palabras utilizadas en una cadena
strcasecmp — Comparación de cadenas binarias seguras que no distinguen entre mayúsculas y minúsculas
strchr — Alias ​​de strstr
strcmp — Comparación de cadenas binarias seguras
strcoll — Comparación de cadenas basada en la configuración regional
strcspn — Encuentra la longitud del segmento inicial que no coincide con la máscara
strip_tags — Elimina las etiquetas HTML y PHP de una cadena
stripcslashes — Cadena sin comillas citada con addcslashes
stripos — Encuentra la posición de la primera aparición de una subcadena que no distingue entre mayúsculas y minúsculas en una cadena
stripslashes — Elimina las comillas de una cadena entrecomillada
stristr — strstr que no distingue entre mayúsculas y minúsculas
strlen — Obtener la longitud de la cadena
strnatcasecmp — Comparaciones de cadenas que no distinguen entre mayúsculas y minúsculas usando un algoritmo de "orden natural"
strnatcmp — Comparaciones de cadenas utilizando un algoritmo de "orden natural"
strncasecmp — Comparación de cadenas seguras binarias que no distinguen entre mayúsculas y minúsculas de los primeros n caracteres
strncmp — Comparación de cadenas binarias seguras de los primeros n caracteres
strpbrk — Busca en una cadena cualquiera de un conjunto de caracteres
strpos — Encuentra la posición de la primera aparición de una subcadena en una cadena
strrchr — Encuentra la última aparición de un carácter en una cadena
strrev — Invertir una cadena
strripos — Encuentra la posición de la última aparición de una subcadena que no distingue entre mayúsculas y minúsculas en una cadena
strrpos — Encuentra la posición de la última aparición de una subcadena en una cadena
strspn — Encuentra la longitud del segmento inicial de una cadena que consiste completamente en caracteres contenidos dentro de una máscara dada
strstr — Encuentra la primera aparición de una cadena
strtok — Tokenizar cadena
strtolower — Poner una cadena en minúsculas
strtoupper — Poner una cadena en mayúsculas
strtr — Traducir caracteres o reemplazar subcadenas
substr_compare — Comparación binaria segura de dos cadenas desde un desplazamiento, hasta caracteres de longitud
substr_count — Cuenta el número de ocurrencias de subcadena
substr_replace — Reemplazar texto dentro de una porción de una cadena
substr — Devuelve parte de una cadena
trim — Elimina los espacios en blanco (u otros caracteres) desde el principio y el final de una cadena
ucfirst — Convierte el primer carácter de una cadena en mayúscula
ucwords — Mayúsculas el primer carácter de cada palabra en una cadena
utf8_decode — Convierte una cadena de UTF-8 a ISO-8859-1, reemplazando caracteres no válidos o irrepresentables
utf8_encode — Convierte una cadena de ISO-8859-1 a UTF-8
vfprintf — Escribe una cadena formateada en una secuencia
vprintf — Muestra una cadena formateada
vsprintf — Devuelve una cadena formateada
wordwrap — Envuelve una cadena a un número determinado de caracteres
*/


//Funciones matematicas
/*
abs — Valor absoluto
acos — Arco coseno
acosh — Coseno hiperbólico inverso
asin — Arco seno
asinh — Seno hiperbólico inverso
atan2 — Arco tangente de dos variables
atan — Arco tangente
atanh — Tangente hiperbólica inversa
base_convert — Convierte un número entre bases arbitrarias
bindec — Binario a decimal
ceil — Redondear fracciones hacia arriba
cos — coseno
cosh — Coseno hiperbólico
decbin — De decimal a binario
dechex — De decimal a hexadecimal
decocción — De decimal a octal
deg2rad — Convierte el número en grados al equivalente en radianes
exp — Calcula el exponente de e
expm1 — Devuelve exp(número) - 1, calculado de una manera que es precisa incluso cuando el valor de número es cercano a cero
fdiv — Divide dos números, según IEEE 754
piso — Redondear fracciones hacia abajo
fmod — Devuelve el resto de coma flotante (módulo) de la división de los argumentos
hexdec — De hexadecimal a decimal
hypot — Calcula la longitud de la hipotenusa de un triángulo rectángulo
intdiv — División de enteros
is_finite — Encuentra si un valor es un número finito legal
is_infinite — Encuentra si un valor es infinito
is_nan — Encuentra si un valor no es un número
log10 — Logaritmo en base 10
log1p — Devuelve log(1 + número), calculado de forma precisa incluso cuando el valor de número es cercano a cero
log — Logaritmo natural
max — Encuentra el valor más alto
min — Encuentra el valor más bajo
octdec — De octal a decimal
pi — Obtener el valor de pi
pow — Expresión exponencial
rad2deg — Convierte el número en radianes al número equivalente en grados
round — Redondea un flotador
pecado - seno
sinh — Seno hiperbólico
sqrt — Raíz cuadrada
tan — tangente
tanh — Tangente hiperbólica
*/


//Arrays - Definir

$list = [1, 2];
$list = array(1, 2);

$list = [1, 'test']; //Contener diferentes tipos de valores

$list = [1, [2, 'test']];//Contener otras matrizes

//LLamara valores de una matriz
$list = ['a', 'b'];
$list[0]; //'a' --the index starts at 0
$list[1]; //'b'

//Agregar valores a una matriz

$list = ['a', 'b'];
$list[] = 'c';

/*
$list == [
  "a",
  "b",
  "c",
]
*/

//Agregar un elemento al inicio de la matriz

$list = ['b', 'c'];
array_unshift($list, 'a');

/*
$list == [
  "a",
  "b",
  "c",
]
*/

//Cuenta la cabntidad de elementos en una matriz
$list = ['a', 'b'];
count($list); //2

//Comprobar si tiene un elemento especifico
$list = ['a', 'b'];
in_array('b', $list); //true

//Comprobar y mostrar el indice
$list = ['a', 'b'];
array_search('b', $list) //1

//Funciones con matrizes
/*
is_array()para comprobar si una variable es una matriz
array_unique()para eliminar valores duplicados de una matriz
array_search()para buscar un valor en la matriz y devolver la clave
array_reverse()para invertir una matriz
array_reduce()para reducir una matriz a un solo valor usando una función de devolución de llamada
array_map()para aplicar una función de devolución de llamada a cada elemento de la matriz. Por lo general, se usa para crear una nueva matriz modificando los valores de una matriz existente, sin alterarla.
array_filter()para filtrar una matriz a un solo valor usando una función de devolución de llamada
max()para obtener el valor máximo contenido en la matriz
min()para obtener el valor mínimo contenido en la matriz
array_rand()para obtener un elemento aleatorio de la matriz
array_count_values()para contar todos los valores en la matriz
implode()para convertir una matriz en una cadena
array_pop()para eliminar el último elemento de la matriz y devolver su valor
array_shift()igual que array_pop()pero elimina el primer elemento en lugar del último
sort()para ordenar una matriz
rsort()para ordenar una matriz en orden inverso
array_walk()De manera similar, array_map()hace algo por cada elemento de la matriz, pero además puede cambiar los valores en la matriz existente.
*/

/*Arreglos asociativos

$list = ['first' => 'a', 'second' => 'b'];

$list['first'] //'a'
$list['second'] //'b'


array_key_exists()para verificar si existe una clave en la matriz
array_keys()para obtener todas las claves de la matriz
array_values()para obtener todos los valores de la matriz
asort()para ordenar una matriz asociativa por valor
arsort()para ordenar una matriz asociativa en orden descendente por valor
ksort()para ordenar una matriz asociativa por clave
krsort()para ordenar una matriz asociativa en orden descendente por clave

*/





?>