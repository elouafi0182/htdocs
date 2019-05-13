<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>Mohamed Elouafi</h1>
    <form class="form" action="" method="post">
        <input type="number" name="bedrag"><br>
        <input type="checkbox" name='btw' checked data-toggle="toggle">
        <label>Excl BTW</label><br>
         <input type="submit" value="Berekenen" name="submit"> 
    </form> 
</body>
</html>

<?php

require('percCalc.class.php');

class extBtw extends percCalc
{
    function __construct($bedrag)
    {
        $this->_bedrag = $bedrag;
    }
    public function inclBtw()
    {
        $totaal = $this->excl();
        return array(round($totaal, 2), round($this->_bedrag - $totaal, 2));
    }
    public function exclBtw()
    {
        $totaal = $this->incl();
        return array($totaal, $totaal - $this->_bedrag);
    }
}

    if (isset($_POST["submit"])) {
        $bedrag = $_POST["bedrag"];
        $reken = new extBtw($bedrag);
        if (isset($_POST["btw"])) {
            $btw = true;
        } else {
            $btw = false;
        }
        if ($btw) {
            echo "Totaal bedrag zonder BTW is: €" . $reken->inclBTW()[0] . "<br>BTW bedrag is: €" . $reken->inclBTW()[1];
        } else {
            echo "Totaal bedrag incl BTW is: €" . $reken->exclBTW()[0] . "<br>BTW bedrag is: €" . $reken->exclBTW()[1];
        }

    }