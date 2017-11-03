<?php
    $DagVanDeWeek = array("zondag","maandag","dinsdag","woensdag","donderdag","vrijdag","zaterdag");
    $dag = 0; 
    For ($t=1;$t < 5;$t++) {    
        for($i = 0; $i < count($DagVanDeWeek);$i++){
          $dag += 1;
            echo $dag." ".$DagVanDeWeek [$i]."<br>";
                                    
            
        }
            
    }

	?>

