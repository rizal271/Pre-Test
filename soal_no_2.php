<?php

$al_ting = 7;

if ($al_ting <= 0 || $al_ting >= 10) {
	echo "al_ting Keliru ";
}else{
	for ($i=1; $i <=100 ; $i++) { 
		$t = 0;

		for ($x=1; $x <= $i ; $x++) { 
			if ($i % $x == 0) {
				$t++;
			}
		}
		if ($t== 2) {
			$bil[] = $i;
		}
	}

	for ($i=0; $i <$al_ting ; $i++) {

		for ($x=0; $x <=$i ; $x++) { 
			echo $bil[$x];
		} 
		echo "<br>";
	    	# code...
	}

}

?>