<html>
    <head>
        <link href="style.css" type="stylesheet">
        <title>deltete</title>
    </head>
    <body>
<?php
include "database.php";

$sql = "DELETE FROM superheroes WHERE ID = :id";
$statement = $conn->prepare($sql);
$statement->bindParam(':id', $_GET['id']);
$statement->execute();
?>
        <p>Het verwijderen van ID <?php echo $_GET['id']; ?>gelukt je word over 5 seconden teruggestuurd</p>
        <script>
            function index() {
                window.location.replace("index.php");
            }
            setTimeout("index()", 5000);
        </script>
    </body>
</html>