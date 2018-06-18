<?php

//pak stringvariabelen uit html en zet deze in PHP stringvariabelen
  $naama=$_REQUEST["naam"];
  $blogtitela=$_REQUEST["blogtitel"];
  $blogteksta=$_REQUEST["blogtekst"];
//maak een tijd-variabele met opmaak
  $tijda=time();
  $tijdb=(date("D-d-M-Y-H:i",$tijda));

    //bufferbestand om mee te schuiven aanmaken -om laatste post bovenaan te krijgen-
    //$leesin = fopen("Blogfileb.txt", "r") or die("Unable to open file!");
    //fread($schrijfweg,(filesize($my_file));
    //fclose($schrijfweg);
    //(filesize($my_file)

//maak en/of open het blogteksbestand op schijf
    $schrijfweg = fopen("Blogfileb.txt", "a") or die("Unable to open file!");
//schrijffunctie met opmaak en gegenereerde tijd
    fwrite($schrijfweg,
    "Datum:" . " " . $tijdb . "\n" . "<br>"
                          . "Auteur:" . " " . $naama . "\n" . "<br>"
                          . "Onderwerp:" . " " . $blogtitela . "\n". "<br>"
                          . $blogteksta . "\n" . "<br>");
    fclose($schrijfweg);
//zet de inhoud van het hele blogfile op scherm
  $naarhtmla=(file_get_contents("Blogfileb.txt"));
  echo $naarhtmla;

?>
//html code om terug te keren naar index_form.html
<!DOCTYPE html>
<html>
  <body>
    <p>Blog post is gelukt!</p>
    <a href="index_form.html">Terug naar formulier</a>
  </body>
</html>
