<?php
// XAMPP: Apache und MySQL starten
// Browser: http://localhost/phpmyadmin/sql.php?db=adressbuch&table=kontakte&pos=0
// Browser: http://localhost/index.php
// Dateien: C:\xampp\htdocs
// Dateien: C:\xampp\htdocs\khf

//echo date("H:i:s");
echo date("d-m-Y H:i:s"); 
echo '<br>'; 
echo '<br>'; 
//require 'khf/Datensatz_anzeigen.php';
//require 'khf/Datensatz_einfuegen.php';
//require 'khf/Datensatz_loeschen.php';
//require 'khf/Datensatz_aendern.php';
//require 'khf/Datensatz_formular_eingabe.php';
//require 'khf/test.php';
require 'sensor/Sensordaten_aendern.php';
?>