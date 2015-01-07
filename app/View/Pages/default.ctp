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
			<div class="column-3-4 column-extra-large-2-3 column-center gutter-bottom">
				<article class="article">
					
					<?php if(!empty($page['Image'])) : ?>
						<div class="media media-16-9">
							<?php echo $this->Html->image($this->MagicImage->resize($page['Image'][0], '1280-720'), array('alt' => $page['Page']['title'])); ?>
						</div>
					<?php endif; ?>
					
					<?php if(!empty($page['Page']['content'])) : ?>
						<div class="article-content">
							<h1 class="page-title"><?php echo h($page['Page']['title']); ?></h1>
							<hr class="divider">
							<?php echo $page['Page']['content']; ?>
						</div>
					<?php endif; ?>
					
				</article>
			</div>
		</div>
	</div>
</main>