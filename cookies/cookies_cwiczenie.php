<?php
$cookie_name = "promocja";
$cookie_value = "wycieczka";

setcookie($cookie_name, $cookie_value, time()+ (48*60*60));

if(!isset($_COOKIE[$cookie_name])){
    echo "Cookie named '".$cookie_name ."' is not set!";
} else {
    echo "Coookie: '".$cookie_name."' is set! <br>";
    echo "Value is: ".$_COOKIE[$cookie_name];
};

// setcookie($cookie_name, $cookie_value, time() - 3600); // po usunięciu haszowania, cookie zostanie usunięty
?>