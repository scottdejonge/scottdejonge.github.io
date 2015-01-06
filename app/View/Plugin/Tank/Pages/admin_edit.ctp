<?php

$pageTitle = Inflector::humanize(Inflector::underscore($this->name));

$this->set('title_for_layout', $pageTitle);

$modelName = reset($this->request->params['models']);
$modelName = $modelName['className'];
$Model = ClassRegistry::init($modelName);

$tableName = Inflector::tableize($modelName);

$edit_mode = !empty($this->data[$modelName]['id']);

if ($edit_mode) {
	$this->subTitle = 'Edit the '.Inflector::humanize(Inflector::underscore($modelName)).' - '.$this->data[$modelName][$Model->displayField];
} else {
	$this->subTitle = 'Add '.Inflector::humanize(Inflector::underscore($modelName));
}

$this->CookieTrail->append($pageTitle, array('action' => 'index'));

if ($edit_mode) {
	$this->CookieTrail->append('Edit Page');
	if (!empty($Model->reservedField)) {
		$this->CookieTrail->append(Inflector::humanize($this->data[$this->model][$Model->reservedField]));
	}
} else {
	$this->CookieTrail->append('Add Page');
}

$this->Layout->beforeColumns = $this->Form->create($modelName);

$main = array();

$main[] = '<fieldset>';
$main[] = $this->Form->input('id');

if (!$edit_mode){
	$parentId = !empty($this->request->query['parent_id']) ? $this->request->query['parent_id'] : '';
	$main[] = $this->Form->input('parent_id', array('label' => 'Parent Page', 'options' => $pages, 'default' => $parentId, 'empty' => '-- TOP LEVEL --'));
}

$main[] = $this->Form->input('title', array('class' => 'text-input medium-input'));

$main[] = $this->Form->input('content', array('ckeditor' => true));

$main[] = '</fieldset>';

$this->Layout->setMainPanelContent($main);

/*
$this->Layout->addMainPanel('Hero Content', array(
	$this->Form->input('hero_title', array('label' => 'Hero Title', 'class' => 'text-input medium-input')),
	$this->Form->input('hero_content', array('label' => 'Hero Content')),
));
*/

$this->Layout->addMainPanel('Image', array(
	$this->MagicUpload->create('Image', array('label' => false, 'element' => 'image_hero_page')),
	'<div style="height:20px"></div>',
	//$this->Form->input('disable_hero_images', array('label' => 'Disable Hero Images from displaying on this page')),
));

$properties = array();
if ($edit_mode) {
	$path = rtrim('/'.substr($this->data['Page']['path'], 0, strrpos($this->data['Page']['path'], '/')),'/').'/ ';
	$properties[] = $this->Form->input('slug', array('label' => 'Page URL', 'class' => 'text-input', 'between' => $path));
}
$properties[] = $this->Form->input('menu_title', array('class' => 'text-input'));
$this->Layout->addSidebarPanel('Properties', $properties);

$this->Layout->addSidebarPanel('Date', array(
	$this->Form->input('created'),
));

$this->Layout->addSidebarPanel('Advanced', array(
	$this->Form->input('viewable', array('label' => 'Show on website', 'default' => true)),
	$this->Form->input('visible', array('label' => 'Include in menu', 'default' => true)),
	$this->Form->input('searchable', array('label' => 'Include in search results', 'default' => true)),
	$this->Form->input('template'),
	$this->Form->input('url', array('label' => 'Custom URL', 'class' => 'text-input')),
));

$this->Layout->afterColumns = $this->Form->end('Save');

?>