<?php
echo 'Experement 5 (a)<br>';
$values = array("Seeta"=>"31","Geeta"=>"41","Jeetu"=>"39","Ramesh"=>"40");

echo 'a) Ascending order sorting by value<br>';
asort($values);
print_r($values);
echo '<br><br>';

echo 'b) Ascending order sorting by Key<br>';
ksort($values);
print_r($values);
echo '<br><br>';

echo 'c) Descending order sorting by Value<br>';
arsort($values);
print_r($values);
echo '<br><br>';

echo 'd) Descending order sorting by Key <br>';
krsort($values);
print_r($values);
echo '<br><br>';