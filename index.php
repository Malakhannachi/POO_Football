<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/style.css" rel="stylesheet" />
</head>
<body>
    



<?php

spl_autoload_register(function($class_name){

    require 'classe/'. $class_name . '.php';

});

$espagne = new Pay ("Esapagne");
$portugal=new Pay("Portugual");
$argentine=new Pay("Argentine");
$angleterre=new Pay("Angleterre");
$france = new Pay ("France");




$ronaldo = new Joueur("cristano" , "Ronaldo" , "05-02-1985",$portugal);
$lionelMessi = new Joueur("Lionel", "Messi", "24-06-1987",$argentine);


$manchesterUnited= new Equipe ("Manchester United",$angleterre);
$psg= new Equipe ("PSG",$france);
$barcelone = new Equipe ("Bercelone", $espagne);


$c1= new Carriere($ronaldo, $manchesterUnited, "01-09-2004");
$c1= new Carriere($ronaldo, $psg, "01-07-2000");
$c2 = new Carriere($lionelMessi, $psg, "01-01-2015");
$c3= new Carriere($lionelMessi, $barcelone, "01-01-2017");


echo "<div class='aff'>";
echo $espagne->getAfficherPay();
echo $france->getAfficherPay();
echo "</div>";

echo "<div class='aff'>". $manchesterUnited-> getAfficherEquipe(). "<br>";
echo $psg-> getAfficherEquipe(). "<br></div>";

echo "<div class='aff'>". $ronaldo->getAfficherJ(). "<br>";
echo $lionelMessi ->getAfficherJ(). "<br></div>";


?>
</body>
</html>
