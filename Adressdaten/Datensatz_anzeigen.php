<?php


    echo date("H:i:s");
    
    $db = new mysqli('localhost', 'root', 'root', 'adressbuch');
    
    
// error_reporting(E_ALL);
//error_reporting(0);
    error_reporting(E_ALL);
$db = new mysqli('localhost', 'root', 'root', 'adressbuch');
print_r ($db->connect_error);

if ($db->connect_errno) {
 die('Sorry - gerade gibt es ein Problem');
}

    $erg = $db->query("SELECT * FROM kontakte")
    or die($db->error);
   /*   
    print_r($erg);
 */   
  //-------------------------------------------------
echo "<h1>Programm Adressbuch mit Leerzeile</h1>";
$erg = $db->query("SELECT id, vorname, name, ort FROM kontakte")
or die( $db->error);
//print_r($erg);
if ($erg->num_rows) {
echo "<p>Daten vorhanden: Anzahl ";
echo $erg->num_rows;
}
// while ($zeile = $erg->fetch_assoc()) {
$datensatz = $erg->fetch_all(MYSQLI_ASSOC);
foreach($datensatz as $zeile) {
echo '<br>';
echo '<br>' . $zeile['vorname'] .' '. $zeile['name'].' '. $zeile['ort'] ;
}
 
 echo '<br>';
 echo '<br>';
 echo '<br>';  
 
  //------------------------------------------------- 
echo "<h1>Programm Adressbuch ohne Leerzeile</h1>";
$erg = $db->query("SELECT id, vorname, name, ort FROM kontakte")
or die( $db->error);

if ($erg->num_rows) {
echo "<p>Daten vorhanden: Anzahl ";
echo $erg->num_rows;
}
while ($zeile = $erg->fetch_assoc()) {
echo '<br>' . $zeile['vorname'] .' '. $zeile['name'].' '. $zeile['ort'] ;
}
  //-------------------------------------------------
 echo '<br>';
 echo '<br>';
 
 

 
 
 
 
 
 echo '<br>';
 echo '<br>';
 echo '<br>';
 echo '<br>';
 echo '<br>';
 echo '<br>';
 echo '<br>';
 echo '<br>';
 echo '<br>';
 echo '<br>';
 echo '<br>';
 echo '<br>';
 echo '<br>';
 
 
//$erg->free();
//$db->close();

?>
<form action="" method="post">
<label>Name:
<input type="text" name="name" id="name">
</label>
<label>Vorname:
<input type="text" name="vorname" id="vorname">
</label>
<label>Ort:
<textarea name="ort" id="ort"></textarea>
</label>
<input type="hidden" name="aktion" value="speichern">
<input type="submit" value="speichern">

</form>


