<?php
//ophalen gegevens van url
$getalurl1 = $_GET['getal1'];
$getalurl2 = $_GET['getal2'];
$operator = $_GET['operator'];
// gedrag
switch($operator){  
    case  "plus":
        optellen($getalurl1,$getalurl2);
        break;

    case  "min":
        aftrekken($getalurl1,$getalurl2);
        break;

    case  "keer":
        vermenigvuligen($getalurl1,$getalurl2);
        break;

    case  "delen":
        delen($getalurl1,$getalurl2);
        break;

    Defaul:
        echo "foute invoer";
    }

// optellen
function optellen($getal1,$getal2){
                echo $getal1."+".$getal2."=".($getal1+$getal2)."<br>";
}
// aftrekken
function aftrekken($getal1,$getal2){
                echo $getal1."-".$getal2."=".($getal1-$getal2)."<br>";
}
// delen
function delen($getal1,$getal2){
                echo $getal1.":".$getal2."=".($getal1/$getal2)."<br>";
}
// vermenigvuldigen
function vermenigvuligen($getal1,$getal2){
                echo $getal1."*".$getal2."=".($getal1*$getal2)."<br>";
}



        
?>
