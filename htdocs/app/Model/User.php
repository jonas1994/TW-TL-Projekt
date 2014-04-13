<?php
//App::uses('AppModel', 'Model'); // vllt wichtig ma gucken

class User extends AppModel 
{
	var $name = 'User';
    var $useTable = 'users';

	public $validate = array
	(
		'benutzername' => array('required' => array('rule' => array('notEmpty'),)),
		'passwort' => array('required' => array('rule' => array('notEmpty'))),
		'passwortErneutEingeben' => array('required' => array('rule' => array('notEmpty'))),
	);

	public function register ($postData)
	{
		
	}
}
?>
