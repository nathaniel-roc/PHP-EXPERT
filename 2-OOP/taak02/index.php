<?php

class auto{
    public $merk;
    public $kleur;
    public $type;
    public $uitvoering;
    public $brandstof;
}


    $auto = new auto();

    $auto ->merk = 'Tesla';
    $auto ->kleur = 'rood';
    $auto ->type = 'model 3';
    $auto ->uitvoering = 'cabrio';
    $auto ->brandstof = 'electrisch';

    var_dump($auto);
?>