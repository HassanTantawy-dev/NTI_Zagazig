<?php

// Age Check

$age = 20; 
if ($age >= 18) {
    echo "Access Granted";
} else {
    echo "Access Denied";
}

echo "<hr>";

// Math Function

function calculate($num1, $num2) {
    echo "Product: " . ($num1 * $num2) . "<br>";
    echo "Difference: " . ($num1 - $num2) . "<br>";
    echo "Division: " . ($num1 / $num2) . "<br>";
}

echo "<hr>";

// Sum Array

function sumArray($numbers) {
    return array_sum($numbers);
}

echo "<hr>";

// Movie Search

films = array("Fast", "Predestination", "Persuit", "Prestige");
$keyword = "avatar";
$found = "no";

foreach ($films as $film) {
    if ($film == $keyword) {
        $found = "yes";
        break;
    }
}
echo $found;

echo "<hr>";

// Bubble Sort

function RouteBubble($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j+1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
            }
        }
    }
    return $arr;
}

echo "<hr>";

// Max Number

$tests = array(5, 4, 9, 3, 1, 7, 5, 8, 6);
echo "Max: " . max($tests);

echo "<hr>";

// Count Duplicates

$films = array("avatar", "Prestige", "avatar", "Prestige");
$keyword = "avatar";
$count = 0;

foreach ($films as $film) {
    if ($film == $keyword) {
        $count++;
    }
}
echo "Total: " . $count;

echo "<hr>";

// Filter Booleans

$tests = array(1, "tariq", 1.5, true, 7, 's', false);
foreach ($tests as $item) {
    if (!is_bool($item)) {
        echo $item . " ";
    }
}

echo "<hr>";

// Sorting (For & While)

$tests = array(6, 4, 9, 3, 12, 8, 7);
sort($tests);

// For loop
for ($i = 0; $i < count($tests); $i++) {
    echo $tests[$i] . " ";
}

// While loop
$j = 0;
while ($j < count($tests)) {
    echo $tests[$j] . " ";
    $j++;
}

echo "<hr>";

// ntersection (Same Values)

$arr1 = array('a', 'b', 'c', 'd');
$arr2 = array('c', 'd', 'e', 'f');
$result = array_intersect($arr1, $arr2);
echo implode("-", $result);

echo "<hr>";

