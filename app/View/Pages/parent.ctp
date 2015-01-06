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
			
			<div class="column-1-3 column-medium-1-2 gutter-bottom">
				<article class="article-tile">
					<header class="article-tile-header">
						<a class="media media-4-3" href="#">
							<img src="http://placehold.it/800x600">
						</a>
					</header>
					<footer class="article-tile-footer">
						<h3 class="article-tile-title"><a href="#">Turret</a></h3>
						<hr class="divider">
						<p class="article-tile-excerpt">A responsive frontend framework build with LESS to normalize styles for default HTML elements.</p>
					</footer>
				</article>
			</div>
			
			<div class="column-1-3 column-medium-1-2 gutter-bottom">
				<article class="article-tile">
					<header class="article-tile-header">
						<a class="media media-4-3" href="#">
							<img src="http://placehold.it/800x600">
						</a>
					</header>
					<footer class="article-tile-footer">
						<h3 class="article-tile-title"><a href="#">Sprocket</a></h3>
						<hr class="divider">
						<p class="article-tile-excerpt">A responsive frontend framework build with LESS to normalize styles for default HTML elements.</p>
					</footer>
				</article>
			</div>
			
			<div class="column-1-3 column-medium-1-2 gutter-bottom">
				<article class="article-tile">
					<header class="article-tile-header">
						<a class="media media-4-3" href="#">
							<img src="http://placehold.it/800x600">
						</a>
					</header>
					<footer class="article-tile-footer">
						<h3 class="article-tile-title"><a href="#">Cockpit</a></h3>
						<hr class="divider">
						<p class="article-tile-excerpt">A responsive frontend framework build with LESS to normalize styles for default HTML elements.</p>
					</footer>
				</article>
			</div>
			
			<div class="column-1-3 column-medium-1-2 gutter-bottom">
				<article class="article-tile">
					<header class="article-tile-header">
						<a class="media media-4-3" href="#">
							<img src="http://placehold.it/800x600">
						</a>
					</header>
					<footer class="article-tile-footer">
						<h3 class="article-tile-title"><a href="#">Bullet</a></h3>
						<hr class="divider">
						<p class="article-tile-excerpt">A responsive frontend framework build with LESS to normalize styles for default HTML elements.</p>
					</footer>
				</article>
			</div>
			
			<div class="column-1-3 column-medium-1-2 gutter-bottom">
				<article class="article-tile">
					<header class="article-tile-header">
						<a class="media media-4-3" href="#">
							<img src="http://placehold.it/800x600">
						</a>
					</header>
					<footer class="article-tile-footer">
						<h3 class="article-tile-title"><a href="#">Map Icons</a></h3>
						<hr class="divider">
						<p class="article-tile-excerpt">A responsive frontend framework build with LESS to normalize styles for default HTML elements.</p>
					</footer>
				</article>
			</div>
			
			<div class="column-1-3 column-medium-1-2 gutter-bottom">
				<article class="article-tile">
					<header class="article-tile-header">
						<a class="media media-4-3" href="#">
							<img src="http://placehold.it/800x600">
						</a>
					</header>
					<footer class="article-tile-footer">
						<h3 class="article-tile-title"><a href="#">Flatstrap</a></h3>
						<hr class="divider">
						<p class="article-tile-excerpt">A responsive frontend framework build with LESS to normalize styles for default HTML elements.</p>
					</footer>
				</article>
			</div>
			
			<div class="column-1-3 column-medium-1-2 gutter-bottom">
				<article class="article-tile">
					<header class="article-tile-header">
						<a class="media media-4-3" href="#">
							<img src="http://placehold.it/800x600">
						</a>
					</header>
					<footer class="article-tile-footer">
						<h3 class="article-tile-title"><a href="#">Dism</a></h3>
						<hr class="divider">
						<p class="article-tile-excerpt">Founded in 2009, Dism is a local Brisbane business focused on creating design solutions in print and digital media.</p>
					</footer>
				</article>
			</div>
			
			<div class="column-1-3 column-medium-1-2 gutter-bottom">
				<article class="article-tile">
					<header class="article-tile-header">
						<a class="media media-4-3" href="#">
							<img src="http://placehold.it/800x600">
						</a>
					</header>
					<footer class="article-tile-footer">
						<h3 class="article-tile-title"><a href="#">Pedal</a></h3>
						<hr class="divider">
						<p class="article-tile-excerpt">Pedal is an iPhone application that allows users to see CityCycle locations in Brisbane and provide users with the ability to see parks and bikes available at each station, favourite CityCycle stations, and plan journeys.</p>
					</footer>
				</article>
			</div>
			
			<div class="column-1-3 column-medium-1-2 gutter-bottom">
				<article class="article-tile">
					<header class="article-tile-header">
						<a class="media media-4-3" href="#">
							<img src="http://placehold.it/800x600">
						</a>
					</header>
					<footer class="article-tile-footer">
						<h3 class="article-tile-title"><a href="#">I Heart BNE</a></h3>
						<hr class="divider">
						<p class="article-tile-excerpt">I Heart BNE is a web and mobile application developed using Brisbane City Council data released as part of the Hack Brisbane competition and provides users with locations, landmarks, and event information in a simple and intuitive form.</p>
					</footer>
				</article>
			</div>

		</div>
	</div>
</main>