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
			
			<?php foreach ($children as $child) : ?>
			
				<div class="column-1-3 column-medium-1-2 gutter-bottom">
					<article class="article-tile">
						<header class="article-tile-header">
							<?php 
								$image = $this->Html->image($this->MagicImage->resize($child['Image'][0], '800-600'), array('alt' => $child['Page']['title']));
								echo $this->Html->link($image, '/' . $child['Page']['path'], array('escape' => false, 'class' => 'media media-4-3'));
							?>
						</header>
						<footer class="article-tile-footer">
							<h3 class="article-tile-title">
								<?php echo $this->Html->link(h($child['Page']['title']), '/' . $child['Page']['path']);?>
							</h3>
							<hr class="divider">
							<p class="article-tile-excerpt"><?php echo $child['Page']['content']; ?></p>
						</footer>
					</article>
				</div>
			
			<?php endforeach; ?>
	
		</div>
	</div>
</main>