<?php
include 'vendor/autoload.php';

$rsa = new \phpseclib\Crypt\RSA();

// $keys = $rsa->createKey();

// extract($keys);

// echo base64_encode($ciphertext) . "\n";

$str = "mq/JeBBgQQK3L8FeMsRhw8VtTcWlrPjxeYmL5y67lWIyYzmk7maGhWP0fFsrkiP5FEMZVo+hOm+VjIn0O3pZLNCzDZfNoeb6SwfM61lRIGEN2gM73DTyQMLCerEKrj5znbG+3i+FmbwCwIo7i0HHuhVA+/IVjWoPXNDv8QWdUgM=";

$rsa->loadKey(file_get_contents(__DIR__ . '/../api/config/publickey.key'));
echo $rsa->decrypt(base64_decode($str));
echo "\n";
