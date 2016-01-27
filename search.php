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
}
catch(PDOException $e)
{
}
$stmt = $dbh->prepare("SELECT * FROM animals a WHERE a.type = :animal");
$stmt->execute(array(':animal'=>$_GET['animal']));
$results = $stmt->fetchAll();

?>

<h1><?php echo $_GET['animal'];?></h1>

    <table>
        <thead>
        <tr>
            <th>Name</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if(count($results) > 0) {
            foreach($results as $animal){

                $animalname = $animal['name'];

                echo '<tr>';
                echo "<td><a href='animalProfile.php?id=" . $animal['id'] . "'>{$animalname}</a></td>";
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

