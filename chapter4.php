<html>
	<head>
		<?php require('parts/links.php'); ?>
		<?php
			$chapter = 4;
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
					<h3 class="header">Chapter 4</h3>
					<div class="ui list">
						<div class="item">
							<div class="header">Strings</div>
							Sequence of characters
						</div>
						<div class="item">
							<div class="header">Variable Interpolation</div>
							When you define a string literal using double quotes or a heredoc, the string is subject
							to variable interpolation. Interpolation is the process of replacing variable names in the
							string with the values of those variables.

						</div>
						<div class="item">
							<div class="header">Single-Quoted Strings</div>
							Single-quoted strings do not interpolate variables. Thus, the variable name in the fol-
							lowing string is not expanded because the string literal in which it occurs is single-
							quoted:
							<br>
							<?php $sample = <<<sample
							&#36;name = 'Fred';<br>
							&#36;str = 'Hello, &#36;name'; // single-quoted<br>
							echo &#36;str;<br>
							Hello, &#36;name<br>
sample;
							
							?>
							<code><?php echo $sample; ?></code>
						</div>
						<div class="item">
							<div class="header">Double-Quoted Strings</div>
							Double-quoted strings interpolate variables and expand the many PHP escape sequences. 

						</div>
						<div class="item">
							<div class="header">Printing Strings</div>
							There are four ways to send output to the browser. The echo construct lets you print
							many values at once, while print() prints only one value. The printf() function builds
							a formatted string by inserting values into a template. The print_r() function is useful
							for debugging
							<div class="subheader">Echo</div>
							To put a string into the HTML of a PHP-generated page, use echo. 
							<div class="subheader">print()</div>
							The print() construct sends one value (its argument) to the browser

							<div class="subheader">printf()</div>
							The printf() function outputs a string built by substituting values into a template (the
							format string). 

						</div>
						<div class="item">
							<div class="header">print_r() and var_dump()</div>
							Using print_r() on an array moves the internal iterator to the position of the last element in the array.
							When you print_r() an object, you see the word Object, followed by the initialized
							properties of the object displayed as an array

						</div>

						<div class="item">
							<div class="header">Accessing Individual Characters</div>
							The strlen() function returns the number of characters in a string

						</div>
						<div class="item">
							<div class="header">Removing Whitespace</div>
							You can remove leading or trailing whitespace with the trim(), ltrim(), and rtrim() functions

						</div>
						<div class="item">
							<div class="header">Changing Case</div>
							PHP has several functions for changing the case of strings: strtolower() and strtoupper() operate on entire strings, ucfirst() operates only on the first character of the
							string, and ucwords() operates on the first character of each word in the string. 

						</div>
						<div class="item">
							<div class="header">Entity-quoting all special characters</div>
							The htmlentities() function changes all characters with HTML entity equivalents into
							those equivalents (with the exception of the space character). This includes the less-
							than sign (<), the greater-than sign (>), the ampersand (&), and accented characters


						</div>
						<div class="item">
							<div class="header">Comparing Strings</div>
							 The == operator casts nonstring
							operands to strings, so it reports that 3 and "3" are equal. The === operator does not
							cast, and returns false if the data types of the arguments differ
							To explicitly compare two strings as strings, casting numbers to strings if necessary,
							use the strcmp() function <br>
							<code>$relationship = strcmp(string_1, string_2);</code><br>
							A variation on strcmp() is strcasecmp(), which converts strings to lowercase before
							comparing them. Its arguments and return values are the same as those for strcmp()<br>
							The final variation on these functions is natural-order comparison with strnatcmp()
							and strnatcasecmp(), which take the same arguments as strcmp() and return the same
							kinds of values. 


						</div>
						<div class="item">
							<div class="header">Approximate Equality</div>
							PHP provides several functions that let you test whether two strings are approximately
							equal: soundex(), metaphone(), similar_text(), and levenshtein()

						</div>
						<div class="item">
							<div class="header">Substrings</div>
							If you know where the data that you are interested in lies in a larger string, you can
							copy it out with the substr() function <br>
							<code>
								$name = "Fred Flintstone"; <br>
								$fluff = substr($name, 6, 4);	// $fluff is "lint" <br>
								$sound = substr($name, 11);		// $sound is "tone"	<br>
							</code>
							To learn how many times a smaller string occurs in a larger one, use substr_count():<br>
							<code>$number = substr_count(big_string, small_string);</code><br>
							For instance:
							$greeting = "good morning citizen"; <br>
							$farewell = substr_replace($greeting, "bye", 5, 7);<br>
							<em>// $farewell is "good bye citizen"</em><br>
							Use a length of 0 to insert without deleting:<br>
							$farewell = substr_replace($farewell, "kind ", 9, 0);<br>
							<em>// $farewell is "good bye kind citizen"</em><br>
							Use a replacement of "" to delete without inserting:<br>
							$farewell = substr_replace($farewell, "", 8);<br>
							<em>// $farewell is "good bye"</em><br>
							Here’s how you can insert at the beginning of the string:<br>
							$farewell = substr_replace($farewell, "now it's time to say ", 0, 0);<br>
							<em>// $farewell is "now it's time to say good bye"'</em><br>
							A negative value for start indicates the number of characters from the end of the string
							from which to start the replacement:<br>
							$farewell = substr_replace($farewell, "riddance", −3);<br>
							<em>// $farewell is "now it's time to say good riddance"</em><br>
							A negative length indicates the number of characters from the end of the string at which
							to stop deleting:<br>
							$farewell = substr_replace($farewell, "", −8, −5);<br>
							<em>// $farewell is "now it's time to say good dance"</em><br>
						</div>
						<div class="item">
							<div class="header">Miscellaneous String Functions</div>
							The strrev() function takes a string and returns a reversed copy of it:<br>
							<code>$string = strrev(string);</code><br>
							The str_repeat() function takes a string and a count and returns a new string consisting
							of the argument string repeated count times:<br>
							<code>echo str_repeat('_.-.', 40);</code><br>
							The str_pad() function pads one string with another. Optionally, you can say what
							string to pad with, and whether to pad on the left, right, or both:<br>



						</div>
						<div class="item">
							<div class="header">Decomposing a String</div>
							PHP provides several functions to let you break a string into smaller components. In
							increasing order of complexity, they are explode(), strtok(), and sscanf(). <br>
							<em>explode();</em><br>
							The first argument, separator, is a string containing the field separator. The second
							argument, string, is the string to split. The optional third argument, limit, is the max-
							imum number of values to return in the array. If the limit is reached, the last element
							of the array contains the remainder of the string:<br>
							<code>$fields = explode(',', $input);</code><br>
							<em>implode();</em><br>
							does the exact opposite of explode. join() is an alias of implode()<br>
							<em>sscanf();</em><br>
							The sscanf() function decomposes a string according to a printf()-like template:<br>
							If used without the optional variables, sscanf() returns an array of fields:<br>
							<code>
							$string = "Fred\tFlintstone (35)";<br>
							$a = sscanf($string, "%s\t%s (%d)");<br>
							print_r($a);<br>
							Array<br>
							(<br>
							[0] => Fred<br>
							[1] => Flintstone<br>
							[2] => 35<br>
							)<br>
							</code>
						</div>
						<div class="item">
							<div class="header">String-Searching Functions</div>
							They come in three
							families: strpos() and strrpos(), which return a position; strstr(), strchr(), and
							friends, which return the string they find; and strspn() and strcspn(), which return
							how much of the start of the string matches a mask.<br>
							<em>The strpos() function finds the first occurrence of a small string in a larger string:</em><br>
							<code>$position = strpos(large_string, small_string);</code><br>
							<em>The strrpos() function finds the last occurrence of a character in a string. It takes the
							same arguments and returns the same type of value as strpos().</em><br>
							<code>
								$record = "Fred,Flintstone,35,Wilma"; <br>
								$pos = strrpos($record, ","); // find last comma <br>
								echo("The last comma in the record is at position {$pos}"); <br>
								The last comma in the record is at position 18 <br>
							</code>
							<em>The strstr() function finds the first occurrence of a small string in a larger string and
								returns from that small string on.</em><br>
							<code>
								$record = "Fred,Flintstone,35,Wilma"; <br>
								$rest = strstr($record, ","); // $rest is ",Flintstone,35,Wilma" <br>

							</code>
							The variations on strstr() are: <br>
							stristr()<br>
							Case-insensitive strstr()<br>
							strchr()<br>
							Alias for strstr()<br>
							strrchr()<br>
							Find last occurrence of a character in a string<br>
							As with strrpos(), strrchr() searches backward in the string, but only for a single
							character, not for an entire string.<br>
							<em>The parse_url() function returns an array of components of a URL</em><br>
							<code>
								$bits = parse_url("http://me:secret@example.com/cgi-bin/board?user=fred");<br>
								print_r($bits); <br>
								Array <br>
								( <br>
								[scheme] => http <br>
								[host] => example.com <br>
								[user] => me <br>
								[pass] => secret <br>
								[path] => /cgi-bin/board <br>
								[query] => user=fred) <br>

							</code>
						</div>
						<div class="item">
							<div class="header">Regular Expressions</div>
							A regular expression is a string that represents a
							pattern. The regular expression functions compare that pattern to another string and see if any of the string matches the pattern.<br>
							<em>a caret (^) at the beginning of a regular expression indicates that it must match the beginning of the string </em><br>

							<code>
								preg_match("/^cow/", "Dave was a cowhand"); // returns false <br>
								preg_match("/^cow/", "cowhand"); // returns true <br>

							</code>
							<em>a dollar sign ($) at the end of a regular expression means that it must match the end of the string </em><br>
							<code>
								preg_match("/cow$/", "Dave was a cowhand"); // returns false<br>
								preg_match("/cow$/", "Don't have a cow"); // returns true<br>
							</code>
							<em>A period (.) in a regular expression matches any single character:</em><br>
							<code>
								preg_match("/c.t/", "c t"); // returns true <br>
								preg_match("/c.t/", "bat"); // returns false <br>
							</code>
							<em>If you want to match one of these special characters (called a metacharacter), you haveto escape it with a backslash:</em><br>
							<code>
								preg_match("/\$5\.00/", "Your bill is $5.00 exactly"); // returns true <br>
								preg_match("/$5.00/", "Your bill is $5.00 exactly"); // returns false <br>

							</code>
							
						</div>
						<div class="item">
							<div class="header">Character Classes</div>
							To specify a set of acceptable characters in your pattern, you can either build a character
							class yourself or use a predefined one. You can build your own character class by en-
							closing the acceptable characters in square brackets: <br>
							<code>
								preg_match("/c[aeiou]t/","I cut my hand"); //returns true <br>
								preg_match("/c[aeiou]t/","This crusty cat");//returns true <br>
								preg_match("/c[aeiou]t/","What cart?");//returns false <br>
								preg_match("/c[aeiou]t/","14ct gold");//returns <br>
							</code>
							<em>You can define a range of characters with a hyphen (-). This simplifies character classes
							like “all letters” and “all digits”: </em><br>
							<code>
								preg_match("/[0123456789]%/", "we are 25% complete"); //returns true <br>
								preg_match("/[a-z]t/", "11th"); // returns false <br>
							</code>
							<em>You can use the vertical pipe (|) character to specify alternatives in a regular expression</em><br>
							<em>To specify a repeating pattern, you use something called a <strong>quantifier</strong>.To repeat a single character, simply put the quantifier <strong>after</strong> the character:</em><br>
								<table class="ui table basic segment">
									<tbody>
									<tr>
										<td>?</td>
										<td> 0 or 1 </td>
									</tr>
									<tr>
										<td>*</td>
										<td> 0 or more </td>
									</tr>
									<tr>
										<td>+</td>
										<td> 1 or more </td>
									</tr>
									<tr>
										<td>{n}</td>
										<td> Exactly n times </td>
									</tr>
									<tr>
										<td>{n,m}</td>
										<td>  At least n, no more than m times  </td>
									</tr>
									<tr>
										<td>{ n ,}</td>
										<td> At least n times  </td>
									</tr>
							
								<br>
									</tbody>
								</table>
							</em>
							<code>
								preg_match("/[0-9]{3}-[0-9]{3}-[0-9]{4}/", "303-555-1212"); //return true <br>
								preg_match("/[0-9]{3}-[0-9]{3}-[0-9]{4}/", "64-9-555-1234"); //return false <br>
							</code>
							<em>You can use parentheses to group bits of a regular expression together to be treated as
							a single unit called a <strong>subpattern</strong></em><br>
							<code>
							preg_match("/a (very )+big dog/", "it was a very very big dog"); //returns true <br>
							</code>

							<em>The parentheses also cause the substring that matches the subpattern to be captured.
							If you pass an array as the third argument to a match function, the array is populated
							with any captured substrings</em>
							<em>The preg_replace() function behaves like the search-and-replace operation in your text editor.</em><br>
							<code>
								$better = preg_replace('/<.*?>/', '!', 'do &lt;b&gt;not&lt;/b&gt; press the button'); <br>
								// $better is 'do !not! press the button' <br>
							</code>

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
