<?php 

$nom = isset( $_GET["nom"] ) ? htmlentities($_GET["nom"]) : null;
$age = isset( $_GET["age"] ) ? htmlentities($_GET["age"]) : null;
$bts = isset( $_GET["btsend"] ); 
$btc = isset( $_GET["btclear"] ); 
$aff;



if ($bts == "send") {
    
$aff ="bonjour ".$nom." vous avez ".$age." ans" ;


}

if ($btc == "clear") {
    
  $nom = null;
  $age = null;
    
}
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
    

<form action="" method="get">
    
    <label for="nom"  >Votre nom</label>
    
    <input type="text" name="nom" value="<?=$nom;?>" >
    
<br>
    <label for="age">Votre age</label>
    
    <input type="number" name="age" value="<?=$age;?>" >


    <br>

<button type ="submit" name ="btsend"  value="send" >  envoyer </button>
<button type ="clear"  name ="btclear" value="clear" >  Vider </button>

</form>


<?php 


if ($bts == "send") {
    
    echo $aff ;
    
    
    }

if ($btc == "clear") {
    
        $aff = null ;
        
        
        }

?>





</body>
</html>