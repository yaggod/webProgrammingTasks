<?php
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";


// Write your code here:
$order = &$very_bad_unclear_name;

$order .= " and water";

// Don't change the line below
echo "Your order is: $very_bad_unclear_name.\n";


$int = 123;
echo "$int\n";

$float = 12.3;
echo "$float\n";

$value = 11 + 1;
echo "$value\n";

$lastMonth = 1187.23;
$thisMonth = 1089.98;
echo "Last month i've spent ", $lastMonth - $thisMonth, " more\n";

$numLanguages = 3; // i think that languagesCount is way better name for this but ok
$months = 11; // monthsSpent ?
$days = $months * 16; // ^
$daysPerLanguage = $days / $numLanguages;
echo "Megg spent $daysPerLanguage on average for each language\n";

echo 8**2, "\n";

$my_num = 0;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo "$answer\n";

$a = 10;
$b = 3;
echo "a % 3 is ", $a % $b, "\n";

if($a % $b == 0)
{
    echo "$a is dividable by $b and {$a}/{$b}=", $a / $b, "\n";
}
else
{
    echo "$a is not dividable by $b and {$a}%{$b}=", $a % $b, "\n";
}

$st = pow(2, 10);
$squareRoot = sqrt(245);

$values = [4, 2, 5, 19, 13, 0, 10];
foreach($values as $arrayItem)
{
    echo "Square root of $arrayItem is ", sqrt($arrayItem), "\n";
}
