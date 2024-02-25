<?php
// echo chr(63) . PHP_EOL;
// echo ord("::") . PHP_EOL;
// echo ord("=") . PHP_EOL;
// echo ord('"') . PHP_EOL;
// echo ord('/') . PHP_EOL;
// echo ord('<') . PHP_EOL;
// echo chr(7) . PHP_EOL;
// echo ord('/');





// $text = '63 ::="/<7/';
// for ($i = 0; $i < 500; $i++) {
//     $encrypt = '';
//     for ($j = 0; $j < strlen($text); $j++) {
//         $ascii = ord($text[$j]);
//         $newascii = chr($ascii - $i);
//         $encrypt .= $newascii;
//     }
//     echo $encrypt . PHP_EOL;
// }


$text = ';8 ?? B%BAL';
for ($i = 0; $i < 400; $i++) {
    $encrypt = '';
    for ($j = 0; $j < strlen($text); $j++) {
        $ascii = ord($text[$j]);
        $newascii = chr($ascii - $i);
        $encrypt .= $newascii;
    }
    echo $encrypt . PHP_EOL;
}

// $text = 'jgnnq"Nc{gd';
// for ($i = 0; $i < 400; $i++) {
//     $encrypt = '';
//     for ($j = 0; $j < strlen($text); $j++) {
//         $ascii = ord($text[$j]);
//         $newascii = chr($ascii - $i);
//         $encrypt .= $newascii;
//     }
//     echo $encrypt . PHP_EOL;
// }
