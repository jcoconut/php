<html>
	<head>
		<?php require('parts/links.php'); ?>
		<?php
			$chapter = 16;
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
					<h3 class="header">Chapter 16 Debugging PHP</h3>
					
					<div class="ui list">
						
						
						<div class="item">
							<div class="header">The Development Environment</div>
							The development environment is a place where the raw code is created without fear of
							server crashes or peer ridicule. This needs to be a place where concepts and theories
							are proven or disproven; where code can be created experimentally. Therefore, the
							error-reporting environmental feedback should be as verbose as possible. All error re-
							porting should be logged and at the same time also sent to the output device (the
							browser). All warnings should be as sensitive and descriptive as possible. <br>


						</div>

						<div class="item">
							<div class="header">The Staging Environment</div>
							The staging area is a place that should mimic the production environment as closely as
							possible. Although this is sometimes hard to achieve, the more closely you can mimic
							the production environment, the better it will be. You will be able to see how your code
							reacts in a protected area, but one that simulates the real production environment at
							the same time. The staging environment can often be a place where the end user or
							client can test out new features or functionality, giving feedback and stress testing code
							without fear of affecting production code. <br>

						</div>
						<div class="item">
							<div class="header">The Production Environment</div>
							The production environment, from an error-reporting perspective, needs to be as
							tightly controlled as possible. You want to fully control what the end user sees and
							experiences. Things like SQL failures and code syntax warnings should never be seen
							by the client, if at all possible. <br>

						</div>

						<div class="item">
							<div class="header">php.ini Settings</div>
							<em>display_errors </em><br>
							An on-off toggle that controls the display of any errors encountered by PHP.<br>
							<em>error_reporting</em><br>
							This is a setting of predefined constants that will report to the error log and/or the
							web browser any errors that PHP encounters. <br>
							<em>error_log</em><br>
							The path to the location of the error log. <br>
							<em>variables_order</em><br>
							Sets the order of precedence that the superglobal arrays are loaded with information. <br> 
							<em>request_order</em><br>
							Describes the order in which PHP registers GET, POST, and Cookie variables into
							the $_REQUEST array. <br>
							The<em> error_reporting </em>function allows for the overriding of the level of reported errors,
							and the <em>ini_set</em> function allows for the changing of php.ini settings. <br>


						</div>
						<div class="item">
							<div class="header">Manual Debugging</div>
							As was mentioned earlier, once you get a few good years of development time under
							your belt, you should be able to get at least 75% of your debugging done on a purely
							visual basis. <br>

						</div>
						<div class="item">
							<div class="header">Error Log</div>
							You will find many helpful descriptions in the error logfile. As mentioned above, you
							should be able to locate the file under the web server’s installation folder in a folder
							called logs. 

						</div>
						<div class="item">
							<div class="header">IDE Debugging</div>
							For more complex debugging issues, you would be best served to use a debugger that
							can be found in a good IDE (Integrated Development Environment). <br>

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
