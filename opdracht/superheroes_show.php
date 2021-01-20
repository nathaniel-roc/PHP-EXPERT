<html>
    <head>
        <title>Show</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Alignment</th>
                    <th>Gender</th>
                    <th>Height</th>
                    <th>Weight</th>
                    <th>Identity</th>
                    <th>MaritalStatus</th>
                    <th>Eyes</th>
                    <th>Hair</th>
                    <th>PlaceOfBirth</th>
                    <th>PlaceOfDeath</th>
                    <th>Citizenship</th>
                    <th>Occupation</th>
                </tr>
            </thead>
            <tbody>
<?php
include "database.php";

$id = $_GET['id'];

$sql = "SELECT * FROM superheroes WHERE ID = :id";
$statement = $conn->prepare($sql); 

$statement->bindParam(":id", $id);

$statement->execute();
$DataInfo = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($DataInfo as $info){  
    echo "<tr><td>" . $info['ID'] . "</td><td>" . $info['Title'] . "</td><td>" . $info['Alignment'] . "</td><td>" . $info['Gender'] . "</td><td>" . $info['Height'] . "</td><td>" . $info['Weight'] . "</td><td>" . $info['Identity'] . "</td><td>" . $info['MaritalStatus'] . "</td><td>" . $info['Eyes'] . "</td><td>" . $info['Hair'] . "</td><td>" . $info['PlaceOfBirth'] . "</td><td>" . $info['PlaceOfDeath'] . "</td><td>" . $info['Citizenship'] . "</td><td>" . $info['Occupation']. "</td></tr>";
}
?>
                </tr>
            </tbody>
        </table>
        <button id='wijzigen'>wijzigen</button>
        <script type="text/javascript">
                    document.getElementById('wijzigen').onclick = function () {
                    location.href = 'superheros_edit.php?id=<?php
                    echo $id;?>';
                };
        </script>
    </head>
</html>