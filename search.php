<?php

/*** mysql hostname ***/
$hostname = '127.0.0.1';

/*** mysql username ***/
$username = 'root';

/*** mysql password ***/
$password = 'root';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=rentapet", $username, $password);
    /*** echo a message saying we have connected ***/
    echo 'Connected to database';
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
$stmt = $dbh->prepare("SELECT * FROM animals WHERE 'type'=:animal");
$result = $stmt->execute(array('animal'=>$_GET['animal']));


?>

<h2>Searching for <?php echo $_GET['animal'];?></h2>

    <table>
        <thead>
        <tr>
            <th>Name</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if($result->num_rows > 0) {
            WHILE($animals = $result->fetch_assoc()){
                $animalname = $animals['name'];

                echo '<tr>';
                echo '<td><?php echo $animalname?></td>';
                echo '</tr>';
            }
        }
        else{
            echo '<tr>';
            echo '<td>0 Results Found.</td>';
            echo '</tr>';
        }
        ?>
        </tbody>
    </table>
    <?php

?>

