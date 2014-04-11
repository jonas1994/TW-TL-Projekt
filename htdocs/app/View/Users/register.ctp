<h2>Registrieren</h2>
<?php
	echo $this->Form->create('User');
	echo $this->Form->input('benutzername'); //eingabefeld für benutzername
	echo $this->Form->input('passwort', array('type' => 'password')); // eigabefeld für pw
	echo $this->Form->input('passwortErneutEingeben', array('type' => 'password')); // eingabefeld für pwee
	echo $this->Form->end('Registrieren'); // Registrieren Button

?>