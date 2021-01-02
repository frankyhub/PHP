<?php

// KHF DB4333920
// Tabelle Keller
// ID Temperatur Feuchte



//echo date("H:i:s");

$db = new mysqli('localhost', 'root', 'root', 'sensor');

//Variable definieren
$temp = '22';
$feuchte = '65';


//Verbindung zur Datenbank herstellen und Werte ändern
$db->query("UPDATE `keller` SET `Temperatur` = $temp WHERE `keller`.`id` = 1 ");
$db->query("UPDATE `keller` SET `Feuchte` = $feuchte WHERE `keller`.`id` = 1 ");

//$db->query("INSERT INTO `sensor` (`ID`, `Temperatur`, `Feuchte`) VALUES ('1', '32', '36'"); 

  //-------------------------------------------------
// error_reporting(E_ALL);
//error_reporting(0);
    error_reporting(E_ALL);
$db = new mysqli('localhost', 'root', 'root', 'sensor');
print_r ($db->connect_error);

if ($db->connect_errno) {
 die('Sorry - gerade gibt es ein Problem');
}

    $erg = $db->query("SELECT * FROM keller")
    or die($db->error);
   /*
    print_r($erg);
 */
echo "<h3>Sensordaten Keller</h3>";
$erg = $db->query("SELECT id, temperatur, feuchte FROM keller")
or die( $db->error);
//print_r($erg);
if ($erg->num_rows) {
echo "<p>Daten vorhanden, Anzahl: ";
echo $erg->num_rows;
}
// while ($zeile = $erg->fetch_assoc()) {
$datensatz = $erg->fetch_all(MYSQLI_ASSOC);
foreach($datensatz as $zeile) {
echo '<br>';
//echo 'T'.' ..   '.'F' ;
//echo '<br>' . $zeile['temperatur'].' '. $zeile['feuchte'] ;
}

 echo '<br>';


?>
<!DOCTYPE html>
<html>
<body>
<table border="0" cellpadding="3" cellspacing="0">
<th>Temperatur</th>
<th>Feuchte</th>
<tr>
<td><?php echo  $zeile['temperatur'];?>  &#176 C 
<td><?php echo $zeile['feuchte'];?>  %
</tr>
</table>
</body>
</html>
