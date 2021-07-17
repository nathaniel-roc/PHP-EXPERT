<?php

$telefoons = [
    [
      'merk' => 'Apple',
      'TopOfTheLinePhone' => 'Iphone 12 pro max',
      'MaximaalGeheugen'  => '512 gb'
    ],
    [
      'merk' => 'Samsung',
      'TopOfTheLinePhone' => 'Samsung Galaxy S20 Ultra 5G',
      'MaximaalGeheugen'  => '512 gb'
    ]
  ];

    echo "De beste telefoon van " . $telefoons[0]['merk'] .  " is de " . $telefoons[0]['TopOfTheLinePhone'] . " met " . $telefoons[0]['MaximaalGeheugen'] . ". <br>";
    echo "De beste telefoon van " . $telefoons[1]['merk'] .  " is de " . $telefoons[1]['TopOfTheLinePhone'] . " met " . $telefoons[1]['MaximaalGeheugen'] . ".";


?>