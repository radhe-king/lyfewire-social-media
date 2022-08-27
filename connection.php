<?php
//create connection
$db = new mysqli("localhost", "root", "", "connect", 3307);

//check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
