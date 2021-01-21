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
        <form action="superheros_edit.php<?php echo "?id=" . $id;?>" method="post">
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
            <input type="hidden" name="ID" value="<?php echo $id; ?>">
            <button class="verstuur" type="submit" name="submit">verstuur</button>
        </forum>
    </head>
</html>
<?php
$title = $_POST['Title'] ?? null;
$alignment = $_POST['Alignment'] ?? null;
$gender = $_POST['Gender'] ?? null;
$height = $_POST['Height'] ?? null;
$identity = $_POST['Identity'] ?? null;
$maritalstatus = $_POST['MaritalStatus'] ?? null;
$eyes = $_POST['Eyes'] ?? null;
$hair = $_POST['Hair'] ?? null;
$placeofbirth = $_POST['PlaceOfBirth'] ?? null;
$placeofdeath = $_POST['PlaceOfDeath'] ?? null;
$citizenship = $_POST['Citizenship'] ?? null;
$occupation = $_GET['Occupation'] ?? null;

if($title != null){
    $title_sql = "Title = " . $title;
    $sql = "UPDATE superheroes SET :Title WHERE ID = :id";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(":Title", $title_sql );

    $stmt->bindParam(":id", $id );

    echo $sql;

    $stmt->execute();
} else{
    echo "<br>title is niet gewijzigd.<br>";
}

if($alignment != null){
    // $alignment_sql = "Alignment = " . $alignment;
    $sql = "UPDATE superheroes SET Alignment = :Alignment WHERE ID = 1036";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':Alignment', $alignment );

    // $stmt->bindParam(":id", $id );
    $stmt->debugDumpParams();
    $stmt->execute();
} else{
    echo "alignment is niet gewijzigd.<br>";
}


if($gender != null){
    $gender_sql = "Gender = " . $gender;
    $sql = "UPDATE superheroes SET :Gender WHERE id = :id";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(":Gender", $gender_sql );

    $stmt->bindParam(":id", $id );
    $stmt->execute();
} else{
    echo "gender is niet gewijzigd.<br>";
}


if($height != null){
    $height_sql = "Height = " . $height;
    $sql = "UPDATE superheroes SET :Height WHERE id = :id";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(":Height", $height_sql );

    $stmt->bindParam(":id", $id );
    $stmt->execute();
} else{
    echo "height is niet gewijzigd.<br>";
}


if($identity != null){
    $identity_sql = "Identity = " . $identity;
    $sql = "UPDATE superheroes SET :Identitysql WHERE id = :id";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(":Identitysql", $identity_sql );

    $stmt->bindParam(":id", $id );
    $stmt->execute();
} else{
    echo "identity is niet gewijzigd.<br>";
}


if($maritalstatus != null){
    $maritalstatus_sql = "MaritalStatus = " . $maritalstatus;
    $sql = "UPDATE superheroes SET :MaritalStatus WHERE id = :id";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(":MaritalStatus", $maritalstatus_sql );

    $stmt->bindParam(":id", $id );
    $stmt->execute();
} else{
    echo "maritalstatus is niet gewijzigd.<br>";
}


if($eyes != null){
    $eyes_sql = "Eyes = " . $eyes;
    $sql = "UPDATE superheroes SET :Eyes WHERE id = :id";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(":Eyes", $eyes_sql );

    $stmt->bindParam(":id", $id );
    $stmt->execute();
} else{
    echo "eyes is niet gewijzigd.<br>";
}


if($hair != null){
    $hair_sql = "Hair = " . $hair;
    $sql = "UPDATE superheroes SET :Hair WHERE id = :id";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(":Hair", $hair_sql );

    $stmt->bindParam(":id", $id );
    $stmt->execute();
} else{
    echo "hair is niet gewijzigd.<br>";
}


if($placeofbirth != null){
    $placeofbirth_sql = "PlaceOfBirth = " . $placeofbirth;
    $sql = "UPDATE superheroes SET :Hair WHERE id = :id";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(":PlaceOfBirth", $placeofbirth_sql );

    $stmt->bindParam(":id", $id );
    $stmt->execute();
} else{
    echo "placeofbirth is niet gewijzigd.<br>";
}


if($placeofdeath != null){
    $placeofdeath_sql = "PlaceOfDeath = " . $placeofdeath;
    $sql = "UPDATE superheroes SET :PlaceOfDeath WHERE id = :id";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(":PlaceOfDeath", $placeofdeath_sql );

    $stmt->bindParam(":id", $id );
    $stmt->execute();
} else{
    echo "placeofdeath is niet gewijzigd.<br>";
}


if($citizenship != null){
    $Citizenship_sql = "Citizenship = " . $citizenship;
    $sql = "UPDATE superheroes SET :Citizenship WHERE id = :id";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(":Citizenship", $Citizenship_sql );

    $stmt->bindParam(":id", $id );
    $stmt->execute();
    
} else{
    echo "citizenship is niet gewijzigd.<br>";
}


if($occupation != null){
    $occupation_sql = "Occupation = " . $occupation;
    $sql = "UPDATE superheroes SET :Occupation WHERE id = :id";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(":Occupation", $occupation_sql );

    $stmt->bindParam(":id", $id );
    $stmt->execute();
} else{
    echo "occupation is niet gewijzigd.<br>";
}




?>