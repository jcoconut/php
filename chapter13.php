<html>
	<head>
		<?php require('parts/links.php'); ?>
		<?php
			$chapter = 13;
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
					<h3 class="header">Chapter 13 Application Techniques</h3>
					
					<div class="ui list">
						
						<div class="item">
							<div class="header">Templating System</div>
							A templating system provides a way of separating the code in a web page from the layout
							of that page. In larger projects, templates can be used to allow designers to deal exclu-
							sively with designing web pages and programmers to deal (more or less) exclusively
							with programming. The basic idea of a templating system is that the web page itself
							contains special markers that are replaced with dynamic content. <br>

						</div>

						<div class="item">
							<div class="header">Error Handling</div>
							Error handling is an important part of any real-world application. PHP provides a
							number of mechanisms that you can use to handle errors, both during the development
							process and once your application is in a production environment. <br>
							There are three levels of conditions: notices, warnings, and errors. A notice is a condi-
							tion encountered while executing a script that might be an error, but could also be
							encountered during normal execution (e.g., trying to access a variable that has not been
							set). A warning indicates a nonfatal error condition; typically, warnings are displayed
							when calling a function with invalid arguments. Scripts will continue executing after
							issuing a warning. An error indicates a fatal condition from which the script cannot
							recover. A parse error is a specific kind of error that occurs when a script is syntactically
							incorrect. All errors except parse errors are runtime errors. <hr>
							<em>Error Suppression</em>	<br>
							You can disable error messages for a single expression by putting the error suppression
							operator @ before the expression. <br>
							<code>$value = @(2 / 0);</code><br>
							You can throw an error from within a script with the trigger_error() function: <br>
							<code>trigger_error(message [, type]);</code><br>
							The following code shows how to use an error handler to format and print errors <br>
							<code>
								function displayError($error, $errorString, $filename, $line, $symbols) <br>
								{ <br>
								echo "&lt;p&gt; Error '&lt;b&gt; {$errorString}&lt;/b&gt; ' occurred.&lt;br /&gt; "; <br>
								echo "-- in file '&lt;i&gt; {$filename}&lt;/i&gt; ', line $line.&lt;/p&gt; "; <br>
								} <br>
								set_error_handler('displayError'); <br>
								$value = 4 / 0; // divide by zero error <br>
								&lt;p&gt; Error '&lt;b&gt; Division by zero&lt;/b&gt; ' occurred. <br>
								-- in file '&lt;i&gt; err-2.php&lt;/i&gt; ', line 8.&lt;/p&gt;  <br>


							</code>

						</div>
						<div class="item">
							<div class="header">Performance Tuning</div>
							<em>Benchmarking</em><br>
							If you're using Apache, you can use the Apache benchmarking utility, ab, to do high-
							level performance testing. To use it, run <br>
							<code>
								$ /usr/local/apache/bin/ab -c 10 -n 1000 http://localhost/info.php <br>
							</code>
							<em>Profiling</em><br>
							PHP does not have a built-in profiler, but there are some techniques you can use to
							investigate code that you think has performance issues. One technique is to call the
							microtime() function to get an accurate representation of the amount of time that
							elapses. You can surround the code you're profiling with calls to microtime() and use
							the values returned by microtime() to calculate how long the code took. <br>
							For instance, here's some code you can use to find out just how long it takes to produce
							the phpinfo() output <br>
							<code>
								ob_start(); <br>
								$start = microtime();  <br>
								phpinfo();  <br>
								$end = microtime();  <br>
								ob_end_clean();  <br>
								echo "phpinfo() took " . ($end-$start) . " seconds to run.\n";  <br>

							</code>
							<em>Optimizing Execution Time</em><br>
							Here are some tips for shortening the execution times of your scripts:<br>
							<ul>
							<li>Avoid printf() when echo is all you need.</li>
							<li>Avoid recomputing values inside a loop, as PHP's parser does not remove loop
							invariants. For example, don't do this if the size of $array doesn't change:
							for ($i = 0; $i < count($array); $i++) { /* do something */ }
							Instead, do this:
							$num = count($array);
							for ($i = 0; $i < $num; $i++) { /* do something */ }</li>
							<li>Include only files that you need. Split included files to include only functions that
							you are sure will be used together. Although the code may be a bit more difficult
							to maintain, parsing code you don't use is expensive.</li>
							<li>If you are using a database, use persistent database connections—setting up and
							tearing down database connections can be slow.</li>
							<li>Don't use a regular expression when a simple string-manipulation function will do
							the job. For example, to turn one character into another in a string, use
							str_replace(), not preg_replace().</li>
							</ul>
							<em>Optimizing Memory Requirements</em><br>
							<ul>
							<li>Use numbers instead of strings whenever possible:
							for ($i = "0"; $i < "10"; $i++) // bad <br>
							for ($i = 0; $i < 10; $i++) // good <br>
							</li>
							 
							<li>When you're done with a large string, set the variable holding the string to an empty
							string. This frees the memory to be reused. </li>
							<li>Only include or require files that you need. Use include_once and require_once
							instead of include and require. </li>
							<li>Release MySQL or other database result sets as soon as you are done with them.
							There is no benefit to keeping result sets in memory beyond their use. </li>

							</ul>
						</div>
						<div class="item">
							<div class="header"></div>

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
