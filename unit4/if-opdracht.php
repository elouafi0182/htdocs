<!DOCTYPE html>
<html lang="nl">
<head>
    <title>if-opdracht</title>
</head>
<body>
<?php
$gewerkteuren = 39;
$uurtarief = 15.00;
$bonus = 100.00;
$bruto = $gewerkteuren * $uurtarief;
if($gewerkteuren <=40) {
    echo "Uw basissalaris is: €".$bruto;
    echo "<br>Uw belasting is: €". 0.40*$bruto;
}
elseif ($gewerkteuren >=50){
echo "Uw basissalaris met bonus is: €". ($bruto + $bonus);
echo "<br>Uw belasting is: €".( 0.51*$bruto);
}
if ($gewerkteuren < 40) {
    echo "<br>Belasting is: " . $gewerkteuren . "%";
}
?>
</body>
</html>