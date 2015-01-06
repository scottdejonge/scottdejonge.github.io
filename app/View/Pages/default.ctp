<?php

	// Page settings
	$this->set('title_for_layout', $page['Page']['title']);

	// OpenGraph Image
	if (!empty($page['Image'])) {
		$this->set('og_image', $this->MagicImage->resize($page['Image'][0]['slug'], 'og_image'));
	}

?>

<main role="main">
	<div class="container">
		<div class="row">
			<div class="column-3-4 column-center gutter-bottom">
				<h1 class="page-title"><?php echo h($page['Page']['title']); ?></h1>
				<?php echo $page['Page']['content_formatted']; ?>
			</div>
		</div>
	</div>
</main>