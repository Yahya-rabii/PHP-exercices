<?php 






    $tab =[ 
    
        "Le salaire de M. A est" => "1000 $" 
      , "Le salaire de M. B est" => "1200 $"
      , "Le salaire de M. C est" => "1400 $"
      
    
     ];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>

.yahya{

color: blue;

};




</style>

<body>
    
<table border =1, style="width:90%">


<?php 

foreach ($tab as $info => $salaire) {
    

echo '<tr>'.'<td class = "yahya">'.$info.'</td>'.'<td>'.$salaire.'</td>'.'</tr>';



}


?>


</table>


</body>
</html>