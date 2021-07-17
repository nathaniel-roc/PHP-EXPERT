
<?php
include 'database.php';

$sql = "SELECT Title, Alignment, ID FROM superheroes";
$statement = $conn->prepare($sql); 
$statement->execute();
$dataInfo = $statement->fetchAll(PDO::FETCH_ASSOC);

?>
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
                <?php foreach($dataInfo as $numeriek => $info):?>
                    <tr>
                        <td>
                            <?php echo $numeriek +1 ?>
                        </td>
                        <td>
                            <?php echo $info['Title']?>
                        </td>
                        <td>
                            <?php echo $info['Alignment']?>
                        </td>
                        <td>
                            <a href="show.php?id=<?php echo $info['ID']?>"><?php echo $info['ID']?></a>
                        </td>
                    </tr>

                <?php 
                  $numeriek++;
                endforeach; ?>

            </tbody>
        </table>
    </head>
</html> 