<?php
echo date("H:i:s");

$db = new mysqli('localhost', 'root', 'root', 'adressbuch');

//Verbindung zur Datenbank herstellen
$db->query("UPDATE `kontakte` SET `name` = 'Heinz' WHERE `kontakte`.`id` = 5
    ");

 

?>
