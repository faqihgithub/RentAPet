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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/png" href="http://cdn.mysitemyway.com/etc-mysitemyway/icons/legacy-previews/icons/black-paint-splatter-icons-alphanumeric/069096-black-paint-splatter-icon-alphanumeric-letter-rr.png">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <title> Sign-In </title>
</head>
<body>
<div id="nav">
    <div id="rentapet">
        <p>Rent-A-Pet - Sign In </p>
    </div>
    <table id="nava">

        <tr>
            <div id="home"><td><a href="index.php">Home</a></td></div>
            <div id="bag"><td><a href="payment.php"><img src="Pictures/bagz.png" ></a></td></div>
            <div id="SignIn"><td><a href="signin.php">Sign In</a></td></div>
        </tr>
    </table>
</div>
<center>
    <div id="filler7"></div>
    <form>
        <h2>Sign - In</h2>
        <label>Username :</label>
        <input type="text" name="ddusername" id="name"> <br><br>
        <label> Password :</label>
        <input type="text" name="ddpassword" id="passsword"> <br><br>
        <input type="button" name="signin" id="signin" value="Sign-In">
    </form>
    <div id="buttonsu">
        <a href="signup.php">
            <button>Sign Up</button>
        </a>
    </div>
</center>
<div id="filler2"></div>
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
</div></body>
</html>