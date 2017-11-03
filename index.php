<?php

	$beweging = "links";
	if($beweging == "vooruit") {
		echo "motor rechts vooruit en motor links vooruit draaien";
	} else {
		if ($beweging == "achteruit") {
			echo "motor rechts achteruit en motor links achteruit";
		} else {
			if ($beweging == "links") {
				echo "motor rechts achteruit en motor links vooruit";
			} else {
				if ($beweging == "rechts") {
					echo "motor rechts vooruit en motor links achteruit";
				} else {
					echo "beide motoren stop";
				}
			}
		}
	}		


?>
