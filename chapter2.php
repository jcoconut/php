<html>
	<head>
		<?php require('parts/links.php'); ?>
		<?php
			$chapter = 2;
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
					<h3 class="header">Chapter 2</h3>
					<div class="ui list">
						<div class="item">
							<div class="header">Lexical Structure</div>
							The lexical structure of a programming language is the set of basic rules that governs
							how you write programs in that language. It is the lowest-level syntax of the language
							and specifies such things as what variable names look like, what characters are used
							for comments, and how program statements are separated from each other.

						</div>
						<div class="item">
							<div class="header">Case Sensitivity</div>
							
							The names of user-defined classes and functions, as well as built-in constructs and
							keywords such as echo, while, class, etc., are case-insensitive.<strong> Variables </strong>, on the other hand, are <strong>case-sensitive.</strong> 


						</div>
						<div class="item">
							<div class="header">Statements and Semicolons</div>
							A statement is a collection of PHP code that does something.PHP uses semicolons to separate simple statements. A compound statement that uses
							curly braces to mark a block of code, such as a conditional test or loop, does not need
							a semicolon after a closing brace. Unlike in other languages, in PHP the semicolon
							before the closing brace is not optional. The semicolon, however, is optional before a closing PHP tag:



						</div>
						<div class="item">
							<div class="header">Whitespace and Linebreaks</div>
							In general, whitespace doesn’t matter in a PHP program. You can spread a statement
							across any number of lines, or lump a bunch of statements together on a single line.
						</div>
						<div class="item">
							<div class="header">Comments</div>
							Comments give information to people who read your code, but they are ignored by
							PHP at execution time.

						</div>
						<div class="item">
							<div class="header">Literals</div>
							A literal is a data value that appears directly in a program.

						</div>
						<div class="item">
							<div class="header">Identifiers</div>
							An identifier is simply a name. In PHP, identifiers are used to name variables, functions,
							constants, and classes. 
							<div class="subheader"><em>Variable names</em></div>
							Variable names always begin with a dollar sign ($) and are case-sensitive.

							<div class="subheader"><em>Function names</em></div>
							Function names are not case-sensitive 

							<div class="subheader"><em>Class names</em></div>
							Class names follow the standard rules for PHP identifiers and are also not case-sensitive.

							<div class="subheader"><em>Constants</em></div>
							A constant is an identifier for a simple value; only scalar values—Boolean, integer,
							double, and string—can be constants. 

							
						</div>
						<div class="item">
							<div class="header">Keywords</div>
							a word set aside by the language for its core function-ality

						</div>
						<div class="item">
							<div class="header">Data Types</div>
							PHP provides eight types of values, or data types. Four are scalar (single-value) types: integers, floating-point numbers, strings, and Booleans. Two are compound (collec-tion) types: arrays and objects. The remaining two are special types: resource and NULL. 

							<div class="subheader"><em>Integers</em></div>
							Integers are whole numbers, such as 1, 12, and 256.
							<div class="subheader"><em>Floating-Point Numbers</em></div>
							represent numeric values with decimal digits. 

							<div class="subheader"><em>Strings</em></div>
							a sequence of characters of arbitrary length. 

							<div class="subheader"><em>Booleans</em></div>
							A Boolean value represents a “truth value”—it says whether something is true or not.

							<div class="subheader"><em>Arrays</em></div>
							An array holds a group of values, which you can identify by position or some identifying name (a string), called an associative index:

							<div class="subheader"><em>Objects</em></div>
							 OOP promotes clean modular design, simplifies debugging and maintenance, and assists with code reuse. Classes are the building blocks of object-oriented design.
							 A class is a definition of a structure that contains properties (variables) and methods (functions). 


							<div class="subheader"><em>Resources</em></div>
							<div class="subheader"><em>Callbacks</em></div>
							are functions or object methods used by some functions, such as
							call_user_func(). 

							<div class="subheader"><em>NULL</em></div>
							 represents a variable that has no value 

						</div>
						<div class="item">
							<div class="header">Variables</div>
							You can reference the value of a variable whose name is stored in another variable by
							prefacing the variable reference with an additional dollar sign ($).
							In PHP, references are how you create variable aliases. To make $black an alias for the variable $white, use: $black =& $white;The<em> scope</em> of a variable, which is controlled by the location of the variable’s declaration,
							determines those parts of the program that can access it. 

							<div class="subheader"><em>Local scope</em></div>
							A variable declared in a function is local to that function. 
							<div class="subheader"><em>Global scope</em></div>
							Variables declared outside a function are global.
							<div class="subheader"><em>Static variables</em></div>
							A static variable retains its value between calls to a function but is visible only within that function. You declare a variable static with the static keyword.

							<div class="subheader"><em>Function parameters</em></div>
							Function parameters are local, meaning that they are available only inside their func-tions. 

						</div>
						<div class="item">
							<div class="header">Garbage Collection</div>
							
						</div>
						<div class="item">
							<div class="header">Expressions and Operators</div>
							An expression is a bit of PHP that can be evaluated to produce a value. The simplest
							expressions are literal values and variables. A literal value evaluates to itself, while a
							variable evaluates to the value stored in the variable.  An operator takes some values (the operands) and does something (for instance, adds
							them together). 
							

						</div>
						<div class="item">
							<div class="header">Implicit Casting</div>
							The conversion of a value from one type to another is called <strong>casting</strong>. This kind of implicit casting is called <strong>type juggling</strong> in PHP. 

						</div>
						<div class="item">
							<div class="header"><u>Bitwise Operators</u></div>
							The bitwise operators act on the binary representation of their operands. Each operand
							is first turned into a binary representation of the value, as described in the bitwise
							negation operator entry in the following list.


						</div>
						<div class="item">
							<div class="header">Logical Operators</div>
							Logical operators provide ways for you to build complex logical expressions. Logical
							operators treat their operands as Boolean values and return a Boolean value. 

						</div>
						<div class="item">
							<div class="header">Casting Operators</div>
							 The casting operators, (int), (float), (string), (bool),
							(array), (object), and (unset), allow you to force a value into a particular type. To use
							a casting operator, put the operator to the left of the operand. 


						</div>
						<div class="item">
							<div class="header">Flow-Control Statements</div>
							
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
