<?php

if(!isset($_POST["name"],$_POST["age"],$_POST["salary"], $_POST["color"]))
    header("location: index.php");

session_start();
$_SESSION["personalData"] = [$_POST["name"],$_POST["age"],$_POST["salary"], $_POST["color"]];


echo "<ul>";
foreach($_SESSION["personalData"] as $dataDetail)
{
    echo "<li>{$dataDetail}</li><br>";
}
echo "</ul>";
