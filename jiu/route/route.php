<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------



Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});

Route::get('hello/[:name]', 'index/hello');

// Route::get('server','admin/unit/server');
// Route::get('user_list', 'admin/user/user_list');

Route::group('',function(){
	Route::get('user_list','admin/user/user_list');
})->middleware('Login');
