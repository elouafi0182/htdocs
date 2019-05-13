<!DOCTYPE html>
<html lang="nl">
<head>
    <title>lab 03</title>
</head>
<body>
<?php

function printArray ($item, $key)
{
    echo "<br>$key" . ":" . "<i> $item </i>";
}
$playlist = array (
    array("genre" => "hiphop","auteur" => "John Williams", "titel" => "My Girl"),
    array("genre" => "Jazz","auteur" => "John Coltrane", "titel" => "New York"),
    array("genre" => "hiphop","auteur" => "Shakira", "titel" => "Obsession")
);
echo "Lab 03";
echo"<br>----Stap 1: mijn playlist";
array_walk_recursive($playlist, "printArray");

array_push($playlist, array("genre" => "Latin", "auteur" => "Caetano Veloso", "titel" => "Cafe Atlantico"));
echo "<br><br>----Stap 2: Track toevoegen:";
array_walk_recursive($playlist, "printArray");

function printTracks ($item, $key) {
    $track = implode("|",$item);
    echo "<br>Track $key: $track";
}
echo "<br><br>---- Stap 3: Track doorlopen:";
array_walk($playlist, 'printTracks');


?>
</body>
</html>