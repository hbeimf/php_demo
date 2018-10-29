<?php
// https://laravelacademy.org/post/8298.html
// http://www.cnblogs.com/qq350760546/p/8041365.html
// http://code.demo.com/oauth/clients

// =====================================================================
// 以上是code授权oauth2.0
// https://www.jianshu.com/p/3df8b2b6d533

// 这里先新建立一个用户
// 然后创建一个新的客户端绑定这个用户
# php artisan passport:client

// 如果你想定义刚才那个授权界面，可以
// 发布的视图位于 resources/views/vendor/passport：
# php artisan vendor:publish --tag=passport-views
