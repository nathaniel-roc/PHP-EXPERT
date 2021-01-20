<html>
    <head>
        <title>registratie</title>
    </head>
    <body>
        <form action="index.php" method="post">
            <p>firstname:</p>
            <input type="text" name="firstname">
            <p>lastname:</p>
            <input type="text" name="lastname">
            <p>email:</p>
            <input type="text" name="email">
            <p>password:</p>
            <input type="text" name="passwd">
            <br>
            <input type="submit">
        </forum>
        <?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$passwd = $_POST['passwd'];

$database_lokatie     = 'localhost';
$database_naam        = 'toolsforever';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';
$conn = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

$sql = "SELECT Max(id) As id FROM users";
$statement = $conn->prepare($sql); 
$statement->execute();
$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);



foreach($database_gegevens as $gebruiker){  
    $id = $gebruiker['id'];
    $id++;
}

if($firstname != null){
    if($lastname != null){
        if($id != null){
            if($passwd != null){
                $sql = "INSERT INTO users (id, firstname, lastname, email, password) VALUES (:id, :firstname , :lastname, :email, :passwd)" ;
                $stmt = $conn->prepare($sql);

                $stmt->bindParam(":id", $id );
                $stmt->bindParam(":firstname", $firstname );
                $stmt->bindParam(":lastname", $lastname );
                $stmt->bindParam(":email", $email );
                $stmt->bindParam(":passwd", $passwd );

                $stmt->execute();

                
            }
        }
    }
}

?>
    </body>
</html>



