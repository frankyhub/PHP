<!doctype html>
<html class="no-js" lang="en">
  <head>
		<META HTTP-EQUIV="refresh" CONTENT="6">
    <title>DHT22 von UnoWIFI</title>
		<link rel="stylesheet" href="styles.css">
  </head>

  <body>
		<div id="wrapper">
			<h3>DHT22 von UnoWIFI</h3>

<?php

    echo date("d.m.Y  H:i:s");
     echo '<br>';
     echo '<br>';


define ( 'MYSQL_HOST',      'rdbms.strato.de' );
define ( 'MYSQL_BENUTZER',  'Uxxx' );
define ( 'MYSQL_KENNWORT',  'xxx' );
define ( 'MYSQL_DATENBANK', 'DBxxx' );


$db = new mysqli(
                    MYSQL_HOST,
                    MYSQL_BENUTZER,
                    MYSQL_KENNWORT,
                    MYSQL_DATENBANK);

  //  $db = new mysqli('localhost', 'root', 'root', 'adressbuch');

  if ( new mysqli )
{
    echo 'Frankyhub Datenbank-Verbindung erfolgreich ';
}
else
{
    // hier kommt später eine Email bei Problemen
    die('keine Verbindung mÃ¶glich: ' . mysqli_error());
}
//$sql = "INSERT INTO `dht001` (`id`, `value1`, `value2`) VALUES (NULL, '', ''), (NULL, '12', '13')";

//---------WRITE----------------
$temp = '55';
$feuchte = '66';
$db->query = "UPDATE `dht001` SET `value2` = '44', `value2` = '55' WHERE `dht001`.`id` = 1";
//$db->query = "UPDATE `dht001` SET `value1` = $temp WHERE `dht001`.`id` = 1 ";
//$db->query = "INSERT INTO `dht001` (`value1`, `value2`) VALUES (NULL, NULL);";     //funkt
//$mysql_query = "INSERT INTO `dht001` (`value1`, `value2`) VALUES ('12', '13', NOW());";


//-----------------------------

//---------Anzeige----------------

echo "<h2>Sensordaten IOT</h2>";
$erg = $db->query("SELECT id, value1, value2 FROM dht001")
or die( $db->error);
if ($erg->num_rows) {
}

if ($erg->num_rows) {

echo $erg->num_rows;
echo " Datens. vorhanden";
}

echo "<p>  |   ID  | T   |  F ";
while ($zeile = $erg->fetch_assoc()) {
echo '<br>' .' | '. $zeile ['id'] .'  -| '. $zeile['value1'] .' | '. $zeile['value2'] ;
}

    //-------------------------------------------------
echo '<br>';
echo '<br>';
echo "Datensatz Ende";

?>
	</div>
  </body>
</html>
