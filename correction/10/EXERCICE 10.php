
<?php 

$Email = isset( $_POST["Email"] ) ? htmlentities($_POST["Email"]) : null;
$mp_p = isset( $_POST["mp"] ) ? htmlentities($_POST["mp"]) : null;

$bts = isset( $_POST["btsend"] ); 

$aff;


if ($bts == "send") {
    
    $aff ="bonjour votre  email est => ".$Email."<br>"."votre  mot de passe est =>".$mp_p  ;
    
    
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
    
    <label for="Email"  > Email </label>
    
    <input type="text" name="Email" value="<?=$Email;?>" >
    
<br>
    <label for="mp">password</label>
    
    <input type="password" name="mp" value="<?=$mp_p;?>" >


    <br>

<button type ="submit" name ="btsend"  value="send" >  Se connecter </button>

</form>


<?php 

 
if ($bts == "send") {
        
    echo $aff ;
    
    
  }

?>


</body>
</html>