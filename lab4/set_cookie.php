<?php
// Set cookie parameters
$cookie_name = "user";
$cookie_value = "John Doe";

// Set cookie to expire in one day (86400 seconds)
$expiry_time = time() + 86400; // 24 hours from now

// Set the cookie
setcookie($cookie_name, $cookie_value, $expiry_time, "/"); // "/" means the cookie is available across the entire website

// Check if the cookie is set
if (isset($_COOKIE[$cookie_name])) {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value: " . $_COOKIE[$cookie_name];
} else {
    echo "Cookie is not set!";
}
?>
