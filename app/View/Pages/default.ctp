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
				<article class="article">
					<div class="media media-16-9" href="#">
						<img src="http://placehold.it/1280x720">
					</div>
					<div class="article-content">
						<h1 class="page-title"><?php echo h($page['Page']['title']); ?></h1>
						<?php echo $page['Page']['content_formatted']; ?>
					</div>
				</article>
			</div>
		</div>
	</div>
</main>