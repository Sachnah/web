<?php
if(isset($_COOKIE["user"])) {
    echo "Cookie 'user' is set!<br>";
    echo "Value is: " . $_COOKIE["user"];
} else {
    echo "Cookie 'user' is not set!";
}
?>