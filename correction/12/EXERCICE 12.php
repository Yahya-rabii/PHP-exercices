<?php 

$produits=array(array("reference"=>"ref001","designation"=>"hp","prix_unitaire"=>7500,"quantite"=>13),
                array("reference"=>"ref002","designation"=>"mac","prix_unitaire"=>1200,"quantite"=>9),
                array("reference"=>"ref003","designation"=>"toshiba","prix_unitaire"=>8500,"quantite"=>12),
                array("reference"=>"ref004","designation"=>"samsung","prix_unitaire"=>9000,"quantite"=>8)
              );


$taux=array(
    "hp"=>0.8,
    "mac"=>0.9,
    "toshiba"=>0.7,
    "samsung"=>0.6
);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table border , style="width:90%">

<?php

echo "<tr> <th>Réference</th>   <th>Désignation</th>  <th>Prix unitaire (DH)</th>  <th>Quantité</th>  <th>montant</th>  </tr>";
          
        foreach ($taux as $key => $val){
            
           echo '<tr>';

            foreach ($produits as $pro ){

            if($key == $pro["designation"])


            if($pro["quantite"] > 10 ){

                $Prix_unitaire = $val * $pro["prix_unitaire"];
                $montant=$Prix_unitaire * $pro["quantite"];

            echo '<tr>'.'<td>'.$pro["reference"].'</td>'.'<td>'.$pro["designation"].'</td>'.'<td>'.$pro["prix_unitaire"].'</td>'.'<td>'.$pro["quantite"].'</td>'.'<td>'.$montant.'</td>'.'</tr>';

            }
else {

    $Prix_unitaire =$pro["prix_unitaire"];
    $montant=$Prix_unitaire * $pro["quantite"];

    echo '<tr>'.'<td>'.$pro["reference"].'</td>'.'<td>'.$pro["designation"].'</td>'.'<td>'.$pro["prix_unitaire"].'</td>'.'<td>'.$pro["quantite"].'</td>'.'<td>'.$montant.'</td>'.'</tr>';


}

            }
        
            
        }
        echo '<tr>';

?>

</body>
</html>