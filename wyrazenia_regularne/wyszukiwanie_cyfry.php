<?php
$wzorzec = '/\d/';
$tekst = "mam 4 zeszyty";

if(preg_match($wzorzec, $tekst)){
    echo "Znaleziono cyfrę!";
} else {
    echo "nie znaleziono cyfry!";
};

?>