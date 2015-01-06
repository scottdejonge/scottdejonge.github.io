<?php

/**
 * Tank configuration
 */

Configure::write('Tank.MagicImage', array(
	'presets' => array(
		'600-400-fit' => array(
			'w' => 600,
			'h' => 400,
			'fit' => true
		),
		'og_image' => array(
			'w' => 1200,
			'h' => 675,
			'fit' => true,
		),
		'1280-600' => array(
			'w' => 1280,
			'h' => 600,
		),
		'500' => array(
			'w' => 500,
			'h' => 500,
		),
	),
));