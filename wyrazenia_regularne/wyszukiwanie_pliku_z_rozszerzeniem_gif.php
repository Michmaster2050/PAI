<?php
$wzorzec = "/\S*\.gif/i"; // i ignoruje wielkość znaków
$tekst = "w pliku obrazek.gif jest ikona";

if(preg_match($wzorzec, $tekst)){
    echo "Znaleziono obrazek!";
} else {
    echo "nie znaleziono obrazka!";
}
?>