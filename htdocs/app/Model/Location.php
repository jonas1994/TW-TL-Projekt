<?php
//App::uses('AppModel', 'Model'); // vllt wichtig ma gucken

class Location extends AppModel 
{
	public $hasMany = 'User';

}
?>