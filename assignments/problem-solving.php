<?php

$unit = 151;
if($unit <= 50) {
    $bill = $unit * 3.50;
} else if($unit <= 150) {
    $bill = 50 * 3.50 + ($unit - 50) * 4;
} else if($unit <= 250) {
    $bill = 50 * 3.50 + 100 * 4 + ($unit - 150) * 5.20;
}else{
    $bill = 50 * 3.50 + 100 * 4 + 100 * 5.20 + ($unit - 250) * 6.50;
}
echo $bill;

// i. A PHP calculator using switch case (Addition, Subtraction, Multiplication, Division)
$number1 = 5;
$number2 = 11;
$symbol = "+";
switch($symbol) {
    case "Addition":
        echo $number1 + $number2;
        break;
    case "Subtraction":
        echo $number1 - $number2;
        break;
    case "Multiplication":
        echo $number1 * $number2;
        break;
    case "Division":
        echo $number1 / $number2;
        break;
    case "Modulus ":
        echo $number1 % $number2;
        break;
        
}
echo "<br>";

// Check if a person is eligible to vote by age
$age = 15;
if($age >= 18) {
    echo "You are eligible for vote";
} else {
    echo "You are not eligible for vote";
}
echo "<br>";
// . Check if a person is eligible for marriage in BD by gender.
$gender = "male";
$marriageAge = 18;
if($gender=="male" && $marriageAge >= 21) {
    echo "You are eligible for marriage ";
} else if($gender=="female" && $marriageAge >= 18) {
    echo "You are eligible for marriage";
} else {
    echo "You are not eligible for marriage";
}
echo "<br>";

// Check if number is positive or negetive
$number = 5;
if($number>0) {
    echo "Number is Positive";
} else if($number<0) {
    echo "Number is Negative ";
}else{
    echo "Number is Zero ";
}

echo "<br>";

$number = 7;

// check if the number is odd or even
function checkOddEven($num) {
    if ($num % 2 == 0) {
        return "$num is an Even number.";
    } else {
        return "$num is an Odd number.";
    }
}

echo checkOddEven($number);
echo "<br>";

// Check if data is integer or string
$data = "Hello";

function checkDataType($data) {
    if (is_int($data)) {
        return "The data is an Integer.";
    } elseif (is_string($data)) {
        return "The data is a String.";
    } else {
        return "The data is neither an Integer nor a String.";
    }
}


echo checkDataType($data);
?>


