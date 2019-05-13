<h3>Mohamed Elouafi</h3>

<form method="post">

Bedrag : <input type="text" name="bedrag"><br>

<input type="radio" name="btw" value="0">inclusief<br>

<input type="radio" name="btw" value="1" checked>exclusief<br>

<input type="submit" name="submit" value="Bereken BTW">

</form>

<hr>

<?php
 
if(isset($_POST['submit'])){
    $bedrag = $_POST['bedrag'];
    if($_POST['btw'] == 0){
        $btw = $bedrag * 0.21;
        echo "BTW: " . $btw; 
        echo " Bedrag: " .  $bedrag;


    }elseif($_POST['btw'] == 1){
        $btw = $bedrag * 0.21;
        $bedrag = $bedrag * 1.21;
        echo "BTW: " . $btw;
        echo " Bedrag: " .  $bedrag;
    }
}


?>