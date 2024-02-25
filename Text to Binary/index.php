<?php
echo ord('') . PHP_EOL;
echo ord('+') . PHP_EOL;
echo ord('-') . PHP_EOL;
echo ord('*') . PHP_EOL;
echo ord('/') . PHP_EOL;
echo ord('I') . PHP_EOL;
echo ord('I') . PHP_EOL;
echo chr('0') . PHP_EOL;
echo chr('32') . PHP_EOL;


$arr = [
    'word1' => 'h',
    'word2' => 'e',
    'word3' => 'l',
    'word4' => 'l',
    'word5' => 'o'

];
foreach ($arr as $arr_key => $arr) {
    echo ord($arr);
}
