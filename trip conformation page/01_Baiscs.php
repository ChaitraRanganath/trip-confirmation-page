 <div class="container">
    This is my first php website
     <?php
     define('pi', 3.14);
    echo "hello world and this is printed using php";

    //single line comment
    /*
    this 
    is_aa<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    multi
    libxml_disable_entity_loadercomment
    */

    $variable1 = 4;
    $variable2 = 5;
    echo $variable1;
    echo $variable2;
    echo $variable1 + $variable2;
    //operators in PHP
    //Arithemetic operators
    echo "<br>";
    echo "The value of variable1 + variable2 is";
    echo $variable1 + $variable2;
    echo "<br>";
    echo "The value of variable1 - variable2 is";
    echo $variable1 - $variable2;
    echo "<br>";

 echo "The value of variable1 * variable2 is";
 echo $variable1 * $variable2;
    echo "<br>";
     echo "The value of variable1 / variable2 is";
     echo $variable1 / $variable2;
    echo "<br>";

    // assignment operators
    $newVar = $variable1;
    $newVar +=1;
    $newVar -=1;
    $newVar *=1;
    $newVar /=1;

    echo "The value of new variable is" ;
    echo $newVar;
    echo "<br>";
    // comparision operators
    //echo "<h1> Comparison operator </h1>";
    echo "The value of 1==4 is";
    echo var_dump(1==4);
    echo "<br>";
    echo "The value of 1!=4 is";
    echo var_dump(1!=4);
    echo "<br>";
    echo "The value of 1>=4 is";
    echo var_dump(1>=4);
    echo "<br>";
    echo "The value of 1<=4 is";
    echo var_dump(1<=4);
    echo "<br>";
    //echo var_dump(1==4);
    //Increment/decrement operators
echo--$variable1;
echo "<br>";
echo $variable1;

    // logical operator 
//and(&&)
//or (||)
//xor
// !
$myVar = (true) and (true);
$myVar =(false and false);
echo "<br>";
echo var_dump($myVar);
//data types in php
// 1. string
// 2. integer
// 3. boolean
// 4. float
// 5. array
// 6. object
echo "<br> data types <br>";
$var = 67;
echo var_dump($var);
echo "<br>";
$var = 67.1;
echo var_dump($var);
echo "<br>";
$var = true;
echo var_dump($var);
echo "<br>";
echo pi;
    ?>


</body>
</html>