
<?php 
$Lesrooster = array(
    array("maandag","dinsdag","woensdag","donderdag","vrijdag",),
    array("wiskunde","natuurkunde","frans","nederlands","geschiedenis"),
    array("natuurkunde","frans","nederlands","geschiedenis","wiskunde"),
    array("frans","nederlands","geschiedenis","wiskunde","natuurkunde"),
    array("nederlands","geschiedenis","wiskunde","natuurkunde","frans"),
    array("geschiedenis","wiskunde","natuurkunde","frans","nederlands"),
    );
    
echo "<pre>";

foreach($Lesrooster as $row){
    foreach ($row as $vak){
        echo "$vak  ";
        echo "<br>";    
    }
    
}

echo    "</pre>";

echo count($Lesrooster,1) ;

?>
   