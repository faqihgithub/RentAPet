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
$stmt->execute(array('animal'=>$_GET['animal']));
$animals = $stmt->fetchAll();

?>

<h2>Searching for <?php echo $_GET['animal'];?></h2>

<?php
if($animals && count($animals)){
    ?>
    <table>
        <thead>
        <tr>
            <th>Name</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach($animals as $animal){
            ?>
            <tr>
                <td><?php echo $animal['name']?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
    <?php
}else{
    echo "There are no animals in this system.";
}
?>

