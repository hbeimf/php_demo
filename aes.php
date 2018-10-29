<?php
// // https://blog.csdn.net/u012560213/article/details/81114602
// require __DIR__ . '/vendor/autoload.php';

// use phpseclib\Crypt\AES;

include 'vendor/autoload.php';

$aes = new \phpseclib\Crypt\AES();

$aes->setKey("asdfghkl;'][poi?");

$plaintext = 'Are you sure you want to set the ratings to expire at a time in the past?Are you sure you want to set the ratings to expire at a time in the past?Are you sure you want to set the ratings to expire at a time in the past?Are you sure you want to set the ratings to expire at a time in the past?Are you sure you want to set the ratings to expire at a time in the past?Are you sure you want to set the ratings to expire at a time in the past?Are you sure you want to set the ratings to expire at a time in the past?';

// $expire_time = time() + 24 * 60 * 60;
// $plaintext = "10009|100|{$expire_time}";

$base64 = base64_encode($aes->encrypt($plaintext));
echo "encode: {$base64}\n";

// echo $aes->decrypt($aes->encrypt($plaintext));

$decode = $aes->decrypt(base64_decode($base64));

echo "decode:{$decode}\n";
