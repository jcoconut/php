<html>
	<head>
		<?php require('parts/links.php'); ?>
		<?php
			$chapter = 15;
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
					<h3 class="header">Chapter 15 Web Services</h3>
					
					<div class="ui list">
						
						
						<div class="item">
							<div class="header">Responses</div>
							In each of the above API endpoints, the HTTP status code is used to provide the result
							of the request. HTTP provides a long list of standard status codes: for example, 201
							“Created” would be returned when creating a resource, and 501 “Not Implemented”
							would be returned when sending a request to an endpoint that doesn’t exist. <br>
							To get a JSON representation of a PHP variable, use json_encode(): <br>
							<code>
								$data = array(1, 2, "three");
								$jsonData = json_encode($data);
								echo $jsonData;
								[1, 2, "three"]
							</code>
							Similarly, if you have a string containing JSON data, you can turn it into a PHP variable
							using json_decode(): <br>
							<code>
								$jsonData = "[1, 2, [3, 4], \"five\"]"; <br>
								$data = json_decode($jsonData); <br>
								print_r($data); <br>
								Array( <br>
								[0] => 1 <br>
								[1] => 2 <br>
								[2] => Array( <br>
								[0] => 3 <br>
								[1] => 4 <br>
								) <br>
								[3] => five <br>
								) <br>
							</code>
							There is no direct translation between PHP objects and JSON objects—what JSON
							calls an “object” is really an associative array. If you need to convert JSON into instances
							of a PHP object class, you must write code to do so based on the format returned by
							the API. <br>

						</div>
						<div class="item">
							<div class="header">Retrieving Resources</div>
							Retrieving information for a resource is a straightforward GET request. <br>
							<code>
								
								$authorId = 'ktatroe'; <br>
								$url = "http://example.com/api/authors/{$authorId}"; <br>
								$ch = curl_init(); <br>
								curl_setopt($ch, CURLOPT_URL, $url); <br>
								$response = curl_exec($ch); <br>
								$resultInfo = curl_getinfo($ch); <br>
								curl_close($ch); <br>
								// decode the JSON and use a Factory to instantiate an Author object <br>
								$authorJson = json_decode($response); <br>
								$author = ResourceFactory::authorFromJson($authorJson); <br>
							</code>
						</div>
						<div class="item">
							<div class="header">Updating Resources</div>
							Updating an existing resource is a bit trickier than retrieving information about a
							resource. In this case, you need to use the PUT verb. As the PUT verb was originally
							intended to handle file uploads, PUT requests require that you stream data to the
							remote service from a file. <br>

						</div>
						<div class="item">
							<div class="header">Creating Resources</div>
							To create a new resource, call the appropriate endpoint with the POST verb. The data
							for the request is put into the typical key-value form for POST requests.

						</div>
						<div class="item">
							<div class="header">Deleting Resources</div>
							Deleting a resource is similarly straightforward. Example 15-6 creates a request, sets
							the verb on that request to 'DELETE' via the curl_setopt() function, and sends it. <br>

							<code>
								$authorId = 'ktatroe'; <br>
								$bookId = 'ProgrammingPHP'; <br>
								$url = "http://example.com/api/authors/{$authorId}/books/{$bookId}"; <br>
								$ch = curl_init(); <br>
								curl_setopt($ch, CURLOPT_URL, $url); <br>
								curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE'); <br>
								$result = curl_exec($ch); <br>
								$resultInfo = curl_getinfo($ch); <br>
								curl_close($ch); <br>

								
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
