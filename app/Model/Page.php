<?php

class Page extends AppModel {

/**
 * Properties
 */

	public $order = 'Page.lft ASC';
	public $displayField = 'menu_title';

/**
 * Behaviors
 */

	public $actsAs = array(
		'Tree',
		'Tank.InputCleaner',
		'Tank.Slug' => array('unique' => false),
		'Tank.UrlParser'
	);

/**
 * Validation
 */

	public $validate = array(
		'title' => array(
			'rule' => 'notempty',
			'message' => 'Title is a required field',
		),
	);

/**
 * Relationships
 */
 	
	public $belongsTo = array(
		'ParentPage' => array('className' => 'Page', 'foreignKey' => 'parent_id'),
	);
	
	public $hasAndBelongsToMany = array(
		'Image' => array(
			'order' => 'ImagesPage.id',
		),
	);
	

/**
 * Static Data
 */

	public function getTemplatesList() {
		return array(
			'' => 'Default',
		);
	}

/**
 * Save Callbacks
 */

	public function beforeSave($options = array()) {

		$data =& $this->data[$this->alias];

		// set parent_id = null if parent_id = '' or 0
		// not sure if we still need this since (tree behaviour may have been updated)
		if (isset($data['parent_id']) && empty($data['parent_id'])){
			$data['parent_id'] = null;
		}

		if (empty($data['menu_title']) && !empty($data['title'])) {
			$data['menu_title'] = $data['title'];
		}

		return parent::beforeSave($options);
	}

	/*public function _clearCache($type = null) {
		Cache::delete('siteNavigation');
		return parent::_clearCache($type);
	}*/

	public function afterSaveAll($result) {
		$id = $this->id;
		$this->updateAllPaths();
		$this->id = $id;
	}

	public function updateAllPaths() {
		$pages = $this->find('threaded', array('fields' => array('id', 'parent_id', 'slug')));
		$this->_savePaths($pages, '');
	}

	public function _savePaths($data, $path) {
		foreach ($data as $key => $page){
			$child_path = $path . '/' . $page['Page']['slug'];
			$this->save(array('id' => $page['Page']['id'], 'path' => trim($child_path, '/')));
			if (!empty($page['children'])) {
				$this->_savePaths($page['children'], $child_path);
			}
		}
	}

/**
 * Data Retrieval
 */

	public function getNavigation() {
		$pages = $this->find('threaded', array('fields' => array('id','parent_id','slug','viewable','visible','path','title','menu_title','url'), 'contain' => array()));
		$this->_formatNavigation($pages);
		return $pages;
	}

	public function _formatNavigation(&$data) {
		foreach ($data as $key => &$value) {
			$value['title'] = $value['Page']['menu_title'];
			$value['pageTitle'] = $value['Page']['title'];
			$value['slug'] = $value['Page']['slug'];
			$value['url'] = !empty($value['Page']['url']) ? $value['Page']['url'] : '/'.$value['Page']['path'];
			$value['visible'] = $value['Page']['visible'];

			if (!$value['visible']) {
				$value['visible'] = 0;
				unset($value['url']);
			}

			unset($value['Page']);

			if (!empty($value['children'])) {
				$this->_formatNavigation($value['children']);
			}

		}
	}

	public function getSitemapLinks() {
		$results = $this->find('all', array(
			'fields' => array('path', 'url'),
			'conditions' => array(
				'Page.viewable' => 1,
				'Page.searchable' => 1,
			),
			'recursive' => -1,
		));
		$links = array();
		foreach ($results as $result) {
			if (!empty($result['Page']['url'])) {
				// ignore page urls that don't start with a /
				if ($result['Page']['url'][0] != '/') {
					continue;
				}
				$links[] = $result['Page']['url'];
			} else {
				$links[] = '/' . $result['Page']['path'];
			}
		}
		return $links;
	}
	
	public function getHeroImages($id) {
		// if arg is array, then use it as a condition to find hero images
		if (is_array($id)) {
			$id = $this->field('id', $id);
			if (!$id) {
				return array();
			}
		}
		$this->contain('Image', false);
		$path = $this->getPath($id, null, 1);
		$this->resetBindings();
		for ($i = count($path) - 1; $i >= 0; $i--) {
			if (!empty($path[$i]['Image'])) {
				return $path[$i]['Image'];
			}
		}
		return array();
	}

/**
 * Returns page url based on supplied item
 */
	public function getPageUrl($data) {
		if (!empty($data[$this->alias]['url'])) {
			return $data[$this->alias]['url'];
		} else {
			return '/' . $data[$this->alias]['path'];
		}
	}

}
