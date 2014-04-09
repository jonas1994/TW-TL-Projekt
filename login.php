<html>
<head>
<title> Log In </title>
</head>
<body>
<?php
$db_server='localhost';
$db_user = 'root';
$db_passwort = '';
$db_name = 'schule';
$verbindung = mysql_connect($db_server,$db_user,$db_passwort);
if(!$verbindung)
	die("Der Server kann nicht erreicht werden.");
if(!mysql_select_db($db_name,$verbindung))
	die("Die Datenbank kann nicht angesprochen werden.");
mysql_close($verbindung);
	
?>
</body>
</html>