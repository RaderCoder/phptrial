<?php

$b = [2,4,6,8,10];
/*
for($i=0; $i<5; $i++){
  $j=$i+1;
  print 'The '.$j.' number element is '.$b[$i].'<br>';
}

$i = 0;
$flag = true;
while($flag){
  if($b[$i] == 8){
    $index = $i;
    $flag = false;
  }
  $i++;
}
print '8 is at index '.$index.'<br>';

$i = 0;
while(true){
  if($b[$i] == 4){
    $index = $i;
    break;
  }
  $i++;
}
print '8 is at index '.$index.'<br>';
*/
/*
$i = 0;
do{
  $j = $i + 1;
  print 'The '.$j.' number element is '.$b[$i].'<br>';
  $i++;
} while($i<5);

$i=5;
do{
  print $i.'<br>';
  $i++;
} while($i<5);

$colors = ["red","yellow","blue"];
$i=1;
foreach($colors as $color){
  print 'Number '.$i.' Color is: '.$color.'<br>';
  $i++;
}
*/

$value = 4;
$temp = 4;
for($i=0;$i<2;$i++){
  $value = $value * $temp;
}
print '4 to the power of 3 is '.$value.'<br>';

$fact = 6;
for($i=$fact-1;$i>0;$i--){
  $fact = $fact * $i;
}
print 'The factorial of 6 is '.$fact.'<br>';


?>
