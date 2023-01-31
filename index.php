<?php

// <---------------php kod yozamiz---------------------------->
//  $name = 'Ali';
//  $integer = 134121;
//  $float = 3221.45;
//  $array = [1,2,34,5,55];

//  function printer($name){
//     return print "<br/> Salom ".$name;
//  }



//  echo var_dump($name).'<br/>';
//  echo var_dump($integer).'<br/>';
//  echo var_dump($float).'<br/>';

//  print_r($array);

//  printer('Anvar');


// <--------------------String---------------------------------------->

// $string = 'Hello world!';

// echo strlen($string).'<br>';     // strlen() function returns the length of a string.
// echo str_word_count($string).'<br>';   // str_word_count() function counts the number of words in a string.
// echo strrev($string).'<br>';  // strrev() function returns reverses a string. 
// echo strpos($string, 'or').'<br>'; //  Result: 7
// echo str_replace('world', "Jony", $string); //  str_replace() function replaces some characters with some other characters in a string.



// <-----------------------Math functions---------------------------------->

// echo pi().'<br>'; // returns 3.1415926535898
// echo(min(0, 150, 30, 20, -8, -200).'<br>'); // finds the lowest value./-200
// echo max(0, 150, 30, 20, -8, -200).'<br>'; // finds the highest value./150
// echo  abs(-24.12).'<br>'; // returns absolute(positive) of a number./24.12
// echo sqrt(81).'<br/>'; // returns the square root of a number./9
// echo round(0.64).'<br/>'; // returns a floating-point numbers to its nearest integer./1
// echo rand().'<br/>'; // generates a random numbers./
// // if you want a random integer between 10 and 100 (inclusive), use rand(10, 100):
// echo rand(10, 100).'<br/>'; // generates a random numbers./


// <--------------------------Constanst---------------------------------->

// SYTNTAX : define(name, value, case-insensitive)

define('GREETING', 'Hello world!'); //
echo GREETING.'<br>';
define("cars", [
   "Alfa Romeo",
   "BMW",
   "Toyota"
 ]);
 echo cars[0];



















?>
