<?php
echo date("H:i:s");

$db = new mysqli('localhost', 'root', 'root', 'adressbuch');

$db->query("
INSERT INTO kontakte (id, name, vorname, ort)
VALUES ('5', 'Axel', 'Maier', 'Leitn');
");

 

?>
