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

foreach ($keys as $key => $value) {
	# code...
	file_put_contents('./' . $key . '.key', $value);
}

extract($keys);

$plaintext = 'hello world !!!';

$rsa->loadKey($privatekey);
$ciphertext = $rsa->encrypt($plaintext);

// echo $ciphertext . "\n";

$rsa->loadKey($publickey);
echo $rsa->decrypt($ciphertext);
echo "\n";
