<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mijn Muziek</title>
</head>
<body>
<!--shoppingcart begint hier-->
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <form name="order" action="" method="post">
        <tr>
            <td>
                <img src="forsen.png" width="100px" alt="X">
            </td>
        </tr>
        <tr>
            <td>
                Ceseria Evora "Em Um Concerto" Tracks:10 Prijs:9.99
            </td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="albumcode[0]" value="001">
                <input type="hidden" name="artiest[0]" value="Cesaria Evora">
                <input type="hidden" name="titel[0]" value="Em Um Concerto">
                <input type="hidden" name="tracks[0]" value="10">
                <input type="hidden" name="prijs[0]" value="9.99">
                <input type="hidden" name="genre[0]" value="World">

                Aantal: <input type="text" size="2" maxlength="3" name="aantal[0]" value="0" style="background-color: #f8ce6c">
                <hr>
            </td>
        </tr>
        <tr>
            <td>Korting:<br>
                <input type="checkbox" name="student" value="15">Student 15%<br>
                <input type="checkbox" name="senior" value="10">Senior 10%<br>
                <input type="checkbox" name="klant" value="5">Klant 5%<br>
                <br>
            </td>
        </tr>
        <tr>
            <td>Selecteer een betalingwijze:<br>
                <select name="land" value="true">
                    <option value=""></option>
                    <option value="visa">Visa</option>
                    <option value="master">Mastercard</option>
                    <option value="pay">PayPal</option>
                    <option value="ideal">Ideal</option>
                </select>
                <input type="submit" width="300px" name="submit" value="Bestellen">
                <hr>
            </td>
        </tr>
    </form>
</table>
<!--shoppingcart eindigt hier-->

<?php

$kortingtotaal = 0;

if(isset($_POST["submit"]) ){
    $aantal = ($_POST["aantal"][0]);
    if (isset($_POST["student"]) ) {
        $kortingtotaal = 15 + $kortingtotaal;
    };
    if (isset($_POST["senior"]) ) {
        $kortingtotaal = 10 + $kortingtotaal;
    };
    if (isset($_POST["klant"]) ) {
        $kortingtotaal = 5 + $kortingtotaal;
    };

    switch ($_POST['land'])
    {
        case "visa":
            $betaal = "Visa";
            break;
        case "master":
            $betaal = "Mastercard";
            break;
        case "pay":
            $betaal = "PayPal";
            break;
        case "ideal":
            $betaal = "Ideal";
            break;
        default:
            echo "<p>U heeft geen betalingswijze gekozen</p>";
    };


    echo "Aantal is: " . $aantal;
    echo "<br>Korting is: " . $kortingtotaal . " procent";
    echo "<br>Betalingwijze: " . $betaal;
};
?>

</body>
</html>