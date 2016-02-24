<?php
$somevar=15;
function addit () {
   GLOBAL $somevar;
   $somevar++ ;
   echo 'somevar is $somevar';
}
addit();
print_r(getdate());
?>

 <?php
        function total_Sum($a,$c=5, $b=3){
             echo $a."+ ".$b." + ".$c." = ".($a+$b+$c) ;
        }
        total_Sum(1);
 ?>