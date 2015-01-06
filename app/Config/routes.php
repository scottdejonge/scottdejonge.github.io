<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 */
	
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'work'));
	
/**
 * Admin/Tank (move to plugin?)
 */
 	// admin login page
	Router::connect('/admin', array('plugin' => 'tank', 'controller' => 'admin_users', 'action' => 'login', 'prefix' => 'admin', 'admin' => true));

	// hookup admin controllers
	Router::connect('/admin/:controller', array('plugin' => 'tank', 'prefix' => 'admin', 'action' => 'index', 'admin' => true), array('controller' => 'admin_users|uploads|images|documents|redirects'));
	Router::connect('/admin/:controller/:action/*', array('plugin' => 'tank', 'prefix' => 'admin', 'admin' => true), array('controller' => 'admin_users|uploads|images|documents|redirects'));

	// maybe these rules should go first above the other urls
	Router::connect('/admin/:controller', array('prefix' => 'admin', 'admin' => true));
	Router::connect('/admin/:controller/:action/*', array('prefix' => 'admin', 'admin' => true));

	// Resized images
	Router::connect('/generated/images/*', array('plugin' => 'tank', 'controller' => 'images', 'action' => 'view'));

	Router::connect('/sitemap', array('plugin' => 'tank', 'controller' => 'sitemap', 'action' => 'index'));

	Router::parseExtensions('csv', 'xml', 'json', 'rss');

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

	
	if (!empty($_SERVER['REQUEST_URI'])) {
		$controllers = App::objects('controller');
		$catchAll = true;
		if (preg_match('#^/(tank|admin)(/|$)#', $_SERVER['REQUEST_URI'])) {
			$catchAll = false;
		}
		foreach ($controllers as $controller) {
			$re = '#^/'.Inflector::underscore(str_replace('Controller', '', $controller)).'(/|$)#i';
			if (preg_match($re, $_SERVER['REQUEST_URI'])) {
				$catchAll = false;
				break;
			}
		}
		if ($catchAll) {
			Router::connect('/*', array('controller' => 'pages', 'action' => 'display'));
		}
	}
	
	require CAKE . 'Config' . DS . 'routes.php';


/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
