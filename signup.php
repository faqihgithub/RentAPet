<?php

/*** mysql hostname ***/
$hostname = '127.0.0.1';

/*** mysql username ***/
$username = 'root';

/*** mysql password ***/
$password = 'root';

try {
    $dbh = new PDO('mysql:host=127.0.0.1;dbname=rentapet', 'root', 'root');

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
if(@$_POST['formSubmit'])
{    $errorMessage = false;

    if(empty($_POST['firstname']))
    {
        $errorMessage = "<li>Enter your first name!</li>";
    }
    if(empty($_POST['username']))
    {
        $errorMessage = "<li>Enter a username!</li>";
    }
    if(empty($_POST['email']))
    {
        $errorMessage = "<li>Enter your email!</li>";
    }

    if(empty($_POST['password']))
    {
        $errorMessage = "<li>Enter your password!</li>";
    }


    $stmt = $dbh->prepare("INSERT INTO signup (id, firstname, username, email, password) VALUES (:id, :firstname, :username, :email, :password)");

    $result = $stmt->execute(
        array(
            'id' => NULL,
            'firstname' => $_POST['firstname'],
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'password' => $_POST['password']
        )
    );

    if(!$result){

    }
    {
        echo("<p>There was an error with your form:</p>\n");
        echo("<ul>" . $errorMessage . "</ul>\n");
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/png" href="http://cdn.mysitemyway.com/etc-mysitemyway/icons/legacy-previews/icons/black-paint-splatter-icons-alphanumeric/069096-black-paint-splatter-icon-alphanumeric-letter-rr.png">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>

<div id="nav">
    <div id="rentapet">
        <p>Rent-A-Pet - Signup</p>
    </div>

    <table id="nava">

        <tr>
            <div id="home"><td><a href="index.php">Home</a></td></div>
            <div id="bag"><td><a href="payment.php"><img src="Pictures/bagz.png" ></a></td></div>
            <div id="SignIn"><td><a href="signin.php">Sign In</a></td></div>
        </tr>
    </table>
</div>
<div id="form" style="background-color: #03b5aa ">
    <div id="filler8"></div>
    <center>
        <form method="post">
            <h2>Register for Rent-A-Pet</h2>
            <label>Name :</label>
            <input type="text" name="firstname" id="name" required> <br><br>
            <label>Email :</label>
            <input type="text" name="email" id="email" required> <br><br>
            <label> Username : </label>
            <input type="text" name="username" id="username" required> <br><br>
            <label>Password :</label>
            <input type="password" name="password" id="password" required><br><br>
            <br>

            <button type="submit" name="formSubmit" value="1">Add New User</button>

        </form>
    </center>
</div>
<div id="filler1"></div>
<div class="footer">
    <table id="footerz">
        <div id="ericfix">
            <table id="footer">
                <tr id="footerTop">
                    <th class="footer1"><a href="about.html">About Rent-A-Pet</a></th>
                    <th class="footer1"><a href="about.html">Email Us</a></th>
                </tr>
                <tr id="footerBottom">
                    <th class="footer1"><a href="aboutUs.html">About Us</a></th>
                    <th class="footer1"><a href="signin.php">Sign In</a></th>

                </tr>
            </table>
        </div>
</body>

</html>
