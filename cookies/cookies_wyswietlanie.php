<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (24*60*60));

if(!isset($_COOKIE[$cookie_name])){
    echo "Cookie named '".$cookie_name ."' is not set!";
} else {
    echo "Coookie: '".$cookie_name."' is set! <br>";
    echo "Value is: ".$_COOKIE[$cookie_name];
};

setcookie("user", "John Doe", time() - 3600); // sets the expiration date to one hour ago

?>