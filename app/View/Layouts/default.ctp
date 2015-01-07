<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<title>Scott de Jonge</title>
		
		<!-- Open Graph Meta Data -->
		<meta property="og:site_name" content="Scott de Jonge" />
		<meta property="og:url" content="<?php echo h(Router::url($this->here, true)); ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="<?php echo h($title_for_layout); ?>" />
		<?php if (isset($og_image)): ?>
			<meta property="og:image" content="<?php echo Router::url($og_image, true); ?>" />
		<?php endif; ?>
		<meta property="og:image" content="<?php echo Router::url('/assets/img/og-400.png', true); ?>" />
		<meta property="og:image" content="<?php echo Router::url('/assets/img/og-1200-630.jpg', true); ?>" />
		<?php if (isset($og_description)): ?>
			<meta property="og:description" content="<?php echo h($og_description); ?>" />
		<?php endif; ?>
		
		<!-- Twitter Card Meta Data -->
		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="scottdejonge">
		
		<?php
			echo $this->Html->css('/generated/styles/styles.css', array('inline' => false));
			echo $this->fetch('css');
		?>
		
		<!-- Icons -->
		<link rel="shortcut icon" href="/assets/ico/favicon.ico" type="image/x-icon" />
		<link rel="icon" href="/assets/ico/favicon.ico" type="image/x-icon" />
	
	</head>
	<body>
		<?php 
			echo $this->element('header');
			echo $this->fetch('content');
			echo $this->element('footer');
			//echo $this->element('sql_dump');
		?>
	</body>
</html>