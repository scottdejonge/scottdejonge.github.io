<?php

class Document extends AppModel {

/**
 * Behaviors
 */
	
	public $actsAs = array(
		'Tank.File' => array('type' => array('pdf', 'doc', 'docx'))
	);

}