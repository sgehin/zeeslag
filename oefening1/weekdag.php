<?php
    $DagVanDeWeek = array("zondag","maandag","dinsdag","woensdag","donderdag","vrijdag","zaterdag");
    $dag = 1;   
           
        for($i = 0; $i < count($DagVanDeWeek);$i++){
            $dag=$dag++;
            echo $dag."   ".$DagVanDeWeek [$i];
            echo "<br>";
        }
	

	?>


