<html>
	<head>
		<?php require('parts/links.php'); ?>
		

		<title>
			PHP
		</title>
	</head>
	<body>

		<?php
			$chapter = 1;
			//$db =  mysql_connect("localhost", "root", "klabklab", "phptest");
			$con = mysql_connect("localhost", "root", "klabklab");
			if (!$con){
				die('Could not connect: ' . mysql_error());
			}
			$db_selected = mysql_select_db("phptest",$con);
			$sql = mysql_query("SELECT * FROM persons");
			$persons = array();
			while($cont = mysql_fetch_array($sql,MYSQL_ASSOC)){
			array_push($persons, $cont);
			}
			mysql_close($con);
			
		?>



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
		<?php if (isset($_POST['fname']) && isset($_POST['lname'])): ?>
			<div class="ui basic segment animating transition flash center aligned">
			<?php echo "Welcome , ".$_POST['fname']." ".$_POST['lname']."!"; ?>
		<?php else: ?>
			<div class="basic ui segment center aligned">
			Who are you? <br/>
			<small>
				<em>type in your name in the form below</em>
			</small>
		<?php endif; ?>
		</div>
		<div class="ui horizontal divider">
			<i class="circular inverted list icon"></i>
		</div>
		<div class="ui page grid">
			<div class="eight wide column">

				<div class="ui segment">
					<h3 class="header">What does PHP do?</h3>
					<div class="ui list">
						<div class="item">
							<div class="header">Server-side scripting</div>
							PHP was originally designed to create dynamic web content, and it is still best
							suited for that task. To generate HTML, you need the PHP parser and a web server
							through which to send the coded documents. PHP has also become popular for
							generating XML documents, graphics, Flash animations, PDF files, and so much
							more.
						</div>
						<div class="item">
							<div class="header">Command-line scripting</div>
							PHP can run scripts from the command line, much like Perl, awk, or the Unix shell.
							You might use the command-line scripts for system administration tasks, such as
							backup and log parsing; even some CRON job type scripts can be done this way
							(nonvisual PHP tasks).
						</div>
						<div class="item">
							<div class="header">Client-side GUI applications</div>
							Using PHP-GTK, you can write full-blown, cross-platform GUI applications in
							PHP.
						</div>

					</div>
					
				</div>
			</div>


			<div class="eight wide column">
				
				<form class="ui segment secondary inverted form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					<div class="ui info message">
						<div class="header">We had some issues</div>
						<ul class="list">
						<li>Please enter your first name</li>
						<li>Please enter your last name</li>
						</ul>
					</div>
					<div class="two fields">
						<div class="field">
							<label>First Name</label>
							<input placeholder="First Name" type="text" name="fname" value="<?php if(isset($_POST['fname'])) echo $_POST['fname']?>">
						</div>
						<div class="field">
							<label>Last Name</label>
							<input placeholder="Last Name" type="text" name="lname" value="<?php if(isset($_POST['lname'])) echo $_POST['lname']?>">
						</div>
					</div>
					<input type="submit" class="ui tiny submit button" value="Submit">
				</form>
				
				<table class="ui table segment">
				<thead>
					<th>ID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Age</th>
				</thead>
				<tbody>
					<?php foreach($persons as $eachperson): ?>
					<tr>
						<td><?php echo $eachperson['id']; ?></td>
						<td><?php echo $eachperson['fname']; ?></td>
						<td><?php echo $eachperson['lname']; ?></td>
						<td><?php echo $eachperson['age']; ?></td>
					</tr>
					<?php endforeach; ?>
				</table>
				<form action="db" method="post">
					<input type="hidden" name="add">
					<div class="ui left icon mini input left floated">
						<input type="text" name="input_fname" placeholder="First Name">
						<i class="user icon"></i>
					</div>
					<div class="ui mini left icon input left floated">
						<input type="text" name="input_lname" placeholder="Last Name">
						<i class="user icon"></i>
					</div>

					<input type="submit" onclick="alert('HOY! tama na pag add!');" value="Add Human" class="left floated ui mini green button">
				</form>
				<form action="db" method="post">
					<input type="hidden" name="delete">

					<input type="submit" class="ui button mini red" value="Delete Last">
				</form>
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
