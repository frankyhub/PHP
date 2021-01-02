<?php
echo date("H:i:s");

    $db = new mysqli('localhost', 'root', 'root', 'adressbuch');
$db->query("DELETE FROM kontakte WHERE id='5'");



?>