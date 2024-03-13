<?php


echo "Hola, PHP \n";
/*
// alt + 92 para "\"
comentario 
de 
varias 
lineas
*/

// Variables
$my_string = "Esto es una cadena de texto";
// $ para variables y echo para imprimir

//  Con el "." concatenamos lo que sigue despues de él

$my_string = "Acá cambio el valor de la variable";
echo $my_string . "\n";

echo gettype($my_string) . "\n";
$my_string = 6;
echo $my_string . "\n";
echo gettype($my_string) . "\n";

$my_string = "Esto es una cadena de texto";

$my_int = 7;
$my_int = $my_int + 4;
echo $my_int . "\n";
echo $my_int - 1 . "\n";
echo $my_int . "\n";
echo gettype($my_int) . "\n";

$my_double = 6.5;
echo gettype($my_double). "\n";
echo $my_int + $my_double . "\n";
// echo $my_int + $my_double + $my_string . "\n";

$my_bool = true;
echo $my_bool . "\n";
echo gettype($my_bool) . "\n";
// true = 1. false representado como 0

//interpolacion
echo "El valor de mi integer es $my_int y el de mi boolean es $my_bool.\n";

//constantes
const MY_CONSTANT = "Valor de la constante";
echo MY_CONSTANT. "\n";

//Listas

$my_array = [$my_string, $my_int, $my_double];
echo gettype($my_array) . "\n";
echo $my_array[1] . "\n";
array_push($my_array, $my_bool);
// Se usa print_r para imprimir arrays
print_r($my_array);
// echo $my_array[4] . "\n"; Error, no hay n 4

//Diccionario
//                clave       resultado
$my_dict = array("string" => $my_string, "int" => $my_int, "bool" => $my_bool, "double" => $my_double);
echo gettype($my_dict);
print_r($my_dict);
echo $my_dict["int"] . "\n";

//Set (no repiten valores), no hay set en php

array_push($my_array, "brais");
array_push($my_array, "brais");
print_r($my_array);
print_r(array_unique($my_array));
// array unique no muestra valores repetidos

// flujos

for ($index = 0; $index < 10; $index++) {
    echo $index . "\n";
}

foreach ($my_array as $my_item) {
    echo $my_item . "\n";
}

while ($index <= sizeof($my_array)-1 ) {
    echo $my_array[$index] . "\n";
    $index++;
}

$my_int = 13;
$my_string = "hola";

if ($my_int == 11 && $my_string == "hola"){
    echo "el valor es 11\n";
}elseif ($my_int == 12 || $my_string == "hola") {
    echo "el valor es 12 u hola\n";
} 
else{
    echo "el valor no es 11\n";
}

//Funciones

function print_number(int $my_number){
    echo $my_number . "\n";
}

print_number(10.6);
print_number(11);
print_number(12);

class Myclass{
    public $name;
    public $age;

    function __construct($name, $age){
        $this-> name = $name;
        $this-> age = $age;
    }
}
$my_class = new Myclass("Marcos", 24);
print_r($my_class);
echo $my_class->name . "\n";
$my_class->name = "MarcosGomez";
echo $my_class->name . "\n";
echo gettype($my_class) . "\n";