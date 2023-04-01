<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        background-color: green;
        margin: auto;

    }
</style>
<body>
    <div class="container">
        <h1> lets learn about PHP </h1>
        <p>Your party status is here:</p>
        <?php
        $age = 7;
        if($age>18){
            echo " You can go to the party";
        }
    else if ($age==7)
    { 
        echo "You are 7 years old";
    }
    else{
        echo " You cannot go to the party";

    }
    

$languages = array("python","C++", "php", "NodeJs");
echo $languages[0];
//Loops in PHP
$a =0;
while ($a<=10)
{
    echo "<br> The value of a is: ";
    echo $a;
    $a++;

}

//iterating arrays in PHP using while loop
$a =0;
while ($a < count($languages)) {
    echo "<br>The value of languages is: ";
    echo $languages[$a];
    $a++;
}

//Do while loop
$a =200;
do{
    echo "<br> The value of a is: ";
    echo $a;
    $a++;

} while($a < 10);

// for loop 
for ($a=60; $a< 10; $a++){
    echo "<br> The value of a from the for loop is: ";
    echo $a;
}
foreach($languages as $value) {
    echo "<br> The value from foreach loop is";
    echo $value;

}
function print5(){


echo "FIVE";
}
Print5();
Print5();
Print5();
Print5();
function print_number($number){
    echo "<br> your number is ";
    echo $number;
}
print_number(45);
print_number(45);
print_number(45);
?>


</div>