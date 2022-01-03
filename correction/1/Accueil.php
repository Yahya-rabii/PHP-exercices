<?php 

$img = "inno-logo.jpg";
$Accueil = "Accueil";
$Menu = "Menu";

$tab =[ 'Accueil' => 'Accueil.php'
       ,'A propos' => 'propos.php'
       ,'Nos produits' => 'produits.php'
       ,'Contact' => 'Contact.php'];


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

<img src="<?php echo $img ?>" width="300" height="250">


<h1>

<?php echo $Accueil.'<br>';?>

</h1>

<h2>
<?php echo $Menu;?>
</h2>

<ul>


<?php 

foreach($tab as $cle => $val ){


    echo <<<code
    <li><a href="$val">$cle</a></li>
code;   
}

?>


</ul>



</body>
</html>