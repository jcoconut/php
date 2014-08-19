<?php 
echo nl2br("this page(and the code itself) doesnt have main topic and format, this is just a random testing page"." \n");
function updatecounter($name = null){
   
    switch($name):
        case "abc":
            echo nl2br("si abc \n");
            break;
        case 'xyz':
            echo "si xyz to \n";
            break;
        default:
            echo 'wala $kang nilagay';
            break;
    endswitch;


        $tae = 10;
        while($tae > 0):
            echo $tae."<br>";
            $tae--;
        endwhile;



 //   echo "now value of crap is ".$crap;
}
updatecounter();
updatecounter('abc');
$crap = 99;

echo "amf"." is the value of global crap"." \n";
echo "\n\n";
echo 2*5+4/2-1;
echo "<hr>";
function doubler(&$value) // will change value of passed variable instead
{
$value = 10 << 2;
}
$a = 4;
doubler($a);
echo $a;
echo "<hr>";
$taemo = "nodiba\n$&";
echo rawurldecode($taemo);
printf(<<< Template
%s is %d years old.
Template
    , "Fred", 35);
echo "<br>";
$greeting = "good morning citizen";
$farewell = substr_replace($greeting, "bye", 5, 7);
$farewell = substr_replace($farewell, "kind ", 9, 0);

echo $farewell;
echo "<br>";
echo preg_match("/^cow/", "Dave was a cowhand"); // returns false
$captured = array();
 echo  preg_match("/([0-9]+)/", "You have 42 magic beans", $captured);
print_r($captured);
// returns true

echo "<hr>";
$subjects = array("physics", "chem", "math", "bio", "cs", "drama", "classics");

print_r (array_splice($subjects, 2));print("zzzzzz");
print_r($subjects); 
// $removed is array("math", "bio", "cs")
// $subjects is array("physics", "chem", "drama", "classics")



echo "<br>";
$names = array("color", "shape", "floppy");
print_r(compact($names));
// print_r($a."dars all i want form yu");
echo "<br>";
$weekdays = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday");
rand($weekdays);

print_r($weekdays);


?>
