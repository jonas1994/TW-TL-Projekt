<?php
class UsersController extends AppController 
{
	var $name = 'Users';
	public $helpers = array('Html', 'Form');
	var $components = array('Auth');
	public function beforeFilter() 
	{
      $this->Auth->allow('register');
	}
	public function register()
	{
		if($this->request->is('post')) //erst wenn das form abgeschickt wurde wird mit den daten gearbeitet
		{
			//überprüfung ob passwörter gleich sind
			if ($this->data['User']['passwort'] == $this->data['User']['passwortErneutEingeben']) 
			{
				$this->User->create();     // user objekt wird erstellt
				if ($this->User->save($this->request->data))    // wenn die Daten erfolgreich hinzugefügt wurden
				{
					$this->Session->setFlash(__('Registrierung erfolgreich Pro.')); // klappt alles super klasse
					//return $this->redirect(array('action' => 'index'));
				}
				$this->Session->setFlash(__('Registrierung fehlgeschlagen Noob.')); // faaailt
			}
		}
	}
}
?>