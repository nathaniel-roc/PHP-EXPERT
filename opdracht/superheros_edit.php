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

$id = $_GET['id'] ?? "";

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
        <form action="superheros_edit.php" method="get">
            <p>type none om niks te veranderen</p>
            <p>ID: Kan niet worden veranderd</p>
            <p>Title: <input type="text" name="Title"></p>
            <p>Alignment: <input type="text" name="Alignment"></p>
            <p>Gender: <input type="text" name="Gender"></p>
            <p>Height: <input type="text" name="Height"></p>
            <p>Weight: <input type="text" name="Identity"></p>
            <p>MaritalStatus: <input type="text" name="MaritalStatus"></p>
            <p>Eyes: <input type="text" name="Eyes"></p>
            <p>Hair: <input type="text" name="Hair"></p>
            <p>PlaceOfBirth: <input type="text" name="PlaceOfBirth"></p>
            <p>PlaceOfDeath: <input type="text" name="PlaceOfDeath"></p>
            <p>Citizenship: <input type="text" name="Citizenship"></p>
            <p>Occupation: <input type="text" name="Occupation"></p>
            <button class="verstuur" type="submit" name="submit">verstuur</button>
        </forum>
    </head>
</html>
<?php
$title = $_GET['Title'] ?? null;
$alignment = $_GET['Alignment'] ?? null;
$gender = $_GET['Gender'] ?? null;
$height = $_GET['Height'] ?? null;
$identity = $_GET['Identity'] ?? null;
$maritalStatus = $_GET['MaritalStatus'] ?? null;
$eyes = $_GET['Eyes'] ?? null;
$hair = $_GET['Hair'] ?? null;
$placeOfBirth = $_GET['PlaceOfBirth'] ?? null;
$placeOfDeath = $_GET['PlaceOfDeath'] ?? null;
$citizenship = $_GET['Citizenship'] ?? null;
$occupation = $_GET['Occupation'] ?? null;

if($title != null){
    $title_sql = "firstname = " . $title
}

if($alignment != null){
    $alignment_sql = "firstname = " . $alignment
}

if($gender != null){
    $gender_sql = "firstname = " . $gender
}

if($title != null){
    $title_sql = "firstname = " . $title
}

if($title != null){
    $title_sql = "firstname = " . $title
}

if($title != null){
    $title_sql = "firstname = " . $title
}

if($title != null){
    $title_sql = "firstname = " . $title
}

if($title != null){
    $title_sql = "firstname = " . $title
}

if($title != null){
    $title_sql = "firstname = " . $title
}

if($title != null){
    $title_sql = "firstname = " . $title
}

if($title != null){
    $title_sql = "firstname = " . $title
}

if($title != null){
    $title_sql = "firstname = " . $title
}

$sql = "UPDATE users SET firstname = :ph_firstname WHERE id = :id";
$stmt = $db_conn->prepare($sql);

$stmt->bindParam(":firstname", $form_firstname );

$stmt->bindParam(":id", $id );
$stmt->execute();

?>