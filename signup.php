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
            <div id="home"><td><a href="index.html">Home</a></td></div>
            <div id="bag"><td><a href="payment.html"><img src="Pictures/bagz.png" ></a></td></div>
            <div id="SignIn"><td><a href="signin.html">Sign In</a></td></div>
        </tr>
    </table>
</div>
<div id="form" style="background-color: #03b5aa ">
    <center>
        <form>
            <h2>Register for Rent-A-Pet</h2>
            <label>Name :</label>
            <input type="text" name="dname" id="name"> <br><br>
            <label>Email :</label>
            <input type="text" name="demail" id="email"> <br><br>
            <label> Username : </label>
            <input type="text" name="dusername" id="username"> <br><br>
            <label>Password :</label>
            <input type="password" name="password" id="password"><br><br>
            <label>Confirm Password :</label>
            <input type="password" name="cpassword" id="cpassword"> <br><br>
            <label> Date of Birth : </label>
            <select name="dobmonth">
                <option> - Month - </option>
                <option> January </option>
                <option> February </option>
                <option> March </option>
                <option> April </option>
                <option> May </option>
                <option> June </option>
                <option> July </option>
                <option> August </option>
                <option> September </option>
                <option> October </option>
                <option> November </option>
                <option> December </option>
            </select>
            <select name="dobday">
                <option> - Day - </option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>
            <select name="dobyear">
                <option> - Year - </option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                <option value="1979">1979</option>
                <option value="1978">1978</option>
                <option value="1977">1977</option>
                <option value="1976">1976</option>
                <option value="1975">1975</option>
                <option value="1974">1974</option>
                <option value="1973">1973</option>
                <option value="1972">1972</option>
                <option value="1971">1971</option>
                <option value="1970">1970</option>
                <option value="1969">1969</option>
                <option value="1968">1968</option>
                <option value="1967">1967</option>
                <option value="1966">1966</option>
                <option value="1965">1965</option>
                <option value="1964">1964</option>
                <option value="1963">1963</option>
                <option value="1962">1962</option>
                <option value="1961">1961</option>
                <option value="1960">1960</option>
                <option value="1959">1959</option>
                <option value="1958">1958</option>
                <option value="1957">1957</option>
                <option value="1956">1956</option>
                <option value="1955">1955</option>
                <option value="1954">1954</option>
                <option value="1953">1953</option>
                <option value="1952">1952</option>
                <option value="1951">1951</option>
                <option value="1950">1950</option>
                <option value="1949">1949</option>
                <option value="1948">1948</option>
                <option value="1947">1947</option>
            </select> <br> <br>
            <label> Street Address : </label>
            <input type="text" name="daddress" id="address"><br><br>
            <label> City : </label>
            <input type="text" name="dcity" id="city">
            <label> State : </label>
            <input type="text" name="dstate" id="state">
            <label> Zip Code : </label>
            <input type="text" name="dzipcode" id="zipcode"> <br><br>
            <label> Gender : </label>
            <input type="radio" name="sex" value="male"> Male
            <input type="radio" name="sex" value="female"> Female
            <input type="radio" name="sex" value="other"> Other
            <br><br>
            <input type="button" name="register" id="register" value="Register">

        </form>
    </center>
</div>
<div id="filler1"></div>
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
</body>

</html>

