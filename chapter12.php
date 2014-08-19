<html>
	<head>
		<?php require('parts/links.php'); ?>
		<?php
			$chapter = 12;
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
					<h3 class="header">Chapter 12 Security</h3>
					
					<div class="ui list">
						PHP is a flexible language with hooks into just about every API offered on the machines
						on which it runs. Because it was designed to be a forms-processing language for HTML
						pages, PHP makes it easy to use form data sent to a script. Convenience is a double-
						edged sword, however. The very features that allow you to quickly write programs in
						PHP can open doors for those who would break into your systems. <br>

						<div class="item">
							<div class="header">Filter Input</div>
							There are a few best practices regarding the filtering process: <br>
							<ul>
							<li>Use a whitelist approach. This means you err on the side of caution and assume
							data to be invalid unless you can prove it to be valid.</li>
							<li>Never correct invalid data. History has proven that attempts to correct invalid data
							often result in security vulnerabilities due to errors. </li>
							<li>Use a naming convention to help distinguish between filtered and tainted data.
							Filtering is useless if you can't reliably determine whether something has been
							filtered.</li>
							</ul>

						</div>
						<div class="item">
							<div class="header">Cross-Site Scripting</div>
							Cross-site scripting (XSS) has become the most common web application security vul-
							nerability, and with the rising popularity of Ajax technologies, XSS attacks are likely to
							become more advanced and to occur more frequently.<br>
							$_POST is obviously neither filtered nor escaped, but it demonstrates the vulnerability<br>
							In order to prevent XSS, you simply need to properly escape your output for the output context <br>
							<code>
								$html = array( <br>
								'username' => htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8'), <br>
								); <br>
								echo $html['username']; <br>
							</code>



						</div>
						<div class="item">
							<div class="header">SQL Injection</div>
							The second most common web application vulnerability is SQL injection, an attack
							very similar to XSS. The difference is that SQL injection vulnerabilities exist wherever
							you use un-escaped data in an SQL query. (If these names were more consistent, XSS
							would probably be called HTML injection.) <br>


						</div>
						<div class="item">
							<div class="header">Escape Output</div>
							Escaping is a technique that preserves data as it enters another context. PHP is fre-
							quently used as a bridge between disparate data sources, and when you send data to a
							remote source, it's your responsibility to prepare it properly so that it's not misinter-
							preted. <br>

						</div>
						<div class="item">
							<div class="header">Filenames</div>
							<em>Check for relative paths</em><br>
							When you need to allow the user to specify a filename in your application, you can use
							a combination of the realpath() and basename() functions to ensure that the filename
							is what it ought to be. The realpath() function resolves special markers such as .
							and ... After a call to realpath(), the resulting path is a full path on which you can
							then use basename(). The basename() function returns just the filename portion of the
							path. <br>

						</div>
						<div class="item">
							<div class="header">Session Fixation</div>
							Session fixation is any approach that causes a victim to use a session identifier chosen
							by an attacker. The simplest example is a link with an embedded session identifier <br>
							<code>
								&lt;a href="http://host/login.php?PHPSESSID=1234"&gt;Log In&lt;/a&gt; <br>

							</code>

						</div>
						<div class="item">
							<div class="header">File Access</div>
							<em>Restrict Filesystem Access to a Specific Directory</em><br>
							You can set the open_basedir option to restrict access from your PHP scripts to a specific
							directory. If open_basedir is set in your php.ini, PHP limits filesystem and I/O functions
							so that they can operate only within that directory or any of its subdirectories. <br>
							<p>Get it right the first time. Do not create a file and then change its permissions. This creates a race condition,
							where a lucky user can open the file once it's created but before it's locked down.
							Instead, use the umask() function to strip off unnecessary permissions. </p>
							<p> Don't Use Files . Because all scripts running on a machine run as the same user, a file that one script
							creates can be read by another, regardless of which user wrote the script. </p>
							<p> Session Files . With PHP's built-in session support, session information is stored in files. Each file is
							named /tmp/sess_id, where id is the name of the session and is owned by the web
							server user ID, usually nobody. </p>
							<p> Concealing PHP Libraries . To prevent
							this from happening to you, all you need to do is store code libraries and data outside
							the server's document root.If you must store these auxiliary files in your document root, you should configure the
							web server to deny requests for those files. </p>

						</div>
						<div class="item">
							<div class="header">Shell Commands</div>
							Be very wary of using the exec(), system(), passthru(), and popen() functions and the
							backtick (`) operator in your code. The shell is a problem because it recognizes special
							characters (e.g., semicolons to separate commands). <br>
							<code>
								system("ls {$directory}");<br>
							</code>
							If the user passes the value "/tmp;cat /etc/passwd" as the $directory parameter, your
							password file is displayed because system() executes the following command: <br>
							<code>
								ls /tmp;cat /etc/passwd <br>
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
