<html>
<head>
<title> Log In </title>
</head>
<body>
<?php

$id = $_POST['user'];
$pw = $_POST['password'];



$db_server='localhost';
$db_user = 'root';
$db_passwort = '';
$db_name = 'Haushaltsrechner';
$verbindung = mysql_connect($db_server,$db_user,$db_passwort);
if(!$verbindung)
	die("Der Server kann nicht erreicht werden.");
if(!mysql_select_db($db_name,$verbindung))
	die("Die Datenbank kann nicht angesprochen werden.");
mysql_close($verbindung);

while($daten = mysql_query($verbindung)
if($ergebnis)
{
	echo mysql_error();
}
	
?>
</body>
</html>