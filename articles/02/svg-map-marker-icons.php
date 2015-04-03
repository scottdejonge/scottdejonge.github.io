<?php include('../../includes/header.php'); ?>

<main role="main">
	<h1><sup>№ 2</sup>SVG Map Marker Icons</h1>
	<time datetime="2013-06-26">July 26th 2013</time>
	<hr>
	<p>Google Maps API V3 now allows you to draw custom map markers in SVG format. To draw a vector map marker pass a <a href="https://developers.google.com/maps/documentation/javascript/overlays#Symbols">symbol</a> object literal with the desired paths to the marker’s <a href="https://developers.google.com/maps/documentation/javascript/overlays#Icons ">icon</a> property.</p>
	<p>Google Maps API has a few predetermined shapes:</p>

	<pre><code><?php include('types.txt'); ?></code></pre>

	<p>However, if you are looking to draw a custom SVG shape to the map marker object you can using&nbsp;<a href="http://www.w3.org/TR/SVG/paths.html#PathData">SVG path notation</a>.</p>

	<h3>Example</h3>

	<img src="marker.png">

	<p>Using Abobe Illustrator you can Save a vector object in SVG format, and in the next window click “Show SVG Code”:</p>

	<img src="dialogue.png">

	<p>A text window will open with the SVG HTML object code, form here you can see the points needed to draw an SVG object using&nbsp;<a href="http://www.w3.org/TR/SVG/paths.html#PathData">SVG path notation</a>.</p>

	<p>The next step is to clean up the path points and implement the object as a Google Map Marker Object, the paths needed to draw the chosen shape are as follows:</p>

	<pre><code>M 100 0 L 0 0 L 0 100 L 35 100 L 50 120 L 65 100 L 100 100 Z</code></pre>

	<p>These paths are then added to the “icon” property within the Marker Object with Fill and Stroke colours assigned</p>

	<pre><code><?php include('marker.js'); ?></code></pre>

	<p>Here is an example of the final project in a Google Map:</p>
	<img src="map.png">
</main>

<?php include('../../includes/footer.php'); ?>