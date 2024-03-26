<?php
if(!isset($_POST["email"], $_POST["category"], $_POST["header"], $_POST["description"], ))
    redirectToMainPage();

$category = $_POST["category"];
$header = $_POST["header"];
$description = $_POST["description"];


$filepath = "categories/{$category}/{$header}.txt";

if(!file_put_contents($filepath, $description))
    throw new Exception("Unable to access file {$filepath}");


redirectToMainPage();

function redirectToMainPage()
{
    header("location: market.php");
    exit();
}