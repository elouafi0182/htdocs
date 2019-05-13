<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Mijn PHP-script</title>
</head>
<body>
<h3>Variabelen</h3>
<?php
$breedte = 10;
$lengte = 11;
$hoogte = 5;
$oppervlakte = $lengte * $breedte;
$volume = $oppervlakte * $hoogte;
echo("Oppervlakte is: " . $oppervlakte . "<br/>");
echo("Volume is: " . $volume . "<br/>");
echo("Half volume is: " . $volume / 2 . "<br/>");

?>


</body>
</html>