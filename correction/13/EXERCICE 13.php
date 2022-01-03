<?php

$tab=[11,32,3,42,3,23,4,5,76,3,2,31,20];


function aff($tab){

for ($i=0; $i <count($tab) ; $i++) { 
    echo $tab[$i]." ";
}

}


function cal_moy($tab){
 $somme =0;
 $moyenne =0;
    
 for ($i=0; $i <count($tab) ; $i++) { 
        $somme= $somme + $tab[$i];
    }
    
    $moyenne = $somme / count($tab);
return $moyenne;

    }


function pre_20($tab){

   $t=0;
    
    for ($i=0; $i <count($tab) ; $i++) { 


if ($tab[$i] == 20) {
    return true;
    $t++;
                     }


           }

if ($t == count($tab)){

    return false;
                   
                      }

}






function me_note($tab){

    $me_n =$tab[0];
       
    for ($i=0; $i <count($tab) ; $i++) { 
           
        if ($tab[$i] > $me_n) {
            $me_n = $tab[$i];
        }
        
       }
       
       
   return $me_n;
   
       }
   



       function sup_eg_10($tab){

        $t =0;
           
        for ($i=0; $i <count($tab) ; $i++) { 
               
            if ($tab[$i] >= 10) {
                $t++;
            }
            
           }
           
           
       return $t;
       
           }


aff($tab);

echo '<br>';
$moyenne = cal_moy($tab);
echo $moyenne;


if (pre_20($tab)){

echo '<br> 20 existe <br>';

}

else {
    echo '<br> 20 nexiste pas <br>';

}


$me_n = me_note($tab);

echo 'la meilleure note est : '.$me_n.'<br>';


$su_eg= sup_eg_10($tab);

echo 'les note >= 10 sont : '.$su_eg.'<br>';
?>