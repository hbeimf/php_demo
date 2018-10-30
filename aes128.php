<?php
/*
+--------------------------------------------------------------------------
|   由于在php7.1之后mcrypt_encrypt会被废弃，因此使用openssl_encrypt方法来替换
|   ========================================
|   by Focus
|   ========================================
|
| https://blog.csdn.net/liuxin_0725/article/details/81085201
+---------------------------------------------------------------------------
 */
class OpensslEncryptHelper {
	/**向量
		     * @var string
	*/
	const IV = "1234567890123412"; //16位
	/**
	 * 默认秘钥
	 */
	const KEY = '201707eggplant99'; //16位

	/**
	 * 解密字符串
	 * @param string $data 字符串
	 * @param string $key 加密key
	 * @return string
	 */
	public static function decryptWithOpenssl($data, $key = self::KEY, $iv = self::IV) {
		return openssl_decrypt(base64_decode($data), "AES-128-CBC", $key, OPENSSL_RAW_DATA, $iv);
	}

	/**
	 * 加密字符串
	 * 参考网站： https://segmentfault.com/q/1010000009624263
	 * @param string $data 字符串
	 * @param string $key 加密key
	 * @return string
	 */
	public static function encryptWithOpenssl($data, $key = self::KEY, $iv = self::IV) {
		return base64_encode(openssl_encrypt($data, "AES-128-CBC", $key, OPENSSL_RAW_DATA, $iv));
	}

}

$str = "hello world!";
$encode = OpensslEncryptHelper::encryptWithOpenssl($str);
echo "encode:{$encode} \n";

$encode = "qZgKvjKt9CE7y9i4nPW+Kp0qlSJVNQUZcs9Stw+Sj02hLMIh7I6Q5td+hkiQ82LQuWNZB8FfY/7C76b6yFLN2zvynXXNk7HHVhIHomib7a+oQTvL5qK3ZN7kcUQjFT5YBaBUi/i1PbMhYoeIZBAgC9xWezXA+HsatQQJ8gidU9Q=";
$decode = OpensslEncryptHelper::decryptWithOpenssl($encode);
echo "decode:{$decode} \n";
