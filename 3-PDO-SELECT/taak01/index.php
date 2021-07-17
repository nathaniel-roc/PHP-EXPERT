<?php

$database_lokatie     = 'localhost';
$database_naam        = 'toolsforever';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$conn = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

$sql = "SELECT * FROM users";
$statement = $conn->prepare($sql); 
$statement->execute();
$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($database_gegevens as $gebruiker){  
    echo $gebruiker['id'] . " " . $gebruiker['firstname'] . " " . $gebruiker['lastname']  . " " . $gebruiker['email'] . " " . $gebruiker['password'] . "<br>";
}

?>