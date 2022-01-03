
<?php 

$nom = isset( $_POST["nom"] ) ? htmlentities($_POST["nom"]) : null;
$prenom = isset( $_POST["prenom"] ) ? htmlentities($_POST["prenom"]) : null;

$Email = isset( $_POST["Email"] ) ? htmlentities($_POST["Email"]) : null;
$mp_p = isset( $_POST["mp"] ) ? htmlentities($_POST["mp"]) : null;

$sex = isset( $_POST["contact"] ) ? htmlentities($_POST["contact"]) : null;
$pays = isset( $_POST["pays"] ) ? htmlentities($_POST["pays"]) : null;

$bts = isset( $_POST["btsend"] ); 
$btc = isset( $_POST["btclear"] ); 



$aff_n ;
$aff_p ;
$aff_e ;
$aff_mp ;
$aff_s ;
$aff_ps;

if ($bts == "send") {
    
    $aff_n ="bonjour votre  nom est => ".$nom."<br>";
    $aff_p ="bonjour votre  prenom est => ".$prenom."<br>";
    $aff_e ="bonjour votre  email est => ".$Email."<br>";
    $aff_mp ="bonjour votre  mot de passe est => ".$mp_p."<br>";
    $aff_s ="bonjour votre  sex est => ".$sex."<br>";
    $aff_ps ="bonjour votre  pays est => ".$pays."<br>";
    
    
    }
    
   
if ($btc == "clear") {
    
    $nom = null;
    $prenom = null;
    $Email = null;
    $mp_p = null;
      
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
    

<form action="" method="post">
    

   <label for="nom"  >Votre nom</label>
    
    <input type="text" name="nom" value="<?=$nom;?>" >

<br>

    <label for="prenom"  >Votre prenom</label>
    
    <input type="text" name="prenom" value="<?=$prenom;?>" >

<br>

    <label for="Email"  > Email </label>
    
    <input type="text" name="Email" value="<?=$Email;?>" >
    
<br>

    <label for="mp">password</label>
    
    <input type="password" name="mp" value="<?=$mp_p;?>" >


    <br>
    <label >Sex :</label>


    <input type="radio" name="contact" value="Homme">
    <label for="contactChoice1">Homme</label>


    <input type="radio" name="contact" value="Femme">
    <label for="contactChoice2">Femme</label>

    <br>


    <label for="mp"> Pays </label>
    <select name="pays">
    <option value="france">France</option>
    <option value="espagne">Espagne</option>
    <option value="italie">Italie</option>
    <option value="royaume-uni">Royaume-Uni</option>
    <option value="canada">Canada</option>
    <option value="etats-unis">États-Unis</option>
    <option value="Maroc">Maroc</option>
    <option value="japon">Japon</option>
    </select>

<br>
    <button type ="submit" name ="btsend"  value="send" >  Inscription </button>
    <button type ="clear"  name ="btclear" value="clear" >  Annuler </button>

</form>


<?php 

 
if ($bts == "send") {
        
    echo $aff_n; 
    echo $aff_p ;
    echo $aff_e ;
    echo $aff_mp;
    echo $aff_s;
    echo $aff_ps;

    
    
  }

?>


</body>
</html>