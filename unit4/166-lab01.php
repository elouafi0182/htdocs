<!DOCTYPE html>
<html lang="nl">
<head>
    <title>PHP lab 01</title>
</head>
<body>
<h3>PHP lab 01</h3>
<style>
    table, th, td {
        border: 1px solid black;
    }
</style>
<?php
$totaal = array("Prijs");
        $laptop = array(
            array("Merk" => "Toshiba Satellite", "Model" => "A100", "Os" => "Windows XP", "Voorraad" => "in vooraad", "Prijs" => 999),
            array("Merk" => "Acer Aspire", "Model" => "5732Z", "Os" => "Linux", "Voorraad" => "uit vooraad", "Prijs" => "---"),
            array("Merk" => "HP", "Model" => "200X", "Os" => "Vista", "Voorraad" => "in vooraad", "Prijs" => 777));
            array("Naw" => $totaal);
    ?>
<table>
    <thead>
    <tr>
        <th><?php echo implode('</th><th>', array_keys(current($laptop))); ?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($laptop as $arrays): array_map('htmlentities', $arrays); ?>
        <tr>
            <td><?php echo implode('</td><td>', $arrays); ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>