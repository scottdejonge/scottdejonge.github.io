<header class="header">
	<div class="container">
		<a class="header-title left" href="#">
			<div class="avatar"></div>
		</a>
		<nav class="navigation social-links right">
			<ul>
				<li><a href="#"><?php echo file_get_contents(WWW_ROOT.'assets/svg/twitter.svg'); ?></a></li>
				<li><a href="#"><?php echo file_get_contents(WWW_ROOT.'assets/svg/facebook.svg'); ?></a></li>
				<li><a href="#"><?php echo file_get_contents(WWW_ROOT.'assets/svg/instagram.svg'); ?></a></li>
				<li><a href="#"><?php echo file_get_contents(WWW_ROOT.'assets/svg/github.svg'); ?></a></li>
			</ul>
		</nav>
		<nav class="navigation right">
			<?php echo $this->MagicMenu->get('nav')->render('nav', array('item' => '<li><a:href:class>:title</a></li>'), 0); ?>
		</nav>
		<div class="clearfix"></div>
	</div>
</header>