<?php

$handle = curl_init();
$parameters = array(
    CURLOPT_URL => 'http://www.qlcoder.com/task/4/solve',
    CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36',
    CURLOPT_AUTOREFERER=>true,
    CURLOPT_HEADER=>false,
    CURLOPT_AUTOREFERER=>true,
    CURLOPT_POST=>true,
    CURLOPT_RETURNTRANSFER=>true,
    CURLOPT_ENCODING=>'gzip, deflate, sdch',
    CURLOPT_COOKIE=>'XSRF-TOKEN=eyJpdiI6IjM1S0VCRmVzM0tSSFFhRHhUSEkxdEE9PSIsInZhbHVlIjoiSkJ1U1RjazIwNUdCRFwvZHVoZGxZVCtQdnhcL0N0emVJa3FcL3RYbFpMNGx6T2U4Y0JlZ0tzR0Y3dm9uR0g4NmkxU3pKeTB0K0plN1VcL2c4ZmY2OWtwODJnPT0iLCJtYWMiOiJjMDNjNDhiMDQ3MGUzMzRhOGM1N2Y4NWU3M2Y4MmZlZDBhMTllOWFmMjYwODhlYTg1ZmUyOTU4MGE3ODI0NDA0In0%3D; expires=Wed, 20-Apr-2016 18:46:13 GMT; Max-Age=7200; path=/; laravel_session=eyJpdiI6IjZYYWV2S1wvS0s2NGxvbjcxZUN3eEpnPT0iLCJ2YWx1ZSI6Ik1cL2s1YmdxdTRhU0pob2tIOE5CTnFqaGc5MUkrQ2I1SHFDcEtNSUR3TFRXV01VZnpJT0NhdEJlMVh6TjhEeEhURWV3VVI5dTNxQ3R3T1FvaG9ETnloQT09IiwibWFjIjoiZWIwMmY0ODJkNjE4NWVmZjJmNDM5ZmEyYzhmZjUzMjUxZWRkM2M3YjM5NTNhMzllNDQ4YzNlZGI5NDEwMzIxNiJ9; expires=Wed, 27-Apr-2016 16:46:13 GMT; Max-Age=604800; path=/; httponly; %E8%BF%99%E9%A2%98%E7%9A%84%E7%AD%94%E6%A1%88%E6%98%AForeo=eyJpdiI6InhGcjFuUVB1eUN3YXF6Ym1YTENZdkE9PSIsInZhbHVlIjoiYnJsRGx5UUtleTl4MnJLQmVPQ1JEZz09IiwibWFjIjoiZTVkMjE5N2U4NGQ5OWQwYjBhMTI0YWVmODlkMDEyMTVlZTNkNGJlM2VjZDRiZmRjNWM0ZWEwNzNlOTJmODdiOCJ9; path=/; httponly',
    CURLOPT_POSTFIELDS=>array(
        "_token"=>"7FyrrGXtQnNp9gXW5GlKzmt0hBEEZRP1kmZSY10d",
        "answer"=>"restful"
    ),
    CURLOPT_REFERER=>"http://www.qlcoder.com/task/7527"
);

$opt = curl_setopt_array($handle, $parameters);
$errno = curl_errno($handle);
$result = curl_exec($handle);
curl_close($handle);
var_dump($result, $errno, $opt);
