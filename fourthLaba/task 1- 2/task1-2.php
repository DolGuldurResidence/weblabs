<?php
/* 1 */

$str = 'ohbo oco oeo oeeo odco oxeo';
preg_match_all('/o..o/', $str, $matches);
print_r($matches[0]);

/* 2 */

$str = 'a1b2c3';

$result = preg_replace_callback(
    '/\d+/',
    function ($matches) {
        $number = (int)$matches[0];
        $multiplied = $number * 10;
        return $multiplied;
    },
    $str
);

echo $result;  
echo "\n";
