<?php

App::uses('AppController', 'Controller');

class PagesController extends AppController {

	public function display() {

		if (!func_num_args()) {
			$this->redirect('/');
		}
		$args = func_get_args();
		if (!count($args)) {
			$this->redirect('/');
		}
		if (!end($args)) {
			array_pop($args);
		}
		$path = join('/', $args);

		// find page
		$page = $this->Page->find('first', array(
			'conditions' => array('OR' => array('Page.path' => $path, 'Page.url' => '/' . $path)),
			'contain' => array(
				'Image',
				'ParentPage',
			)
		));

		if (!$page) {
			throw new NotFoundException();
		} elseif ($page['Page']['viewable'] == 0) {
			// page found, but not viewable
			// search for viewable child
			$page = $this->Page->find('first', array(
				'fields' => array('path'),
				'conditions' => array(
					'lft >=' => $page['Page']['lft'],
					'rght <=' => $page['Page']['rght'],
					'viewable' => 1,
				),
				'recursive' => -1
			));

			// no viewable child exists
			if (!$page) {
				throw new NotFoundException();
			}

			// redirect to viewable child
			if (!empty($page['Page']['url'])) {
				$this->redirect($page['Page']['url']);
			}
			$this->redirect('/' . $page['Page']['path']);

		}

		$this->pageTitle = $page['Page']['title'];

		$children = $this->Page->find('threaded', array(
			'conditions' => array(
				'Page.lft >' => $page['Page']['lft'],
				'Page.rght <' => $page['Page']['rght'],
				'Page.visible' => 1,
			),
			'contain' => array(),
		));

		// Set template to be 'default' if not defined
		$page['Page']['template'] = $page['Page']['template'] ?: 'default';

		$this->set(compact('page', 'children'));

		// Load extra content by template
		$method = 'template_' . $page['Page']['template'];
		if (method_exists($this, $method)) $this->{$method}($page);

		$this->set('title_for_layout', $page['Page']['title']);

		$this->render($page['Page']['template']);
	}


/**
 * Extra content for bespoke templates
 */

/*
	private function template_default($page) {

	}

	private function template_home($page) {

	}
*/

/**
 * Admin Methods
 */

	protected function adminPopulateAssociated() {
		parent::adminPopulateAssociated();
	}

}