<header class="header">
	<div class="container">
		<a class="header-logo" href="/">
			<div class="avatar"></div>
		</a>
		<nav class="header-navigation navigation">
			<?php echo $this->MagicMenu->get('nav')->render('nav', array('item' => '<li><a:href:class>:title</a></li>'), 0); ?>
		</nav>
		<nav class="header-social social-links">
			<ul>
				<li><a href="#"><?php echo file_get_contents(WWW_ROOT.'assets/svg/twitter.svg'); ?></a></li>
				<li><a href="#"><?php echo file_get_contents(WWW_ROOT.'assets/svg/facebook.svg'); ?></a></li>
				<li><a href="#"><?php echo file_get_contents(WWW_ROOT.'assets/svg/instagram.svg'); ?></a></li>
				<li><a href="#"><?php echo file_get_contents(WWW_ROOT.'assets/svg/github.svg'); ?></a></li>
			</ul>
		</nav>
	</div>
</header>