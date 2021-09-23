<?php
require "../src/FizzBuzzClass.php";

// instantiate class
$fizzBuzzArr = new FizzBuzz();
$fizzBuzzPub = $fizzBuzzArr->calculateFizzBuzz(1, 40);

// parse first item in object to print string
if( !empty($fizzBuzzPub[0]) ){
    echo implode( ' ', $fizzBuzzPub[0] );
}

// parse second item in object to print count values
if( !empty($fizzBuzzPub[1]) ){
    echo '<br>';
    foreach( $fizzBuzzPub[1] as $key=>$value ){
        echo $key . ': ' . $value . '<br>';
    }
}