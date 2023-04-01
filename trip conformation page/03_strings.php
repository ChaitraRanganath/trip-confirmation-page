<?php
$str = "This is";
echo $str."<br>";
$lenn = strlen($str);
echo "This length of this string is". $lenn . ".Thank you <br>";
echo "The number of words in this string is" . str_word_count($str) . ".Thank you <br>";
echo "This reversed string is". strrev($str) . ".Thank you ,<br>";
echo "The search for is in this string is" . strpos($str,"is") . ".Thank you <br>";
echo $lenn;
?>