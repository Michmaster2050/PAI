<?php
$wzorzec = '/być/';
$tekst = "być albo nie być";

if(preg_match($wzorzec,$tekst)){
    echo "Znaleziono wzorzec <br>";
} else {
    echo "Nie znaleziono wzorca <br>";
}
echo "znaleziono: ".preg_match_all($wzorzec,$tekst);

?>