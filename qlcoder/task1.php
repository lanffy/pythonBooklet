<?php

for($i = 1, $j=0; ; $i++) {
    if($i % 2 == 0 || $i % 3 == 0) {
        if(++$j == 2333) break;
    }
}
echo $i;
