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

$valueToRound = sqrt(379);
echo "Rounded value of $valueToRound is \n\t", round($valueToRound), "\nor\t", round($valueToRound, 1), "\nor\t", round($valueToRound, 2), "\n";

$valueToRound = sqrt(587);
$dictionary = array("floor" => floor($valueToRound), "ceil" => ceil($valueToRound));
echo "Floor: $dictionary[floor], Ceil: $dictionary[ceil]\n";

$valuesToSearchIn = [4, -2, 5, 19, -130, 0, 10];
$arrayString = "";
foreach($valuesToSearchIn as $arrayItem)
    $arrayString .= "$arrayItem ";
$minimalFoundValue = min($valuesToSearchIn);
$maximumFoundValue = max($valuesToSearchIn);
echo "Among values $arrayString\n\t$minimalFoundValue is the smallest one, \n\t$maximumFoundValue is the biggest one\n";

echo "Random number between 1 and 100 is ", rand(1, 100), "\n";

$arrayToFill = [];
for($i = 0; $i < 10; $i++)
    $arrayToFill[$i] = rand();

