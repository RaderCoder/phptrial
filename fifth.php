<?php

$fruits = ["Mango","Apple","Orange","Grape"];

print count($fruits);
print '<br>';

print in_array("Grape",$fruits);
print '<br>';

array_push($fruits,"Raspberry");
array_unshift($fruits,"Jackfruit");
print_r($fruits);
print '<br>';

array_pop($fruits);
array_shift($fruits);
print_r($fruits);
print '<br>';

unset($fruits[2]);
print_r($fruits);
print '<br>';

$chunked_fruits = array_chunk($fruits,2);
var_dump($chunked_fruits);print '<br>';

$odd = [1,3,5];
$even = [2,4,6];
$oneToSix = array_merge($odd,$even);
print_r($oneToSix);
print '<br>';
$oneToSix2 = [...$odd,...$even];
print_r($oneToSix2);
print '<br>';

$numbers = range(1,20);
print_r($numbers);
print '<br>';

?>
