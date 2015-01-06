<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<title>Scott de Jonge</title>
		<?php
			echo $this->Html->meta('icon');
			echo $this->Html->css('/generated/styles/styles.css', array('inline' => false));
	
			echo $this->fetch('meta');
			//echo $this->fetch('script');
			echo $this->fetch('css');
		?>
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