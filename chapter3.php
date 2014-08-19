<html>
	<head>
		<?php require('parts/links.php'); ?>
		<?php
			$chapter = 3;
		?>
		<title>
			PHP Chapter <?php echo $chapter; ?>
		</title>
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
					<h3 class="header">Chapter 3</h3>
					<div class="ui list">
						<div class="item">
							<div class="header">Functions</div>
							A function is a named block of code that performs a specific task, possibly acting upon
							a set of values given to it, or parameters, and possibly returning a single value. 

						</div>
						<div class="item">
							<div class="header">Variable Scope</div>

							If you don’t use functions, any variable you create can be used anywhere in a page.
							With functions, this is not always true. Functions keep their own sets of variables that
							are distinct from those of the page and of other functions.

						</div>
						<div class="item">
							<div class="header">Global Variables</div>
							If you want a variable in the global scope to be accessible from within a function, you
							can use the global keyword. 

						</div>
						<div class="item">
							<div class="header">Static Variable</div>
							A static variable retains its
							value between all calls to the function and is initialized during a script’s execution only
							the first time the function is called.

						</div>
						<div class="item">
							<div class="header">Passing Parameters by Reference</div>
							Passing by reference allows you to override the normal scoping rules and give a function
							direct access to a variable. To be passed by reference, the argument must be a variable;
							you indicate that a particular argument of a function will be passed by reference by
							preceding the variable name in the parameter list with an ampersand (&).

						</div>
						<div class="item">
							<div class="header">Return Value</div>
							
							PHP functions can return only a single value with the return keyword:
							If no return value is provided by a function, the function returns NULL instead.

						</div>
						<div class="item">
							<div class="header"></div>
						</div>
						<div class="item">
							<div class="header"></div>
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
