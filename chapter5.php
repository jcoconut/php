<html>
	<head>
		<?php require('parts/links.php'); ?>
		<?php
			$chapter = 5;
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
					<h3 class="header">Chapter 5</h3>
					<div class="ui list">
						An array is a collection
						of data values organized as an ordered collection of key-value pairs.There are two kinds of arrays in PHP: indexed and associative. The keys of an
						indexed array are integers, beginning at 0. Indexed arrays are used when you identify
						things by their position. Associative arrays have strings as keys and behave more like
						two-column tables. 
						<br> 
						<code>$days = ['gasket' => 15.29, 'wheel' => 75.25, 'tire' => 50.0]; </code>
						<div class="item">
							<div class="header">Adding Values to the End of an Array</div>
							To insert more values into the end of an existing indexed array, use the [] syntax:
							<code>
								$family = array("Fred", "Wilma");<br>
								$family[] = "Pebbles"; // $family[2] is "Pebbles" <br>
							</code>
						</div>
						<div class="item">
							<div class="header">Assigning a Range of Values</div>
							The range() function creates an array of consecutive integer or character values between
							and including the two values you pass to it as arguments. 
							<code>
								$numbers = range(2, 5);// $numbers = array(2, 3, 4, 5); <br>
								$letters = range('a', 'z');// $letters holds the alphabet <br>
								$reversedNumbers = range(5, 2);// $reversedNumbers = array(5, 4, 3, 2); <br>
							</code>


						</div>
						<div class="item">
							<div class="header">Getting the Size of an Array</div>
							The count() and sizeof() functions are identical in use and effect. They return the
							number of elements in the array. <br>
							<code>
								$family = array("Fred", "Wilma", "Pebbles"); <br>
								$size = count($family); // $size is 3 <br>
							</code>


						</div>
						<div class="item">
							<div class="header">Padding an Array</div>
							To create an array with values initialized to the same content, use array_pad(). The
							first argument to array_pad() is the array, the second argument is the minimum number
							of elements you want the array to have, and the third argument is the value to give any
							elements that are created. <br>

							<code>
							$scores = array(5, 10); <br>
								$padded = array_pad($scores, 5, 0); <br>
								// $padded is now array(5, 10, 0, 0, 0) <br>

							</code>
							<em>If you want the new
								values added to the start of the array, use a negative second argument:
							</em>
						</div>
						<div class="item">
							<div class="header">Multidimensional Arrays</div>
							<code>
								$row0 = array(1, 2, 3); <br>
								$row1 = array(4, 5, 6); <br>
								$row2 = array(7, 8, 9); <br>
								$multi = array($row0, $row1, $row2); <br>
							</code>
							<em>To copy all of an array’s values into variables, use the list() construct</em><br>
							<code>
								$person = array("Fred", 35, "Betty"); <br>
								list($name, $age, $wife) = $person; <br>
								// $name is "Fred", $age is 35, $wife is "Betty" <br>
							</code>
						</div>
						<div class="item">
							<div class="header">Slicing an Array</div>
							To extract only a subset of the array, use the array_slice() function<br>
							<code>$subset = array_slice(array, offset, length); </code><br>


						</div><div class="item">
							<div class="header">Splitting an Array into Chunks</div>
							<code>
								$nums = range(1, 7);<br>
								$rows = array_chunk($nums, 3);<br>
								print_r($rows);<br>
							</code>
						</div>
						<div class="item">
							<div class="header">Keys And Values</div>
							<code>
								$array = array_keys($arr);<br>
								$array = array_values($arr);<br>
							</code>
						</div>
						<div class="item">
							<div class="header">Checking Whether an Element Exists</div>
							<code>
								$a=array("Volvo"=>"XC90","BMW"=>"X5"); <br>
								array_key_exists("Volvo",$a) //true <br>
							</code>
						</div>
						<div class="item">
							<div class="header">Removing and Inserting Elements in an Array</div>
							The array_splice() function can remove or insert elements in an array and optionally
							create another array from the removed elements <br>
							<code>
								$subjects = array("physics", "chem", "math", "bio", "cs", "drama", "classics"); <br>
								$removed = array_splice($subjects, 2, 3); <br>
								// start at position 2, remove 3 <br>
								// $removed is array("math", "bio", "cs") <br>
								// $subjects is array("physics", "chem", "drama", "classics") <br>
							</code>
							If you omit the length, array_splice() removes to the end of the array <br>
							<code>
								$removed = array_splice($subjects, 2); <br>
								// $removed is array("math", "bio", "cs", "drama", "classics") <br>
								// $subjects is array("physics", "chem") <br>
							</code>
					
						</div>
						<div class="item">
							<div class="header">Converting Between Arrays and Variables</div>

						</div>
						<div class="item">
							<div class="header">The Iterator Functions</div>
							Every PHP array keeps track of the current element you’re working with; the pointer
							to the current element is known as the iterator. <br> 

						</div>
						<div class="item">
							<div class="header">Calling a Function for Each Array Element</div>
							PHP provides a mechanism, array_walk(), for calling a user-defined function once per
							element in an array <br>
							<code>
								$callback = function printRow($value, $key) <br>
								{ <br>
								print("<tr><td>{$value}</td><td>{$key}</td></tr>\n"); <br>
								}; <br>
								$person = array('name' => "Fred", 'age' => 35, 'wife' => "Wilma"); <br>
								array_walk($person, $callback);  <br>
							</code>

						</div>
						<div class="item">
							<div class="header">Searching for Values</div>
							<code>
								$addresses = array("spam@cyberpromo.net", "abuse@example.com", "root@example.com"); <br>
								$gotSpam = in_array("spam@cyberpromo.net", $addresses); // $gotSpam is true <br>
								$gotMilk = in_array("milk@tucows.com", $addresses); <br>
								// $gotMilk is false <br>
							</code>

						</div>
						<div class="item">
							<div class="header">Sorting One Array at a Time</div>
							The sort(), rsort(), and usort() functions are designed to work on indexed arrays
							because they assign new numeric keys to represent the ordering. <br>
							<code>sort(), rsort(), and usort() </code> <br><br>
							<em>To correctly sort strings that contain numbers, use the
								natsort() and natcasesort() functions:
							</em>
						</div>
						<div class="item">
							<div class="header">Reversing Arrays</div>
							<em>$reversed = array_reverse(array); // reverse order of elements </em><br>
							<em>$flipped = array_flip(array); // swap key and value </em> <br>
							<em>shuffle(array); // shuffle... </em><br>
						</div>
						<div class="item">
							<div class="header">Calculating the Sum of an Array</div>
							<em>$sum = array_sum(array); </em><br>

						</div>
						<div class="item">
							<div class="header">Merge</div>
							<em>$merged = array_merge($first, $second); </em><br>
						</div>
						<div class="item">
							<div class="header">Diff</div>
							<em>$arr = array_diff(array1,array2) // array that have values that are different</em><br>
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
