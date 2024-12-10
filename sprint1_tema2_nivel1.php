<?php
// Sprint 1. Tema 2. Nivell 1

declare(strict_types = 1);

// Exercici 1. Crear variables integer, double, string, boolean i constant i imprimir nom 
$enter=0;
$doble=3.1416;
$boleana=true;
$cadena="Soc un string";

echo "Integer: " . $enter . ", double(float): " . $doble ."<br>" ;
echo <<<VARIABLES
El resto de variables son: "<br>"
doble: $doble, boleana: $boleana y string: $cadena 
VARIABLES;

define("NOMBRE", "Cristina Cardona");

echo "<h1>" . NOMBRE . "</h1>";

// Exercici 2. funcions amb strings

$texto="Hello, World";

echo strtolower($texto) . "<br>";
echo strlen($texto) . "<br>";
echo strrev($texto) . "<br>";

$texto2="Aquest és el curs de PHP";

echo $texto . " " . $texto2 . "<br>";

// Exercici 3. Operacions amb nombres i calculadora

$x=2;
$y=-10;

$n=100.5;
$m=30.0;

echo "X = " . $x . "<br>";
echo "Y = " . $y . "<br>";
echo "suma= " . $x+$y . "<br>";
echo "resta= " . $x-$y . "<br>";
echo "producte= " . $x*$y . "<br>";
echo "mòdul= " . $x%$y . "<br>";

echo "<br>";

echo "N = " . $n . "<br>";
echo "M = " . $m . "<br>";
echo "suma= " . $n+$m . "<br>";
echo "resta= " . $n-$m . "<br>";
echo "producte= " . $n*$m . "<br>";
echo "mòdul= " . $n%$m . "<br>";

echo "<br>";

echo " Doble de x = " . $x*2 . "<br>";
echo " Doble de y = " . $y*2 . "<br>";
echo " Doble de n = " . $n*2 . "<br>";
echo " Doble de m = " . $m*2 . "<br>";

echo "<br>";

echo "Suma de totes les variables = " . $x+$y+$n+$m .  "<br>";
echo "Producte de totes les variables = " . $x*$y*$n*$m .  "<br>";

echo "<br>";
echo calculadora(560, 12, 1);
echo "<br>";

function calculadora(float $a, float $b, int $opcio) : string {
$resultat = "El resultado de la ";

switch ($opcio) {
    case 1 : 
        $resultat = $resultat . "suma es: " . $a + $b;
        break;
    case 2 : 
        $resultat = $resultat . "resta es: " . $a - $b;
        break;
    case 3 : 
        $resultat = $resultat . "multiplicació es: " . $a * $b;
        break;
    case 4 : 
        $resultat = $resultat . "divisió es: " . $a / $b;
        break;
}
    return $resultat;
 
}

// Exercici 4. Conteig fins a un nombre determinat, amb valor 10 per defecte i amb un salt determinat.

$a= 21;
$salto=2;

echo "<br>";
contar($a, $salto);
echo "<br>";

function contar(int $a = 10, int $salto) : void {
    $numero=1;
    echo "Recuento hasta " .$a . " de ". $salto . " en ". $salto . ": <br>"; 
    for ($i=1; ($numero+$salto) < $a; +$i++) {
       
        echo "Conteo " . $i . " Número:  " . $numero. "<br>";      
        $numero += $salto;
    }
echo "Se han contado " . $i . " números";

}

//Exercici 5. Grau d'estudiant d'acord amb la nota.
$nota = 60;

echo "<br>";
grau($nota);
echo "<br>";

function grau($nota) : void {
    if ($nota<33) {
        echo "L'estudiant ha de tornar a provar";
    }
    if ($nota>=33 && $nota<=44) {
        echo "Tercera divisió";
    }
    if ($nota<=59 && $nota>=45) {
        echo "Segona Divisió";
    }
    if ($nota>=60) {
        echo "Primera Divisió";
    }
}

//Exercici 6. 

echo isBitten();
function isBitten() : string {
   return rand(1,10)>5 ? "Charly en va mossegar el dit" : "Charly no em va mossegar el dir";
}
?>
