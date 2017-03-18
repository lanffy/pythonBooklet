<?php

$i = 0;
$times = 1000;
while($times < 1003){
    $http = 'http://www.qlcoder.com/train/handsomerank?_token=3yACYElNywyrJ5Tx3FtgKFWFdWm8VMNVPAv2v2ZM&user=Lanffy&checkcode=';
    $str = '20160421Lanffy';
    $str .= ($times . $i);
    $md5_str = md5($str);
    if(substr($md5_str, 0 ,6) === '000000') {
        echo 'str is:' . $str . ';---the times is:' . $times . '--i:' . $i . '--->md5str:' . $md5_str . PHP_EOL;
        $ch = curl_init();
        $url = $http . $i;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_exec($ch);
        curl_close($ch);
        $times++;
        $i=0;
    } else {
        $i++;
    }
}
