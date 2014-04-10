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
$query = "SELECT Benutzername,Passwort FROM Anmeldedaten";
		$ergebnis = mysql_query($query,$verbindung);

while($daten = mysql_query($ergebnis)
{
			if($id == $daten[0]) // Übeprüft ob es den Login Namen gibt
			{
				if($pw == $daten[1]) //Überprüft ob Login Name und Passwort zusammenpassen
				{
					$_SESSION['id'] = $id; //Session Variable setzen
					$_SESSION['status'] = 'Logout'; //Setzt den Value des Buttons auf Logout
						
					//Name und Vorname der eingeloggten Person aus der Datenbank auslesen und in Session Variablen speichern
					$query = "SELECT Nachname,Vorname FROM person WHERE p_id = " .$daten[2];
					$ergebnis = mysql_fetch_array(mysql_query($query,$verbindung));
					$_SESSION['Vorname'] = $ergebnis[1];
					$_SESSION['Nachname'] = $ergebnis[0];
					$_SESSION['loginerr'] = '';
					break;
				}
				else
				{
					$_SESSION['loginerr'] = 'Falsches Passwort eingegeben...'; //Error
					break;	
				}
			}
			else
			{
				$_SESSION['loginerr'] = 'Falsche Logindaten eingegeben...'; //Error
			}
			$daten++;
		}
		
		if(isset($_SESSION['id'])) // Wenn erfolgreich eingeloggt
		{
			header('Location: hauptseite.html');	//Weiterleitung zur Hauptseite
		}
		else //Sonst zurück zur Loginseite
		{
			header('Location: index.html');	
		}
}
		
	?>
</body>
</html>