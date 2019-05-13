<!DOCTYPE html>
<html lang="nl">
<head>
    <title>datatypes</title>
</head>
<body>
<?php
$naam = "Carl";
$adres = "Kruislaan 111";
$woonplaats = "Utrecht";
$naw = $naam . " " . $adres . " " . $woonplaats;
echo "Gegevens: $naw";
echo <<<TEKST
<br>Salarisspecificatie van $naam: 2000 euro
<br>Maand: November
<br>Jaar: 2020
TEKST;
$dollars = 999.99;
$koers = 1.2;
$euros = round($dollars * $koers,2);
echo "<br>","Bedrag in euro's is: ".$euros;
?>
</body>
</html>