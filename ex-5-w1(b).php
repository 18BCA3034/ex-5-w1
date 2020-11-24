<?php
echo 'Experement 5 (b)<br>';
function unique_names(array $arr1, array $arr2){
    return array_unique(array_merge($arr1, $arr2));
}
$nameset1 = array("Drake", "Catriona", "Marni", "Ayala", "Bernard");
$nameset2 = array("Marni", "Noel", "Workman", "Jean", "Catriona");
$unique_names = unique_names($nameset1, $nameset2);
echo join(', ', $unique_names);