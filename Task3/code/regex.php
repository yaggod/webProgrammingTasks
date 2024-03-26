<?php
$firstPattern = "/a..b/"; // the task says that the correct pattern is a..b with a..a examples, but i think that it is just a typo
$str = 'ahb acb aeb aeeb adcb axeb';

$count = preg_match_all($firstPattern, $str, $matches);
print_r($matches);


$numbersMixedString = "a1b2c3";
$numberPattern = "/\d+/";

$count = preg_match_all($numberPattern, $numbersMixedString, $foundNumbers);
foreach($foundNumbers[0] as $number)
{
    $numberCube = $number * $number * $number; // calling pow() for natural power lower than 5 is a bad idea
    $numbersMixedString = preg_replace("/$number/", $numberCube, $numbersMixedString); // i am certain this will work incorrectly in some cases, but in this case it works
}

echo $numbersMixedString;