<?php
    introductie("jaap", "900");
    
    echo "ff tussendoor";





    function introductie( $voornaam, $tijd ){
        echo "Beste ".$voornaam;
        echo "Bij deze schrijf ik u het volgende";
        echo "Vandaag begint de les om ".$tijd." uur";
        echo "<br>";
    }

   introductie("piet", "1100");
   introductie("klaas", "1230");

?>

