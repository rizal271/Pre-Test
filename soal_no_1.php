<?php

$hrg_mie = 2500;
$uang_kasih = 50000;

	$jumbli =0;
	$m = 0;
	
	while ($hrg_mie <= $uang_kasih) {
		$uang_kasih = $uang_kasih - $hrg_mie;
		$m++;
		if ($m!= 4) {
			$jumbli++;
		}else{
			$jumbli = $jumbli+2;
			$m= 0;
		}
	}
	echo $jumbli;
?>