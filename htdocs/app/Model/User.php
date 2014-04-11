<?php
//App::uses('AppModel', 'Model'); // vllt wichtig ma gucken

class User extends AppModel 
{
	public $validate = array
	(
		'benutzername' => array('rule' => 'notEmpty'), //standart für die zwei eingabefelder ob leer oder so 
		'passwort' => array('rule' => 'notEmpty'),
		'passwortErneutEingeben' => array('rule' => 'notEmpty')
	);

	public function register ($postData)
	{
		
	}
}
?>

