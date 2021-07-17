<html>
    <head>
        <title>edit</title>
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

$id = $_GET['id'] ?? $_POST['id'];

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
        <form action='edit.php' method='post'>
            <p>ID: Kan niet worden veranderd</p>
            <p>Title: <input type='text' name='Title'></p>
            <p>Alignment: <input type='text' name='Alignment'></p>
            <p>Gender: <input type='text' name='Gender'></p>
            <p>Height: <input type='text' name='Height'></p>
            <p>Weight: <input type='text' name='Weight'></p>
            <p>Identity: <input type='text' name='Identity'></p>
            <p>MaritalStatus: <input type='text' name='MaritalStatus'></p>
            <p>Eyes: <input type='text' name='Eyes'></p>
            <p>Hair: <input type='text' name='Hair'></p>
            <p>PlaceOfBirth: <input type='text' name='PlaceOfBirth'></p>
            <p>PlaceOfDeath: <input type='text' name='PlaceOfDeath'></p>
            <p>Citizenship: <input type='text' name='Citizenship'></p>
            <p>Occupation: <input type='text' name='Occupation'></p>
            <input type='hidden' name='id' value='<?php echo $id; ?>'>
            <button class='verstuur' type='submit' name='submit'>verstuur</button>
<?php
    if($_POST['Title'] ?? null != null){
            $sql = "UPDATE superheroes SET Title= :Title where ID=:id";
            $statement = $conn->prepare($sql); 
            $statement->bindParam(':Title', $_POST['Title']);
            $statement->bindParam(':id', $_POST['id']);
    }if($_POST['Alignment'] ?? null != null){
            $sql = "UPDATE superheroes SET Alignment= :Alignment where ID=:id";
            $statement = $conn->prepare($sql); 
            $statement->bindParam(':Alignment', $_POST['Alignment']);
            $statement->bindParam(':id', $_POST['id']);
    }if($_POST['Gender'] ?? null != null){
            $sql = "UPDATE superheroes SET Gender= :Gender where ID=:id";
            $statement = $conn->prepare($sql); 
            $statement->bindParam(':Gender', $_POST['Gender']);
            $statement->bindParam(':id', $_POST['id']);
    }if($_POST['Height'] ?? null != null){
            $sql = "UPDATE superheroes SET Height= :Height where ID=:id";
            $statement = $conn->prepare($sql); 
            $statement->bindParam(':Height', $_POST['Height']);
            $statement->bindParam(':id', $_POST['id']);
    }if($_POST['Weight'] ?? null != null){
            $sql = "UPDATE superheroes SET Weight= :Weight where ID=:id";
            $statement = $conn->prepare($sql); 
            $statement->bindParam(':Weight', $_POST['Weight']);
            $statement->bindParam(':id', $_POST['id']);
    }if($_POST['Identity'] ?? null != null){
            $sql = "UPDATE superheroes SET Identity= :Identity where ID=:id";
            $statement = $conn->prepare($sql); 
            $statement->bindParam(':Identity', $_POST['Identity']);
            $statement->bindParam(':id', $_POST['id']);
    }if($_POST['MaritalStatus'] ?? null != null){
            $sql = "UPDATE superheroes SET MaritalStatus= :MaritalStatus where ID=:id";
            $statement = $conn->prepare($sql); 
            $statement->bindParam(':MaritalStatus', $_POST['MaritalStatus']);
            $statement->bindParam(':id', $_POST['id']);
    }if($_POST['Eyes'] ?? null != null){
            $sql = "UPDATE superheroes SET Eyes= :Eyes where ID=:id";
            $statement = $conn->prepare($sql); 
            $statement->bindParam(':Eyes', $_POST['Eyes']);
            $statement->bindParam(':id', $_POST['id']);
    }if($_POST['Hair'] ?? null != null){
            $sql = "UPDATE superheroes SET Hair= :Hair where ID=:id";
            $statement = $conn->prepare($sql); 
            $statement->bindParam(':Hair', $_POST['Hair']);
            $statement->bindParam(':id', $_POST['id']);
    }if($_POST['PlaceOfBirth'] ?? null != null){
            $sql = "UPDATE superheroes SET PlaceOfBirth= :PlaceOfBirth where ID=:id";
            $statement = $conn->prepare($sql); 
            $statement->bindParam(':PlaceOfBirth', $_POST['PlaceOfBirth']);
            $statement->bindParam(':id', $_POST['id']);
    }if($_POST['PlaceOfDeath'] ?? null != null){
            $sql = "UPDATE superheroes SET PlaceOfDeath= :PlaceOfDeath where ID=:id";
            $statement = $conn->prepare($sql); 
            $statement->bindParam(':PlaceOfDeath', $_POST['PlaceOfDeath']);
            $statement->bindParam(':id', $_POST['id']);
    }if($_POST['Citizenship'] ?? null != null){
            $sql = "UPDATE superheroes SET Citizenship= :Citizenship where ID=:id";
            $statement = $conn->prepare($sql); 
            $statement->bindParam(':Citizenship', $_POST['Citizenship']);
            $statement->bindParam(':id', $_POST['id']);
    }if($_POST['Occupation'] ?? null != null){
            $sql = "UPDATE superheroes SET Occupation= :Occupation where ID=:id";
            $statement = $conn->prepare($sql); 
            $statement->bindParam(':Occupation', $_POST['Occupation']);
            $statement->bindParam(':id', $_POST['id']);
    }
$statement->execute();
?>
        </forum>
    </body>
</html>

