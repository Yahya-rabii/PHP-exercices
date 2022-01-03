<?php 
$a = 1221;
$b = 122;
$c = 11211;
$max = 0;
$min = 0;

if($a > $b && $a > $c  ){

    $max = $a;
    echo 'le max est => '.$max;


}




if($b > $a && $b > $c  ){

    $max = $b;
    echo 'le max est => '.$max;


}





if($c > $a && $c > $b  ){

    $max = $c;
    echo 'le max est => '.$max;


}



if($a < $b && $a < $c  ){

    $min = $b;
    echo 'le min est => '.$min;

}


if($b < $a && $b < $c  ){

    $min = $b;
    echo 'le min est => '.$min;

}

if($c < $a && $c < $b  ){
 
    $min = $c;
    echo 'le min est => '.$min;

}




?>