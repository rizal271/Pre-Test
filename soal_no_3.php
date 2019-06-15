<?php
    function pohon($nexttahun,$panjang_awal){
        for ($i=0; $i < $nexttahun ; $i++) {
            $panjang_awal = ($panjang_awal* 2)+1;
        }
        return $panjang_awal;
    }
    echo pohon(2,3);
 ?>