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
?>
</body>
</html>