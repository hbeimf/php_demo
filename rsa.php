<?php
include 'vendor/autoload.php';

$data = "hello world!!";

//私匙加密公式解密
openssl_private_encrypt($data, $encrypted, file_get_contents(__DIR__ . '/../api/config/privatekey.key')); //私钥加密
$encrypted = base64_encode($encrypted); //base64只是为了避免特殊字符
echo $encrypted . "\n"; //加密之后的结果
openssl_public_decrypt(base64_decode($encrypted), $decrypted, file_get_contents(__DIR__ . '/../api/config/publickey.key')); //私钥加密的内容通过公钥可用解密出来
var_dump($decrypted);

// exit;

// //公私加密私匙解密
// openssl_public_encrypt($data, $encrypted, $pu_key); //公钥加密
// $encrypted = base64_encode($encrypted); //base64只是为了避免特殊字符
// // echo $encrypted;exit;//加密之后的结果
// openssl_private_decrypt(base64_decode($encrypted), $decrypted, $pi_key); //私钥解密
// // echo $decrypted,"\n";  //解密之后的结果
