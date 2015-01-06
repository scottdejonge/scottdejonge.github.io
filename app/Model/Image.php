<?php

class Image extends AppModel {

	public $actsAs = array(
		'Tank.Image' => array('type' => array('jpg','png','gif')),
		'Tank.Slug' => array('label' => '_slug')
	);

}