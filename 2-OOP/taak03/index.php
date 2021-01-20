<?php

class product{
    public $merk;
    public $prijs;
    public $type;
    public $kleur;
}

$dweil = new product();

$stofzuiger = new product();

$dweil ->merk = "hema";
$dweil ->prijs = 10;
$dweil ->type = "lang";
$dweil ->kleur = "rood";


$stofzuiger ->merk = "aegon";
$stofzuiger ->prijs = 50;
$stofzuiger ->type = "gfs505";
$stofzuiger ->kleur = "grijs";

var_dump($dweil);
echo "<br><br>";
var_dump($stofzuiger);

?>