<html>
    <head>
        <?php
        $color = "red";
        if($color == "blue"){
            echo "<style>
            background-color: blue;
            </style>";
        } elseif($color == "green"){
            echo "<style>
            background-color: green;
            </style>";
        }  elseif($color == "red"){
            echo "<style>background-color: red;</style>";
        } 
        ?>
    </head>
    <body>
<?php

$o = null;

function papagaai(){
    $o = null;
    if($o == null){
        var_dump($o);
        echo "<br>";
        echo "o = null <br>";
    }
}

class product{
    public $merk;
    public $prijs;
    public $type;
    public $kleur;
}

$dweil = new product();

$stofzuiger = new product();

//SELECT color FROM users WHERE ID = $user;
//color= red


$dweil ->merk = "hema";
$dweil ->prijs = papagaai();
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
</body>
</html>