<html>
	<head>
		<?php require('parts/links.php'); ?>
		<?php
			$chapter = 9;
		?>
		<title>
			PHP Chapter <?php echo $chapter; ?>
		</title>
		<style>
			em{
				color:red;
			}
			code{
				color:green;
			}
		</style>
	</head>
	<body>

		<div class="ui segment tertiary inverted basic" style="margin:0px;">
			<h2 class="ui header">
			  <i class="home circular blue inverted icon"></i>
			  <div class="content">
			    PHP Testing
			    <div class="sub header">This is Jay's notes,testing of PHP,exercises and on..</div>
			  </div>
			</h2>
		</div>
		<div class="ui segment center aligned basic"  style="margin:0px;">
			Chapters<br>
			<?php require('parts/chapterstab.php'); ?>	
		</div>
		
		
		<div class="ui page grid">
			<div class="sixteen wide column">

				<div class="ui segment">
					<h3 class="header">Chapter 9 Graphics</h3>
					
					<div class="ui list">
						
						<div class="item">
							<div class="header">Embedding an Image in a Page</div>
							To embed a PHP-generated image in an HTML page, pretend that the PHP script that
							generates the image is actually the image. <br>
							<code>
								&lt;html&gt; <br>
								&lt;head&gt; <br>
								&lt;title&gt; <br>Example Page&lt;/title&gt; <br>
								&lt;/head&gt; <br>
								&lt;body&gt; <br>
								This page contains two images.
								&lt;img src="image1.php" alt="Image 1" /&gt; <br>
								&lt;img src="image2.php" alt="Image 2" /&gt; <br>
								&lt;/body&gt; <br>
								&lt;/html&gt; <br>
							</code>
							Instead of referring to real images on your web server, the img tags now refer to the PHP
							scripts that generate and return image data. <br>

						</div>
						
						<div class="item">
							<div class="header">Creating and Drawing Images</div>
							The code works with any version of GD that supports
							the PNG image format : <br>
							<code>
								
								$image = imagecreate(200, 200);  <br>
								$white = imagecolorallocate($image, 0xFF, 0xFF, 0xFF); <br>
								$black = imagecolorallocate($image, 0x00, 0x00, 0x00); <br>
								imagefilledrectangle($image, 50, 50, 150, 150, $black); <br>
								header("Content-Type: image/png"); <br>
								imagepng($image); <br>

							</code>
							<div class="ui center aligned segment basic">
								<p><code>&lt;img&gt; src="black.php"&gt;</code></p>
								<img src="black.php">
							</div>
							<hr>
							You can create a 256-color image with the imagecreate() function, which returns an image handle: <br>
							<code>
								$image = imagecreate(width, height); <br>
							</code>
							All colors used in an image must be allocated with the imagecolorallocate() function.
							The first color allocated becomes the background color for the image <br>
							<code>
								$color = imagecolorallocate(image, red, green, blue); <br>
							</code>	
							Others : <br>
							<code>imagefilledrectangle(image, tlx, tly, brx, bry, color);</code><br>
							The next step is to send a Content-Type header to the browser with the appropriate
							content type for the kind of image being created. Once that is done, we call the appro-
							priate output function. The imagejpeg(), imagegif(), imagepng(), and imagewbmp()
							functions create GIF, JPEG, PNG, and WBMP files from the image, respectively <br>
							<code>
								imagegif(image [, filename ]); <br>
								imagejpeg(image [, filename [, quality ]]); <br>
								imagepng(image [, filename ]); <br>
								imagewbmp(image [, filename ]); <br>
							</code>

						</div>
						<div class="item">
							<div class="header">Basic Drawing Functions</div>
							The most basic function is imagesetpixel(), which sets the color of a specified pixel: <br>
							<code>imagesetpixel(image, x, y, color);</code><br>
							There are two functions for drawing lines, imageline() and imagedashedline():<br>
							<code>
								imageline(image, start_x, start_ y, end_x, end_ y, color); <br>
								imagedashedline(image, start_x, start_ y, end_x, end_ y, color); <br>
							</code>
							There are two functions for drawing rectangles, one that simply draws the outline and
							one that fills the rectangle with the specified color: <br>
							<code>
								imagerectangle(image, tlx, tly, brx, bry, color); <br>
								imagefilledrectangle(image, tlx, tly, brx, bry, color); <br>
							</code>
							You can draw arbitrary polygons with the imagepolygon() and imagefilledpolygon() functions: <br>
							<code>
								imagepolygon(image, points, number, color); <br>
								imagefilledpolygon(image, points, number, color); <br>
							</code>
							The imagearc() function draws an arc (a portion of an ellipse): <br>
							<code>imagearc(image, center_x, center_ y, width, height, start, end, color); </code> <br>
							There are two ways to fill in already-drawn shapes. The imagefill() function performs
							a flood fill, changing the color of the pixels starting at the given location. Any change
							in pixel color marks the limits of the fill. The imagefilltoborder() function lets you
							pass the particular color of the limits of the fill <br>
							<code>
								imagefill(image, x, y, color); <br>
								imagefilltoborder(image, x, y, border_color, color); <br>

							</code>
							The image rotate() function allows you to rotate an image by an arbitrary angle: <br>
							<code>
								imagerotate(image, angle, background_color); <br>
							</code>



						</div>
					</div>	
				</div>
			</div>


		</div>
		<div class="ui segment secondary tertiary center aligned">
					
			<div class="ui icon header black">
				<i class="circular question inverted icon"></i>	&copy; Jay 2014
				<div class="sub header">Have any questions? Contact Me</div>
			</div>
	
		</div>

	
	</body>




</html>
