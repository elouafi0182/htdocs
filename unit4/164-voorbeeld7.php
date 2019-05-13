<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Mijn PHP-script</title>
</head>
<body>
<h3>Variabelen</h3>
<?php
$naam = "Carl ";
$adres = "Kruislaan 111 ";
$woonplaats = "Utrecht";
$naw = $naam . $adres  . $woonplaats;
//resultaat "Carl Kruislaan 111 Utrecht"
echo("Gegevens: $naw <br />");
echo <<<EIND
Salaris specificatie <br />maand: november jaar 2010
Plaats: $woonplaats <br />
Algemene gegevens:
EIND;
$werkdagen = 5;
echo("<br />werkdagen: " .$werkdagen);
//resultaat werkdagen:5
$uurtarief= 13.432;
echo("<br />uurtarief is: " .$uurtarief);
//resultaat uurtarief is:13.432
printf("<br />uurtarief is: %.2f " , $uurtarief);
//resultaat uurtarief is: 13.43
?>
</body>
</html>