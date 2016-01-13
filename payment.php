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
    <title> Guest Checkout </title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
<div id="nav">
    <div id="rentapet">
        <p>Rent-A-Pet - Payment</p>
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
    <form>
        <h2 id="guestPay"> Guest Checkout </h2>
        <label> Country or Region : </label>
        <select name="ccountry">
            <option> - Country or Region - </option>
            <option> United States </option>
        </select> <br><br>
        <label> First Name : </label>
        <input type="text" name="nname" id="name">
        <label> Last Name : </label>
        <input type="text" name="llast" id="lastname"> <br><br>
        <label> Street Address : </label>
        <input type="text" name="address" id="address"> <br><br>
        <label> City : </label>
        <input type="text" name="city" id="city">
        <label> State : </label>
        <input type="text" name="state" id="state"> <br><br>
        <label> ZIP Code : </label>
        <input type="text" name="zipcode" id="zipcode"> <br><br>
        <label> Phone Number : </label>
        <input type="text" name="phonenumber" id="phonenumber"> <br><br>
        <label> Email Address : </label>
        <input type="text" name="email" id="email"> <br><br>
        <label> Re-enter Your Email : </label>
        <input type="text" name="reenter" id="reenter"> <br><br>
        <input type="button" name="submit" id="submit" value="Submit">
    </form>
    </div>
</center>

<div id="filler3"></div>

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
                    <th class="footer1"><a href="signin.html">Sign In</a></th>

                </tr>
            </table>
        </div>
</div>
</body>
</html>