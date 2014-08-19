<html>
	<head>
		<?php require('parts/links.php'); ?>
		<?php
			$chapter = 17;
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
					<h3 class="header">Chapter 17 Dates and Times</h3>
					
					<div class="ui list">
						<p>There are a total of four interrelated classes for handling dates and times. The Date
						Time class handles dates themselves; the DateTimeZone class handles time zones; the
						DateTimeInterval class handles spans of time between two DateTime instances; and
						finally, the DatePeriod class handles traversal over regular intervals of dates and times. </p>

						
						<hr>

						<p>The constructor of the DateTime class is naturally where it all starts. This method takes
						two parameters, the timestamp and the time zone. </p>
						<code>
							$dt = new DateTime("2010-02-12 16:42:33", new DateTimeZone("America/Halifax")); <br>
						</code>
						<p>To pick up the current server value </p>
						<code>
							$tz = ini_get('date.timezone'); <br>
							$dtz = new DateTimeZone($tz); <br>
							$dt = new DateTime("2012-06-16 16:42:33", $dtz); <br>
						</code>
						<p>To get the difference between two DateTime instances, use:</p>
						<code>
							$tz = ini_get('date.timezone'); <br>
							$dtz = new DateTimeZone($tz); <br>
							$past = new DateTime("2009-02-12 16:42:33", $dtz); <br>
							$current = new DateTime("now", $dtz); <br>
							// creates a new instance of DateInterval <br>
							$diff = $past->diff($current); <br>
							$pastString = $past->format("Y-m-d"); <br>
							$currentString = $current->format("Y-m-d"); <br>
							$diffString = $diff->format("%yy %mm, %dd"); <br>
							echo "Difference between {$pastString} and {$currentString} is {$diffString}"; <br>
							<em>Difference between 2009-02-12 and 2012-07-09 is 3y 4m 26d</em> <br>

						</code>
						<p>If you want to set a time zone other than the server’s, you must pass that value to the
						constructor of the DateTimeZone object. his example sets the time zone for Rome, Italy,
						and displays the information with the getLocation() method
						</p>
						<code>
						$dtz = new DateTimeZone("Europe/Rome"); <br>
							echo "Time Zone: " . $dtz->getName() . "&lt;br/&gt;"; <br>
							foreach ($dtz->getLocation() as $key => $value) { <br>
							echo "{$key} {$value}&lt;br/&gt;"; <br>
							} <br>
							Time Zone: Europe/Rome <br>
							country_code IT <br>
							latitude 41.9 <br>
							longitude 12.48333 <br>
							comments <br>

						</code>

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
