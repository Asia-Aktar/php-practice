<?php
$myName = "Tasnim Alom <br/>";

echo "My first name: $myName<br/>";

// Data types

// string
$myString = "Hello word";
var_dump($myString);
echo "<br/>";

// Integer
$myInteger = 123;
var_dump($myInteger);
echo "<br/>";

//float
$myFloat = 12.22;
var_dump($myFloat);
echo "<br/>";

//Boolen
$myBoolen = "true";
var_dump($myBoolen);
echo "<br/>";

// Array
$myArray = array("Dhaka", "Barisal", "Rupatil");
var_dump($myArray);
echo "<br/>";     

//Object
class MyClass 
{
    public $name = "Tasnim";
}
$myObject = new MyClass;
var_dump($myObject);
echo "<br/>";

//NULL
$myNull = "NULL";
var_dump($myNull);
echo "<br/>";

//Resource
// $myResource = fopen("l2-variable-dataTypes.php", "r");
// var_dump($myResource);
// echo "<br>";
// fclose($myResource);

//Constants
define("birthPlace", "Dhaka" );
echo birthPlace;
echo "<br>";

