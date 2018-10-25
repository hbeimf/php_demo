<?php
// // https://blog.csdn.net/u012560213/article/details/81114602
// require __DIR__ . '/vendor/autoload.php';

// use phpseclib\Crypt\AES;

include 'vendor/autoload.php';

$aes = new \phpseclib\Crypt\AES();

$aes->setKey('abcdefghijklmnop');

$plaintext = 'hello world !';

echo $aes->decrypt($aes->encrypt($plaintext));

echo "\n";

// ==========================

$rsa = new \phpseclib\Crypt\RSA();

$keys = $rsa->createKey();
print_r($keys);
extract($keys);

$plaintext = 'terrafrost';

$rsa->loadKey($privatekey);
$ciphertext = $rsa->encrypt($plaintext);

$rsa->loadKey($publickey);
echo $rsa->decrypt($ciphertext);
echo "\n";
