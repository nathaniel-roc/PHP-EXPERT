<html>
    <head>
        <title>Database</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>numeriek</th>
                    <th>Title</th>
                    <th>Alignment</th>
                    <th>ID</th>
                </tr>
            </thead>
            <tbody>
<?php
include 'database.php';

$sql = "SELECT Title, Alignment, ID FROM superheroes";
$statement = $conn->prepare($sql); 
$statement->execute();
$DataInfo = $statement->fetchAll(PDO::FETCH_ASSOC);

$numeriek = 1;

foreach($DataInfo as $info){  
    echo "<tr><td>" . $numeriek . "</td><td>" . $info['Title'] . "</td><td>" . $info['Alignment'] . "</td><td><a href=superheroes_show.php?id=" . $info['ID'] . ">" . $info['ID'] . "</a></td></tr>";
    $numeriek++;
}

?>
                </tr>
            </tbody>
        </table>
    </head>
</html>