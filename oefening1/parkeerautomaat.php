<?php
    $start = 9; 
   $stop = 14;
   $parkeertijd = $stop - $start;
   $prijs = 2.5;
   $tarief = $parkeertijd * $prijs;
   $tebetalen = 12.5;
        echo "Starttijd is:".$start."uur"."<br>";
    echo "Stoptijd is:".$stop."uur"."<br>";
    echo "Parkeertijd is:".$parkeertijd."uur"."<br>"."<br>";
    echo "Het te betalen bedrag is:".$tarief." "."Euro"."<br>"."<br>";
    if($tebetalen <$tarief){
        echo "Bedrag is onvoldoende. Slagboom blijft gesloten"."<br>";
    }else if($tebetalen == $tarief){
        echo"Dank u voor de betaling. U kunt uitrijden"."<br>";
           }else {
        echo "Restant krijgt u terug"."<br>";
       /* $d=mktime(11, 14, 54, 8, 12, 2014);
            echo "Created date is " . date("h:i:sa", $d)."<br>";
        $e= mktime(12,00,03, 8, 12, 2014);
            echo "nieuwe tijd is " . date("h:i:sa", $e)."<br>";
            
            $verschil = date("h:i:sa", $e) - mktime(12,00,03, 8, 12, 2014);
                echo "$verschil";
        */
    }
       
?>   
    