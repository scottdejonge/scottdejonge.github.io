<?php

App::uses('TankController', 'Tank.Controller');

class AppController extends TankController {

	public $helpers = array(
		//'AssetCompress.AssetCompress',
		'Html' => array('className' => 'Tank.MagicHtml'),
		'Form' => array('className' => 'Tank.MagicForm'),
		'Tank.MagicImage',
		'Tank.MagicMenu',
		'Tank.MagicFilter',
		'Text',
	);

	public function beforeRender() {
		if (empty($this->params['admin'])) {
			$this->populateMagicMenu();
		}
		parent::beforeRender();
	}
	
	protected function populateMagicMenu() {
		$siteNavigation = ClassRegistry::init('Page')->getNavigation();
		Configure::write('MagicMenu.nav', $siteNavigation);
	}
	
}