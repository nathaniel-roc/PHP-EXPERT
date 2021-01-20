<?php

$medewerkers = [
      'voornaam' => [ 'Willem', 'Donald', 'Homer', 'Johan', 'Badr' ],
      'achternaam' => ['van Oranje', 'Trump', 'Simpson', 'Cruyff', 'Hari'],
      'functie'  => ['koning', 'president', 'fabrieksarbeider', 'voetbalicoon', 'Kickboxer']
];

$n = 0;
while($n < 5){
    echo $medewerkers['voornaam'][$n] . " " . $medewerkers['achternaam'][$n] . " is een " . $medewerkers['functie'][$n] . ".<br>";
$n++;
}
  
?>