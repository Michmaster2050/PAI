<?php
//Utworzenie nowego pliku i zapis tekstu do niego

$myFile = fopen("newfile.txt", "W")
    or die ("Unable to open file");
$tekst = "John już tu nie mieszka";
fwrite($myFile, $tekst);
fclose($myFile);
?>
