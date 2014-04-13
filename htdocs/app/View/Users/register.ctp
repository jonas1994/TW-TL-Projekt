<div class="users form">
	<?php echo $this->Form->create('User'); ?>
		<fieldset>
		<legend><?php echo __('Registrieren:'); ?></legend>
	<?php 
		echo $this->Form->input('benutzername');
		echo $this->Form->input('passwort');
		echo $this->Form->input('passwortErneutEingeben');
	?>
		</fieldset>
	<?php 
		echo $this->Form->end(__('Registrieren')); 
	?>
</div>


