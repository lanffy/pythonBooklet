<?php
$friend_relationship_file = file('friend_relation.txt');

$source = [];
$other_source = [];
$all_receivers = [];

foreach ($friend_relationship_file as $item) {
    $none1 = false;
    $none2 = false;
    $item = explode(' ', trim($item));
    if (!in_array($item[0], $all_receivers)) {
        $all_receivers[] = $item[0];
        $none1 = true;
    }
    if (!in_array($item[1], $all_receivers)) {
        $all_receivers[] = $item[1];
        $none2 = true;
    }
    if ($none1 && $none2) {
        $source[] = $item[0];
        $other_source[] = $item[1];
    }
}
var_dump(array_unique($other_source));
echo "**********************" . PHP_EOL;
var_dump(sort($all_receivers));
var_dump($all_receivers);




exit;

$test = [['a', 'b'], ['b', 'c'], ['c', 'd'], ['e', 'f'], ['g']];
$source = [];
$all_receivers = [];
foreach ($test as $item) {
    $none1 = false;
    $none2 = false;
    if (!in_array($item[0], $all_receivers)) {
        $all_receivers[] = $item[0];
        $none1 = true;
    }
    if (isset($item[1]) && !in_array($item[1], $all_receivers)) {
        $all_receivers[] = $item[1];
        $none2 = true;
    } else {
        $none2 = $none1;
    }
    if ($none1 && $none2) {
        $source[] = $item[0];
    }
}
var_dump($source);
var_dump($all_receivers);
