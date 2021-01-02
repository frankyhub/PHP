<?php
//require 'inc/db.php';
    $db = new mysqli('localhost', 'root', 'root', 'adressbuch');
if (isset($_POST['aktion']) and $_POST['aktion']=='speichern') {

$name = "";
if (isset($_POST['name'])) {
$name = trim($_POST['name']);
}
$vorname = "";
if (isset($_POST['vorname'])) {
$vorname = trim($_POST['vorname']);
}
$ort = "";
if (isset($_POST['ort'])) {
$ort = trim($_POST['ort']);
}
$erstellt = date("Y-m-d H:i:s");

if ( $vorname != '' or $nachname != '' or $anmerkung != '' )
{

// speichern
}

// speichern  S298
$einfuegen = $db->prepare("
INSERT INTO kontakte (id, name, vorname, ort)
VALUES (?, ?, ?, ?)
");
$einfuegen->bind_param('ssss', $id, $name, $vorname, $ort);
if ($einfuegen->execute()) {
header('Location: index.php?aktion=feedbackgespeichert');
die();
echo "<h1>gespeichert</h1>";
}





}
$daten = array();
if ($erg = $db->query("SELECT * FROM kontakte")) {
if ($erg->num_rows) {
while($datensatz = $erg->fetch_object()) {
$daten[] = $datensatz;
}
$erg->free();
}
}
if (!count($daten)) {
echo "<p>Es liegen keine Daten vor :(</p>";
} else {
?>
<table>
<thead>
<tr>

<th>Name</th>
<th>Vorname</th>
<th>Ort</th>

</tr>
</thead>
<tbody>
<?php
foreach ($daten as $inhalt) {
?>
<tr>
<td><?php echo $inhalt->name; ?></td>
<td><?php echo $inhalt->vorname; ?></td>
<td><?php echo $inhalt->ort; ?></td>

</tr>
<?php
}
?>
</tbody>
</table>
<?php
}
?>
<br>
<br>
<h3> Daten Eingabe:</h3>
<form action="" method="post">

<label>Name:
<input type="text" name="name" id="name">
</label>
<label>Vorname:
<input type="text" name="vorname" id="vorname">
</label>
<label>Ort:
<input name="ort" id="ort">
</label>
<input type="hidden" name="aktion" value="speichern">
<input type="submit" value="speichern">
</form>
