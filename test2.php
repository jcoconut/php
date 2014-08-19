<?php

$geno = 1;
class Kay{
	// public$geno = 10;
	// $gono = 100;
	function one(){
		// $geno = 3;
		//echo "eto galing kay wan";
		echo ("haha".Kay::$geno);
	}
	function two(){
		$this->geno++;

		// echo $this->gono."_";

		echo $this->geno;
		
	}

}

// echo $geno;
// echo Kay::one();
$obj = new Kay;
$ganto = new Kay;
$obj->two();
$obj->two();
$obj->two();
// Kay::one();
?>