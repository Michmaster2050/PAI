<?php
$wzorzec = "/\d{5}/";
$tekst = "telefon 567899011";

if(preg_match($wzorzec, $tekst)){
    echo "Znaleziono cyfrę!";
} else {
    echo "nie znaleziono cyfry!";
};
?>