<?php 


if ($_SERVER["PHP_AUTH_USER"] == "zaz" && $_SERVER["PHP_AUTH_PW"] == "jaimelespetitsponeys")
{
    echo "<html><body>";
    echo"\nHello Zaz<br />\n";
    echo "<img src='data:image/png;base64,";
    echo base64_encode(file_get_contents("../img/42.png"))."'>";
    echo "\n<html><body>\n";
}
else
{
    header("HTTP/1.1 404 Not Found");
    header("WWW-Authenticate: Basic realm=\\\"Member area\\\"");
    echo "<html><body>That area is accessible for members only</body></html>\n";
}
?>
