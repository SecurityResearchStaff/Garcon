<?php

// $mysqli = new mysqli("localhost", "my_user", "my_password", "test");
// $result = $mysqli->query("SELECT DATABASE()");

$a = foo();
$b = "a";
if ($a) {
$b = $a = $_GET[0];
//$b = $a = "a";
}
else {
$b = "b";
$b = $_GET[0];
}
mysql_query($b);

?>