<?php
	
	if(isset($_POST['add'])){
		add_person();
	}elseif(isset($_POST['delete'])){
		delete_last_person();
	}elseif(isset($_POST['edit'])){
		echo 'edit';
	}
	function connect_db(){
		$con = mysql_connect("localhost", "root", "klabklab");
		if (!$con){
		die('Could not connect: ' . mysql_error());
		}

		$db_selected = mysql_select_db("phptest",$con);
	}
	function add_person(){
	connect_db();
	$fname = $_POST['input_fname'];
	$lname = $_POST['input_lname'];
	$age = rand(0, 99);
	mysql_query("INSERT INTO persons (fname, lname,age) VALUES ('$fname', '$lname','$age')");
	mysql_close($con);

	header("Location: index.php");

	}


	function delete_last_person(){
		connect_db();
		mysql_query("DELETE FROM persons ORDER BY id DESC LIMIT 1 ");
		mysql_close($con);
		header("Location: index.php");
	}
?>