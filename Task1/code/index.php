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


$a = rand();
$b = rand();
echo "|$a - $b| is ", abs($a - $b), "\n";

$unsignedArray = [1, 2, -1, -2, 3, -3];
$signedArray = [];
for($i = 0; $i < count($unsignedArray); $i++)
{
    $signedArray[$i] = abs($unsignedArray[$i]);
}

$valueToFindDivisors = rand(0, 10000);
$divisors = [];
echo "$valueToFindDivisors divisors is:\n";
for($i = 1; $i <= $valueToFindDivisors; $i++)
{
    if($valueToFindDivisors % $i != 0)
        continue;

    array_push($divisors, $i);
    echo "\t$i\n";
}

$valuesToSum = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$targetValue = 10;
$currentValue = 0;
for($i = 0; $i < count($valuesToSum);)
{
    $currentValue += $valuesToSum[$i++];
    echo "Current value: $currentValue\t";
    if($currentValue > $targetValue)
        break;
}

if($currentValue > $targetValue)
    echo "To get value bigger (strictly) than $targetValue, you have to sum first $i numbers\n";
else
    echo "You cant get $targetValue by summing up this numbers\n";


function printStringReturnNumber()
{
    echo "smth\n";
    return rand();
}

$my_num = printStringReturnNumber();
echo "$my_num\n";

function increaseEnthusiasm($string)
{
    return $string . "!";
}

echo increaseEnthusiasm("Some string"), "\n";

function repeatThreeTimes($string)
{
    return repeat($string, 3);
}

function repeat($string, $count)
{
    $result = "";
    for($i = 0; $i < $count; $i++)
        $result .= $string;
    return $result;
}

echo repeatThreeTimes("one "), "\n";

echo increaseEnthusiasm(repeatThreeTimes(("abc"))), "\n";

// i guess, it has to be passed by the reference, not the value?
function cut(&$stringToCut, $countToKeep = 10)
{
    $stringToCut = substr($stringToCut, 0, $countToKeep);
}

$string = "4397idfgi";
cut($string, 2);

function printArrayRecursively($arrayToPrint, $currentIndex = 0)
{
    if($currentIndex >= count($arrayToPrint))
        return;

    echo "\t$arrayToPrint[$currentIndex]\n";
    printArrayRecursively($arrayToPrint, $currentIndex + 1);
}

$numberToHandle = rand();
while($numberToHandle > 9)
{
    $tempValue = 0;
    while($numberToHandle > 0)
    {
        $tempValue += $numberToHandle % 10;
        $numberToHandle = floor($numberToHandle / 10);
    }
    $numberToHandle = $tempValue;
}

$wordsArray = [];
$wordsCount = 5;
$wordBase = 'x';
for($i = 0; $i < $wordsCount; $i++)
{
    $wordsArray[$i] = repeat($wordBase, $i + 1);
}

function arrayFill($value, $count)
{
    $result = [];
    for($i = 0; $i < $count; $i++)
    {
        $result[$i] = $value;
    }

    return $result;
}

$twoDimensionalArray = [[1, 2, 3], [4, 5], [6]];
$sum = 0;
foreach($twoDimensionalArray as $subArray)
{
    foreach($subArray as $arrayItem)
    {
        $sum += $arrayItem;
    }
}

$twoDimensionalArrayToCreate = [];
$rowsCount = 3;
$columnsCount = 3;
$currentValue = 1;

for($row = 0; $row < $rowsCount; $row++)
{
    $subArrayToCreate = [];
    for($column = 0; $column < $columnsCount; $column++)
    {
        $subArrayToCreate[$column] = $currentValue++;
    }
    $twoDimensionalArray[$row] = $subArrayToCreate;
}

$numbers = [2, 5, 3, 9];
$result = $numbers[0] * $numbers[3] + $numbers[1] * $numbers[2];
echo "$numbers[0] * $numbers[3] + $numbers[1] * $numbers[2] is $result\n";

$user = array("name" => "Yaroslav", "surname" => "Yagodkin", "patronymic" => "Dmitriyevich");
echo "$user[surname] $user[name] $user[patronymic]\n";