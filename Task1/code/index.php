<?php
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";


// Write your code here:
$order = &$very_bad_unclear_name;

$order .= " and water";

// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";


$int = 123;
echo "\n$int";

$float = 12.3;
echo "\n$float";

$value = 11 + 1;
echo "\n$value";

$lastMonth = 1187.23;
$thisMonth = 1089.98;
echo "\nLast month i've spent ", $lastMonth - $thisMonth, " more";

$numLanguages = 3; // i think that languagesCount is way better name for this but ok
$months = 11; // monthsSpent ?
$days = $months * 16; // ^
$daysPerLanguage = $days / $numLanguages;
echo "\n\nMegg spent $daysPerLanguage on average for each language";

echo "\n", 8**2;

$my_num = 0;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo "\n$answer";

$a = 10;
$b = 3;
echo "\na % 3 is ", $a % $b;

if($a % $b == 0)
{
    echo "\n$a is dividable by $b and {$a}/{$b}=", $a / $b;
}
else
{
    echo "\n$a is not dividable by $b and {$a}%{$b}=", $a % $b;
}

$st = pow(2, 10);
$squareRoot = sqrt(245);

$values = [4, 2, 5, 19, 13, 0, 10];
foreach($values as $arrayItem)
{
    echo "\nSquare root of $arrayItem is ", sqrt($arrayItem);
}
