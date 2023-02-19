<?php
$value = 'snifftegist';

setcookie("SniffTegist", $value);
setcookie("SniffTegist", $value, time()+60*60*24*7);  /* expire in 7 days */
setcookie("SniffTegist", $value, time()+60*60*24*7, "/", "snifftegist.com", 7);

// Print an individual cookie
echo $_COOKIE["SniffTegist"];

// Another way to debug/test is to view all cookies
print_r($_COOKIE);
?>

