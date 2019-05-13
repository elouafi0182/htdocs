<?php
   if(isset($_POST['submit']))
   {
      echo("First name: " . $_POST['firstname'] . "<br />\n");
      echo("Last name: " . $_POST['lastname'] . "<br />\n");
       echo("E-mail: " . $_POST['E-mail'] . "<br />\n");
       echo("Filiaal: " . $_POST['stad'] . "<br />\n");
       echo("Subject: " . $_POST['subject'] . "<br />\n");
   }
?>
<style>
    *{
        color: black;
        font-size:150%;
        font-family: cursive;
        background-image: url("pizza_pastry_tasty_cheese_basil_71458_3840x2400.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
