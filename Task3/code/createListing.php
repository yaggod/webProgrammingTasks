<?php
if(!isset($_POST["email"], $_POST["category"], $_POST["header"], $_POST["description"], ))
    redirectToMainPage();

$email = $_POST["email"];
$category = $_POST["category"];
$header = $_POST["header"];
$description = $_POST["description"];



$directoryPath = "categories/{$category}/{$email}/";
$filename = "{$header}.txt";
if(!is_dir($directoryPath))
    mkdir($directoryPath);

$filePath = "{$directoryPath}/{$filename}";
if(!file_put_contents($filePath, $description))
{
    throw new Exception("Unable to acess file ".  $filePath);
}

redirectToMainPage();

function redirectToMainPage()
{
    //header("location: market.php");
    exit();
}