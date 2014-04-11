<!DOCTYPE html>
<html>
<head>
	<link rel = "stylesheet" type="text/css" href="normalize.css">
	<meta http-equiv="Content-Type" content="text/php; charset=utf-8"/>  <!-- Damit Umlaute und ß funktionieren -->
	<title>Registrieren</title>
</head>
<body>

<div  style="background-color:#FFA500;height:50px;">  <!-- Überschrift mit Farbe -->

<h1 style="margin-bottom:0;">Registrierung</h1></div>  <!-- name Haushaltsrechner -->

<div  style="background-color:#FFD700;width:20%;float:left"> <!-- leftdiv farbe höhe breite schrift linksgebunden -->
<b>Eintrag hinzuf&uumlgen</b><br>  <!-- Text -->
<b>Kontostand</b><br>
<b>&Uumlbersicht</b><br>
<b>Forum</b><br>
<b>Hilfe</b><br>
</div> 

<div  style="text-align:padding;background-color:#EEEEEE;height:100%;width:80%;float:left;"> <!--  inhalt farbe höhe breite schrift linksgebunden -->
<b> User: </b>
<input type="text" name="user" size="10"><br>
<b> Passwort: </b>
<input type="text" name="password" size="10"><br>
<form action "/hauptseite.html" method "get">
<input type="submit" value="Registrieren"><br>



</div>

<div  style="background-color:#FFA500;clear:both;text-align:center;height:50px;"> <!-- fusszeile farbe höhe breite schrift linksgebunden -->
Copyright © JoTi </div>	<!-- Text -->

</div>
<?php



?>

 
</body>
</head>
</html>

