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
			
				<?php
					
					if (!empty($child['Page']['url'])) {
						$link = $child['Page']['url'];
					} else {
						$link = $child['Page']['path'];
					}
					
				?>
			
				<div class="column-1-3 column-medium-1-2 gutter-bottom">
					<article class="article-tile">
						
						<?php if(!empty($child['Image'])) : ?>
							<header class="article-tile-header">
								<?php 
									$image = $this->Html->image($this->MagicImage->resize($child['Image'][0], '800-600'), array('alt' => $child['Page']['title']));
									echo $this->Html->link($image, '/' . $link, array('escape' => false, 'class' => 'media media-4-3'));
								?>
							</header>
						<?php endif; ?>
						
						<?php if(!empty($child['Page']['content'])) : ?>
							<footer class="article-tile-footer">
								<h3 class="article-tile-title">
									<?php echo $this->Html->link(h($child['Page']['title']), '/' . $child['Page']['path']);?>
								</h3>
								<hr class="divider">
								<p class="article-tile-excerpt"><?php echo $this->Text->truncate(strip_tags($child['Page']['content']), 200); ?></p>
							</footer>
						<?php endif; ?>
						
					</article>
				</div>
			
			<?php endforeach; ?>
	
		</div>
	</div>
</main>