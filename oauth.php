<?php
// ============ 密码授权令牌
// https://laravelacademy.org/post/8298.html
// =======================================================================

// laravel 密码授权令牌授权oauth2.0
// https://my.oschina.net/u/2485194/blog/520753
// https://laravelacademy.org/post/8298.html
include 'vendor/autoload.php';

$http = new \GuzzleHttp\Client();
// $ php artisan passport:client --password

//  What should we name the password grant client? [Laravel Password Grant Client]:
//  > PasswordAppTest

// Password grant client created successfully.
// Client ID: 8
// Client Secret: 2xaZ4L0OWajXaMT6mcM72927sFE2cTYq8viTHj3X

$response = $http->post('http://code.demo.com/oauth/token', [
	'form_params' => [
		'grant_type' => 'password',
		'client_id' => 8,
		'client_secret' => '2xaZ4L0OWajXaMT6mcM72927sFE2cTYq8viTHj3X',
		'username' => 'ttt@qq.com',
		'password' => '123456789',
		'scope' => '',
	],
]);
echo $response->getBody();

echo "\n =============================\n\n";

?>