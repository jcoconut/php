<html>
	<head>
		<?php require('parts/links.php'); ?>
		<?php
			$chapter = 7;
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
					<h3 class="header">Chapter 7 HTTP Basics</h3>
					<div class="ui list">
						
						<div class="item">
							<div class="header">Variables</div>
							<em>$_COOKIE</em><br>
							Contains any cookie values passed as part of the request, where the keys of the
							array are the names of the cookies<br>
							<em>$_GET</em><br>
							Contains any parameters that are part of a GET request, where the keys of the array
							are the names of the form parameters<br>
							<em>$_POST</em><br>
							Contains any parameters that are part of a POST request, where the keys of the
							array are the names of the form parameters<br>
							<em>$_FILES</em><br>
							Contains information about any uploaded files<br>
							<em>$_SERVER</em><br>
							Contains useful information about the web server, as described in the next section<br>
							<em>$_ENV</em><br>
							Contains the values of any environment variables, where the keys of the array are
							the names of the environment variables<br>

						</div>
						<div class="item">
							<div class="header">Server Information</div>
							The <em>$_SERVER</em> array contains a lot of useful information from the web server. Much of
							this information comes from the environment variables required in the CGI specifica-
							tion. <br>


						</div>
						<div class="item">
							<div class="header">Form Methods</div>
							A <em>GET</em> request encodes the form parameters in the URL in what is called a query
							string; the text that follows the ? is the query string <br>
							A <em>POST</em> request passes the form parameters in the body of the HTTP request, leaving
							the URL untouched. <br>
							<hr>
							The type of method that was used to request a PHP page is available through
							$_SERVER['REQUEST_METHOD']. For example: <br>
							<code>
								if ($_SERVER['REQUEST_METHOD'] == 'GET') { <br>
								// handle a GET request <br>
								} <br>
								else { <br>
								die("You may only GET this page."); <br>
								} <br>
							</code>


						</div>
						<div class="item">
							<div class="header">File Uploads</div>
							To handle file uploads (supported in most modern browsers), use the $_FILES array.
							Using the various authentication and file upload functions, you can control who is
							allowed to upload files and what to do with those files once they’re on your system. <br>
							<div class="inverted secondary center aligned ui segment">
								
								<?php if(file_exists("upload/image")): ?>
								<p>Your uploaded Image : </p>
								<img src="upload/image" style="max-width:50%;">
								<?php else: ?>
								<p>You dont have an uploaded image!</p>
								<?php endif; ?>
								<form id="formz" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
									<div class="ui input segment secondary orange inverted">
										<input type="file" name="file" style="border:0px;background-color:transparent;color:white;">
									</div>
									<br>
									<div onClick="document.getElementById('formz').submit();" class="green ui circular icon animated button">
									  <div class="visible content"><i class="right large upload icon"></i>&nbsp;</div>
									  <div class="hidden content">
									    <small>upload</small>
									  </div>
									</div>
									
								</form>
								<?php
								if(isset($_FILES["file"]["name"])){


								$allowedExts = array("gif", "jpeg", "jpg", "png");
								$temp = explode(".", $_FILES["file"]["name"]);
								$extension = end($temp);




								if ((($_FILES["file"]["type"] == "image/gif")
								|| ($_FILES["file"]["type"] == "image/jpeg")
								|| ($_FILES["file"]["type"] == "image/jpg")
								|| ($_FILES["file"]["type"] == "image/pjpeg")
								|| ($_FILES["file"]["type"] == "image/x-png")
								|| ($_FILES["file"]["type"] == "image/png"))

								&& in_array($extension, $allowedExts)) {
								  if ($_FILES["file"]["error"] > 0) {
								    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
								  } else {
								    // echo "Upload: " . $_FILES["file"]["name"] . "<br>";
								    // echo "Type: " . $_FILES["file"]["type"] . "<br>";
								    // echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
								    // echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
								    if (file_exists("upload/" . $_FILES["file"]["name"])) {
								      echo $_FILES["file"]["name"] . " already exists. ";
								    } else {
								      move_uploaded_file($_FILES["file"]["tmp_name"],
								      "upload/" ."image");
								     // echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
								    	echo "Image Uploaded!";
								    	echo "<meta http-equiv='refresh' content='0'>";
								    }
								  }
								} else {
								  echo "Invalid file";
								}
								}
								?>
								
							</div>
							
						</div>

						<div class="item">
							<div class="header">Different Content Types</div>
							The Content-Type header identifies the type of document being returned. Ordinarily
							this is "text/html", indicating an HTML document, but there are other useful docu-
							ment types. For example, "text/plain" forces the browser to treat the page as plain
							text. This type is like an automatic “view source,” and it is useful when debugging. <br>

						</div>
						<div class="item">
							<div class="header">Redirections</div>
							To send the browser to a new URL, known as a redirection, you set the Location header.<br>
							<code>
								header("Location: http://www.example.com/elsewhere.html"); <br>
								exit(); <br>

							</code>
							When you provide a partial URL (e.g., /elsewhere.html), the web server handles this
							redirection internally. This is only rarely useful, as the browser generally won’t learn
							that it isn’t getting the page it requested. <br>

						</div>

						<div class="item">
							<div class="header">Expiration</div>
							To set the expiration time of a document, use the Expires header: <br>
							<code>
								header("Expires: Fri, 18 Jan 2006 05:30:00 GMT");<br>
							</code>
							To expire a document three hours from the time the page was generated, use time()
							and gmstrftime() to generate the expiration date string:<br>
							<code>
								$now = time(); <br>
								$then = gmstrftime("%a, %d %b %Y %H:%M:%S GMT", $now + 60 * 60 * 3); <br>
								header("Expires: {$then}"); <br>
							</code>
							To mark a document as expired, use the current time or a time in the past:<br><br>
							This is the best way to prevent a browser or proxy cache from storing your document<br>
							header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); <br>
							header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); <br>
							header("Cache-Control: no-store, no-cache, must-revalidate"); <br>
							header("Cache-Control: post-check=0, pre-check=0", false); <br>
							header("Pragma: no-cache");


						</div>
						<div class="item">
							<div class="header">Cookies</div>
							A cookie is basically a string that contains several fields. A server can send one or more
							cookies to a browser in the headers of a response. <br>
							<em>Use the setcookie() function to send a cookie to the browser</em>
							<code>setcookie(name [, value [, expire [, path [, domain [, secure ]]]]]);<br></code>

						</div>
						<div class="item">
							<div class="header">Sessions</div>
							Each first-time visitor is issued a unique session ID. By default, the session ID is stored
							in a cookie called PHPSESSID. You can register a variable with the session by passing the name of the variable to the
							$_SESSION[] array. <br>
							<code>
								session_start(); <br>
								$_SESSION['hits'] = $_SESSION['hits'] + 1; <br>
								echo "This page has been viewed {$_SESSION['hits']} times."; <br>

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
