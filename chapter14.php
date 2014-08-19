<html>
	<head>
		<?php require('parts/links.php'); ?>
		<?php
			$chapter = 14;
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
					<h3 class="header">Chapter 14 PHP on Disparate Platforms</h3>
					
					<div class="ui list">
						
						
						<div class="item">
							<div class="header">Writing Portable Code for Windows and Unix</div>
							One of the main reasons for running PHP on Windows is to develop locally before
							deploying in a production environment. <br>
							Potential problem areas include applications that rely on external libraries, use native
							file I/O and security features, access system devices, fork or spawn threads, commu-
							nicate via sockets, use signals, spawn external executables, or generate platform-
							specific graphical user interfaces. <br>

						</div>
						<div class="item">
							<div class="header">Determining the Platform</div>
							The following code shows how to test for a Windows platform: <br>
							<code>
								if (PHP_OS == 'WIN32' || PHP_OS == 'WINNT') { <br>
								echo "You are on a Windows System"; <br>
								} <br>
								else { <br>
								// some other platform <br>
								echo "You are NOT on a Windows System"; <br>
								} <br>
							</code>
							<em>Here is an example of the output for the php_uname() function as executed on a Windows 7 i5 laptop</em><br>
							<code>
								Windows NT PALADIN-LAPTO 6.1 build 7601 (Windows 7
								Home Premium Edition Service Pack 1) i586
							</code>
						</div>
						<div class="item">
							<div class="header">Handling Paths Across Platforms</div>
							PHP understands the use of either backward or forward slashes on Windows platforms,
							and can even handle paths that mix the use of the two slashes. As of version 4.0.7, PHP
							will also recognize the forward slash when accessing Windows UNC paths
							(i.e., //machine_name/path/to/file). <br>


						</div>
						<div class="item">
							<div class="header">The Server Environment</div>
							The constant superglobal array $_SERVER provides server and execution environment information. <br>

						</div>
						<div class="item">
							<div class="header">Sending Mail</div>
							On Unix systems, you can configure the mail() function to use sendmail or Qmail to
							send messages. When running PHP under Windows, you can use sendmail by installing
							sendmail and setting the sendmail_path in php.ini to point at the executable. It likely is
							more convenient to simply point the Windows version of PHP to an SMTP server that
							will accept you as a known mail client:<br>
							<code>
								[mail function] <br>
								SMTP = mail.example.com ;URL or IP number to known mail server <br>
								sendmail_from = gnat@frii.com <br>
							</code>


						</div>
						<div class="item">
							<div class="header">End-of-Line Handling</div>
							Windows text files have lines that end in "\r\n", whereas Unix text files have lines that
							end in "\n". PHP processes files in binary mode, so no automatic conversion from
							Windows line terminators to the Unix equivalent is performed. <br>

						</div>
						<div class="item">
							<div class="header">End-of-File Handling</div>
							Windows text files end in a Control-Z ("\x1A"), whereas Unix stores file-length infor-
							mation separately from the file’s data. PHP recognizes the EOF character of the plat-
							form on which it is running. The function feof() thus works when reading Windows
							text files. <br>


						</div>
						<div class="item">
							<div class="header">External Commands</div>
							PHP uses the default command shell of Windows for process manipulation. Only ru-
							dimentary Unix shell redirections and pipes are available under Windows (e.g., sepa-
							rate redirection of standard output and standard error is not possible), and the quoting
							rules are entirely different. <br>

						</div>
						<div class="item">
							<div class="header">Common Platform-Specific Extensions</div>
							There are currently well over 80 extensions for PHP covering a wide range of services
							and functionality. Only about half of these are available for both Windows and Unix
							platforms. Only a handful of extensions, such as the COM, .NET, and IIS extensions,
							are specific to Windows. If an extension you use in your scripts is not currently available
							under Windows, you need to either port that extension or convert your scripts to use
							an extension that is available under Windows. <br>


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
