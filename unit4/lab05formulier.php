<!DOCTYPE html>
<html lang="nl">
<head>
    <title>formulier</title>
</head>
<body>
<h1>Inschrijfformulier:</h1>
<FORM METHOD="POST" ACTION="action_page.php" method="get">
    <TABLE BORDER="1">
        <TR>
            <TD>Achternaam:</TD>
            <TD>
                <INPUT TYPE="TEXT" NAME="Achternaam" SIZE="20">
            </TD>
        </TR>
        <TD>Voornaam:</TD>
        <TD>
            <INPUT TYPE="TEXT" NAME="Voornaam" SIZE="20">
        </TD>
        </TR>
        <TD>Adres:</TD>
        <TD>
            <INPUT TYPE="TEXT" NAME="Adres" SIZE="20">
        </TD>
        </TR>
        <TD>Postcode:</TD>
        <TD>
            <INPUT TYPE="TEXT" NAME="Postcode" SIZE="20">
        </TD>
        </TR>
        <TD>Plaats:</TD>
        <TD>
            <select name="plaats">
                <option value="Delft">Delft</option>
                <option value="Den Haag">Den Haag</option>
                <option value="Zoetermeer">Zoetermeer</option>
                <option value="Rotterdam">Rotterdam</option>
            </select>
        </TD>
        </TR>
        <TR>
            <TD>E-mail</TD>
            <TD><INPUT TYPE="email" NAME="email" SIZE="20"></TD>
        </TR>
    </TABLE>
    <br>
    Kies een opleiding:<br>

        <input type="radio" name="gender" value="ICT"> ICT<br>
        <input type="radio" name="gender" value="Engels"> Engels<br>
        <input type="radio" name="gender" value="Techniek"> Techniek<br>
        <input type="radio" name="gender" value="Nederlands"> Nederlands<br><br>

    <button type="submit" value="Submit">Versturen</button>
    <button type="reset" value="Reset">Reset</button>
</FORM>



</body>
</html>