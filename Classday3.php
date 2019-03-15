<?php


class Db{

  public static function dg1($n){
        $j=1;
        $i=1;
       
        for ($k=0; $k <$n ; $k++) { 
        	$j=$j+$i;
        	$i=$j-$i;

        }
        echo $i;
  }


  public static function dg2($n){
  	
            if($n==1){
            	echo 1;die;
            }
         
  
       	return self::dg2($n-1) + self::dg2($n-2);
      
  }

}