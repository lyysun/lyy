<?php

$n=152;
echo res($n);
function res($n){
     
     $a=$n/100%10;
     $b=$n/10%10;
     $c=$n/1%10;

     if($a*$a*$a + $b*$b*$b +$c*$c*$c==$n){
     	echo "是水仙花";die;
     }else{
     	echo "不是水仙花";die;
     }

}

?>