<!DOCTYPE html>
<html lang="nl">
<head>
    <title>lab 04</title>
</head>
<body>
<?php
$boeken = array (
    array("titel"=> "Stoner", "auteur" => "John Williams",
        "genre" => "fictie", "prijs" => 19.99 ),
    array("titel"=> "De cirkel", "auteur" => "Dave Eggers",
        "genre" => "fictie", "prijs" => 22.50 ),
    array("titel"=> "Rayuela", "auteur" => "Julio Cortazar ",
        "genre" => "fictie", "prijs" => 25.50 ),
);
function callBack($item, $key){

    if ($key === "prijs"){

        echo ("<br>$key" . ":" . "<i> $item </i>");
    }
}
    echo "<br>----Lab 04: Prijslijst:<br>";
array_walk_recursive($boeken, 'callBack');



?>
</body>
</html>