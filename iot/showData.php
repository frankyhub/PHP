<!doctype html>
<html class="no-js" lang="en">
  <head>
		<META HTTP-EQUIV="refresh" CONTENT="6">
    <title>DHT22 von UnoWIFI</title>
		<link rel="stylesheet" href="styles.css">
  </head>
	
  <body>

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


//error_reporting(0);
    error_reporting(E_ALL);
    print_r ($db->connect_error);

    if ($db->connect_errno) {
    die('Sorry - gerade gibt es ein Problem');
}

    $erg = $db->query("SELECT * FROM dht001")
    or die($db->error);

//---------------------------------------
 
/*
$sql = "select * from `".$dbtable."` order by id desc limit 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo '
				<div class="dataWrapper">
					<div class="temperatur">Temperature</div>
					<div class="feuchte">Humidity</div>
					<div class="Time">'.$row["value1"].'</div>
					<div class="TimeStamp">'.$row["value2"].'</div>
					<div class="id">'.$row["id"].':  '.$row["time"].'
				</div></div>';
    }
} else {
    echo "0 results";
}

$zoomlevel=1;

if ($_GET["zoomlevel"]){
	$zoomlevel=$_GET["zoomlevel"];
}

$sql = "select * from ( select * from `".$dbtable."` WHERE id mod ".$zoomlevel." = 0 order by id desc limit 800) tmp order by tmp.id asc";
//$sql = "select * from ( select * from `".$dbtable."` order by id desc limit 800) tmp order by tmp.id asc";

$result = $conn->query($sql);
echo '<div class="temperature_graph">';
echo '<span class="bar"></span>';
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
			echo '<div class="bar2" style="height: '.intval(($row["value1"])).'px;">a</div>';
    }
} else {
    echo "0 results";
}
echo "</div>";

$result = $conn->query($sql);
echo '<div class="humidity_graph">';
echo '<span class="bar"></span>';
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
			echo '<div class="bar" style="height: '.intval(($row["value2"])).'px;">a</div>';			
    }
} else {
    echo "0 results";
}
echo "</div>";


echo '<div class="controlls">Zoom: 
 <a href="?zoomlevel=100">100</a>
 <a href="?zoomlevel=50">50</a>
 <a href="?zoomlevel=25">25</a>
 <a href="?zoomlevel=10">10</a>
 <a href="?zoomlevel=1">1</a>
</div>'

//mysql_close($con);

  */

echo "<h4>Sensordaten IOT</h4>";
$erg = $db->query("SELECT id, value1, value2 FROM dht001")
or die( $db->error);
if ($erg->num_rows) {
}

//$erg = $db->query("SELECT ID, value1, value2 FROM dht001")

if ($erg->num_rows) {

echo $erg->num_rows;
echo "Datens. vorhanden";


}

echo "<p> <h4> |   ID  | Te    |  Fe ";
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
