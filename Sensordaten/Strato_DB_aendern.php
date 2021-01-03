<?php

//Strato DB Sensordaten ändern

    echo date("d.m.Y  H:i:s");
     echo '<br>';
     echo '<br>';


define ( 'MYSQL_HOST',      'rdbms.strato.de' );
define ( 'MYSQL_BENUTZER',  'U4xx' );
define ( 'MYSQL_KENNWORT',  'xxx!' );
define ( 'MYSQL_DATENBANK', 'DBxxx' );


$db = new mysqli(
                    MYSQL_HOST,
                    MYSQL_BENUTZER,
                    MYSQL_KENNWORT,
                    MYSQL_DATENBANK);

  if ( new mysqli )
{
    echo 'Frankyhub Datenbank-Verbindung erfolgreich ';
}
else
{
    die('keine Verbindung mÃ¶glich: ' . mysqli_error());
}
 
//error_reporting(0);
    error_reporting(E_ALL);
    print_r ($db->connect_error);

    if ($db->connect_errno) {
    die('Sorry - gerade gibt es ein Problem');
}

    $erg = $db->query("SELECT * FROM Sensor")
    or die($db->error);

//--------Werte ändern--------------------------------------------------
  //Variable definieren
$temp = '39';
$feuchte = '38';

//Verbindung zur Datenbank herstellen und Werte ändern
$db->query("UPDATE `Sensor` SET `Temperatur` = $temp WHERE `Sensor`.`id` = 1 ");
$db->query("UPDATE `Sensor` SET `Feuchte` = $feuchte WHERE `Sensor`.`id` = 1 ");
   
//--------Werte anzeigen------------------------------------------------

 echo "<h2>Sensordaten</h2>";
$erg = $db->query("SELECT ID, Temperatur, Feuchte FROM Sensor")
or die( $db->error);
if ($erg->num_rows) {
}

$erg = $db->query("SELECT ID, Temperatur, Feuchte FROM Sensor");

if ($erg->num_rows) {
echo $erg->num_rows;
echo " Datens&auml;tze vorhanden";
}

echo "<p>  |   ID  | T   |  F ";
while ($zeile = $erg->fetch_assoc()) {
echo '<br>' .' | '. $zeile ['ID'] .'  -| '. $zeile['Temperatur'] .' | '. $zeile['Feuchte'] ;
}

echo '<br>';
echo '<br>';
echo "Datensatz Ende";
?>
