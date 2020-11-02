<?php
    echo date("d.m.Y  H:i:s");
     echo '<br>';
     echo '<br>';
    
     
define ( 'MYSQL_HOST',      'x' );
define ( 'MYSQL_BENUTZER',  'x' );
define ( 'MYSQL_KENNWORT',  'x' );
define ( 'MYSQL_DATENBANK', 'DB4333x' );


$db = new mysqli(
                    MYSQL_HOST,
                    MYSQL_BENUTZER,
                    MYSQL_KENNWORT,
                    MYSQL_DATENBANK);

  if ( new mysqli )
{
    echo 'Frankyhub Verbindung erfolgreich ';
}
else
{
    // später kommt eine Email bei Problemen
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

    //-------------------------------------------------
    
echo '<br>';
echo '<br>';
echo "Datensatz Ende";

$erg->free();
$db->close();

?>