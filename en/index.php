<?php
// echo md5('hello');
// echo chr(82);
$text = 'Hello world';
for ($i = 0; $i < strlen($text); $i++) {
    $ascii = ord($text[$i]) + 10 . ' ';
    // echo chr($ascii);
    // $newAscii = chr()
}


$encryptText = 'Rovvy*y|vn';
for ($i = 0; $i < 15; $i++) {
    $decryptText = '';
    for ($j = 0; $j < strlen($encryptText); $j++) {
        $ascii =  ord($encryptText[$j]);
        $newAscii = chr($ascii - $i);
        $decryptText = $decryptText . $newAscii;
    }
    echo $decryptText . PHP_EOL;
}
