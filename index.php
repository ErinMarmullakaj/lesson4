<?php

// $x= 'hello';
// print_r($x);

// $x = 5;
// echo gettype($x) . "<br>";

// $y = 10.3;
// echo gettype($y) . "<br>";

// $z = "hello world";
// echo gettype($z) . "<br>";

// function displayPhpVersion(){
//     echo"this is php file".phpversion();
//     echo"\n";
// }

// displayPhpVersion();

// function foo($arg_1,$arg_2,/*...,*/ $arg_n){
//     echo "example function. \n";
//     return $returnValue;
// }

// function sum(){
//     $value = 120+20;

//     echo $value;
// }

// sum();


// function max($x,$y){
//     if($x>$y){
//         return $x;
//     }else{
//         return $y;
//     }
// }

// $a = 20;
// $b = 30;

// $test = max($a,$b);
// echo"the max of $a and $b is $test \n";



// function localVariable(){
//     $x = 5;
//     $y = 10;
//     echo $x;
//     echo $y;
// }

// localVariable();

$x=5;
$y=7;
function sum(){
    global $x, $y;
    $y = $x + $y;

}

sum();
echo $y;












?>