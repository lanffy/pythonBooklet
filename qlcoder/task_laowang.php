<?php

$lists = [
1 => 509,
2 => 838,
3 => 924,
4 => 650,
5 => 604,
6 => 793,
7 => 564,
8 => 651,
9 => 697,
10 => 649,
11 => 747,
12 => 787,
13 => 701,
14 => 605,
15 => 644,
];


$all_combinations = [];

var_dump($lists[0]);

function combination($lists, &$all_combinations)
{
    if (!empty($all_combinations) && count(end($all_combinations)) == count($lists)) {
        return $all_combinations;
    }
    if (empty($all_combinations)) {
        foreach ($lists as $eml) {
            $all_combinations[] = [$eml];
        }
        combination($lists, $all_combinations);
    }
    $current_len = count(end($all_combinations));

    for($i = 0; $i < count($lists); $i++) {

    }


    foreach ($lists as $list) {

    }

}
