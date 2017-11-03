
<?php


   /* echo "ik doe het";
    $bedrijf1 = new Bedrijf;         // Instantiering van het object
    $bedrijf2 = new Bedrijf;         // Instantiering van het object
    echo $bedrijf1->bedrijfNaam;    // Met behulp van het pijltje -> kom ik bij de eigenschap VAN het object
    $bedrijf2->bedrijfNaam =  "Phillips";
    
    echo"<br>";
    echo $bedrijf1 -> bedrijfNaam;
    echo "<br>";
    echo $bedrijf2 -> bedrijfNaam;
    
    
    
    class Bedrijf{                   // Definitie van de class
        public $bedrijfNaam = "Scania";      
    }
    */

// voorbeeld 2
$boot1 = new boot();
$boot2 = new boot();
$boot3 = new boot();

$boot1->doopNaam = "Rubbermania";
$boot2->doopNaam = "Rotterdam";
$boot3->doopNaam = "Schalkje";

$boot1->lengte="4";
$boot2->lengte="16"; 
$boot3->lengte="25";

$boot1->diepgang="40";
$boot2->diepgang="600"; 
$boot3->diepgang="120"; 


class Boot{
    public $doopNaam;
    public $lengte;
    public $diepgang;
  
}
PrintEigenschappen($boot1);

function PrintEigenschappen($eenBoot){
    
    echo "De naam van de boot is: ".$eenBoot->doopNaam."<br>";
    echo "Hij heeft een lengte van : ".$eenBoot->lengte."<br>";
    echo "met een diepgang van: ".$eenBoot->diepgang." meter"."<br>";
}

?>
