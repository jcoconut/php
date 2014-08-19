<html>
	<head>
		<?php require('parts/links.php'); ?>
		<?php
			$chapter = 8;
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
					<h3 class="header">Chapter 8 Database</h3>
					<em> PHP
					Data Objects (or PDO) system, lets you use the same functions to access any
					database, rather than on the myriad database-specific extensions. <br>
					The PHP Data Objects (PDO) extension defines a lightweight, consistent interface for
					accessing databases in PHP.  <br>

					</em>
					<div class="ui list">
						
						<div class="item">
							<div class="header">Using PHP to Access a Database</div>
							There are two ways to access databases from PHP. One is to use a database-specific
							extension; the other is to use the database-independent PDO (PHP Data Objects)
							library. There are advantages and disadvantages to each approach. <br>
							If you use a database-specific extension, your code is intimately tied to the database
							you’re using. For example, the MySQL extension’s function names, parameters, error
							handling, and so on are completely different from those of the other database exten-
							sions. If you want to move your database from MySQL to PostgreSQL, it will involve
							significant changes to your code. PDO, on the other hand, hides the database-specific
							functions from you with an abstraction layer, so moving between database systems can
							be as simple as changing one line of your program or your php.ini file. <br>


						</div>
						<div class="item">
							<div class="header">Relational Databases and SQL</div>
							A Relational Database Management System (RDBMS) is a server that manages data for
							you. The data is structured into tables, where each table has a number of columns, each
							of which has a name and a type.<br>
							PHP communicates with relational databases such as MySQL and Oracle using the
							Structured Query Language (SQL). You can use SQL to create, modify, and query
							relational databases.<br>
							The syntax for SQL is divided into two parts. The first, Data Manipulation Language
							or DML, is used to retrieve and modify data in an existing database. DML is remarkably
							compact, consisting of only four actions or verbs: SELECT, INSERT, UPDATE, and DELETE.<br>
							The set of SQL commands used to create and modify the database structures that hold
							the data is known as Data Definition Language, or DDL. The syntax for DDL is not as
							standardized as that for DML <br>




						</div>
						<div class="item">
							<div class="header">Making a connection</div>
							<code>
								$db = new PDO ($dsn, $username, $password); <br>
								$db = new PDO("mysql:host=localhost;dbname=library", "petermac", "abc123"); <br>
							</code>
						</div>

						<div class="item">
							<div class="header">Interaction with the database</div>
							<code>
								$db->query("UPDATE books SET authorid=4 WHERE pub_year=1982"); <br>
							</code>
						</div>
						<div class="item">
							<div class="header">PDO and prepared statements</div>
							PDO also allows for what are known as prepared statements. This is done with PDO
							calls in stages or steps. <br>
							<code>
								$statement = $db->prepare( "SELECT * FROM books"); <br>
								$statement->execute(); <br>
								// gets rows one at a time <br>
								while ($row = $statement->fetch()) { <br>
								print_r($row); <br>
								// or do something more meaningful with each returned row <br>
								} <br>
								$statement = null; <br>
							</code>
							<em>
								In this code, we “prepare” the SQL code and then “execute” it. Next, we cycle through
								the result with the while code and, finally, we release the result object by assigning
								null to it. 
							</em>
						</div>
						<div class="item">
							<div class="header">Transactions</div>
							Some RDBMSs support transactions, in which a series of database changes can be
							committed (all applied at once) or rolled back (discarded, with none of the changes
							applied to the database). For example, when a bank handles a money transfer, the
							withdrawal from one account and deposit into another must happen together—neither
							should happen without the other, and there should be no time between the two actions.
							PDO handles transactions elegantly with try...catch structures like this one <br>
							<code>
								try {<br>
								$db = new PDO("mysql:host=localhost;dbname=banking_sys", "petermac", "abc123");<br>
								// connection successful<br>
								}<br>
								catch (Exception $error) {<br>
								}<br>
								die("Connection failed: " . $error->getMessage());<br>
								try {<br>
								$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);<br>
								$db->beginTransaction();<br>
								$db->exec("insert into accounts (account_id, amount) values (23, '5000')" );<br>
								$db->exec("insert into accounts (account_id, amount) values (27, '-5000')" );<br>
								$db->commit();<br>
								}<br>
								catch (Exception $error) {<br>
								$db->rollback();<br>
								echo "Transaction not completed: " . $error->getMessage();<br>
								}<br>
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
