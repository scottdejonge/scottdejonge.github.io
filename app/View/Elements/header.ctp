<header class="header">
	<div class="container">
		<a class="header-title left" href="#">
			<div class="avatar"></div>
		</a>
		<nav class="navigation social-links right">
			<ul>
				<li><a href="#">&#10026;</a></li>
				<li><a href="#">&#10026;</a></li>
				<li><a href="#">&#10026;</a></li>
				<li><a href="#">&#10026;</a></li>
			</ul>
		</nav>
		<nav class="navigation right">
			<?php echo $this->MagicMenu->get('nav')->render('nav', array('item' => '<li><a:href:class>:title</a></li>'), 0); ?>
		</nav>
		<div class="clearfix"></div>
	</div>
</header>