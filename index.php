<!-- OPEN IN FIREFOX IF THE VIDEO DOES NOT LOAD RIGHT AWAY --- DO NOT OPEN IN SAFARI @ ALL --- IF YOU OPEN IN CHROME IT MIGHT TAKE SOME TIME FOR THE VIDEO TO LOAD -->
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

$sql = "select * from animals";

foreach($dbh->query($sql) as $row){
    echo $row['name'];
}

?>

<!DOCTYPE html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/png" href="http://cdn.mysitemyway.com/etc-mysitemyway/icons/legacy-previews/icons/black-paint-splatter-icons-alphanumeric/069096-black-paint-splatter-icon-alphanumeric-letter-rr.png">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <script src="jquery.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <title>RentAPet</title>
</head>
<body>
<div id="video">
    <video autoplay='' id='header-video' preload='auto' width='100%' controls loop>
        <source src='videoplayback.mp4' type='video/mp4'/>
    </video>
</div>

<div id="nav">
    <div id="rentapet">
        <p>Rent-A-Pet</p>
    </div>
    <table id="nava">

        <tr>
            <div id="home"><td><a href="index.html">Home</a></td></div>
            <div id="bag"><td><a href="payment.html"><img src="Pictures/bagz.png" ></a></td></div>
            <div id="SignIn"><td><a href="signin.html">Sign In</a></td></div>
        </tr>
    </table>
</div>
<div id="block"></div>
<div id="container">
    <div id="Monkeybutt">
        <table id="panels">
            <tr>
                <th id="cat0" colspan="5">Categories</th>
            </tr>
            <tr>
                <td class="cats" id="cat1" >Dogs</td>
                <td class="cats" id="cat2" ><a href="search.php?animal=cat">Cats</a></td>
                <td class="cats" id="cat3" >Reptiles</td>
                <td class="cats" id="cat4" >Aquatic</td>
                <td class="cats" id="cat5" >Exotic</td>
            </tr>
            <tr>
                <td class="cats" id="cat6" >Birds</td>
                <td class="cats" id="cat7" >Small</td>
                <td class="cats" id="cat8" >Large</td>
                <td class="cats" id="cat9" ><a href="search.php?animal=rodent">Rodent</a></td>
                <td class="cats" id="cat10">Farm</td>
            </tr>
        </table>
    </div>

    <div>
        <table id="infopanels">
            <tr>
                <td><img id="img10" src="http://www.fullwallpapers.in/wp-content/uploads/2014/12/Cute-baby-animals-wallpaper-2-300x300.jpg"></td>
                <td><img id="img11" src="http://pulpypics.com/wp-content/uploads/2014/08/animal_101.jpg"></td>
                <td><img id="img12" src="http://worldinsidepictures.com/wp-content/uploads/2014/03/2114.jpg"></td>
            </tr>
        </table>
    </div>
    <div class="footer">
        <table id="footerz">
            <div id="ericfix">
                <table id="footer">
                    <tr>
                        <th><a href="about.html">About Rent-A-Pet</a></th>
                        <th>For Businesses</th>
                        <th>Support</th>
                    </tr>
                    <tr>
                        <td>About Us</td>
                        <td><a href="signin.html">Sign In</a></td>
                        <td>Email Us</td>
                    </tr>
                </table>
            </div>
</div>
</body>
</html>