<?php /*Aplicación Nº 6 (Carga aleatoria)
Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
función rand ). Mediante una estructura condicional, determinar si el promedio de los números
son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
resultado.*/

//OPCION UNA DE HACERLO
//constructor
//opcion dos --> for
//opcion tres --> array_push( , )
//opcion cuatro --> array asociativos. 
//angular2 pagina para leer

//para mostrar vamos a usar Var_Dump(*array*) que es el metodo que muestra pero con los errores mas detallados. 

//opcion uno
echo "<BR>FORMA UNO<BR>";
$arrayuno = array(rand(),rand(),rand(),rand(),rand());

var_dump($arrayuno);

//opcion dos 

for($i=0;$i<5;$i++)
{$arraydos[$i]=array(rand());}

echo "<BR><BR>FORMA DOS<BR>";
var_dump($arraydos);


//opcion tres
echo "<BR><BR>FORMA TRES<BR>";
$arraytres = array(rand());
array_push($arraytres,rand(),rand(),rand(),rand());
var_dump($arraytres);


//opcion cuatro}
echo "<BR><BR>FORMA CUATRO<BR>";
$arraycuatro['cero'] = rand();
$arraycuatro['uno'] = rand();
$arraycuatro['dos'] = rand();
$arraycuatro['tres'] = rand();
$arraycuatro['cuatro'] = rand();

var_dump($arraycuatro);

?>