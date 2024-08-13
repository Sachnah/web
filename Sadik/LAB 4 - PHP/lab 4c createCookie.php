<?php
    $cookie_name = "user";
    $cookie_value = "Cookie created by PHP for a duration of 1 day";
    $expiry_time = time() + (86400); // 86400 seconds = 1 day

    setcookie($cookie_name, $cookie_value, $expiry_time, "/"); // "/" means the cookie is available in the entire domain

    echo "Cookie named '" . $cookie_name . "' is set!<br>";
?>
