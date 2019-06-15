<?php
function d_ke_b($d)
{
 bcscale(0);

 $b = '';
 do
  {
   $b = bcmod($d,'2') . $b;
   $d = bcdiv($d,'2');
  } while (bccomp($d,'0'));

 return($b);
}
echo d_ke_b('27');
?>