<?php


$firstPattern = "/a..b/"; // the task says that the correct pattern is a..b, but i think that it is just a typo
$str = 'ahb acb aeb aeeb adcb axeb';

$count = preg_match_all($firstPattern, $str, $matches);
print_r($matches);