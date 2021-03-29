<?php
/*
使用前请注意务必设置好白名单
*/
header('Content-Type:application/json; charset=utf-8');
//防跨域调用
$allow_origin = array(
	//域名白名单
    'http://jm669028y.gitee.io/index',
    'http://jm669028y.gitee.io/index'
);
header('Access-Control-Allow-Origin:'.$allow_origin);
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers:x-requested-with,content-type');

$jsonlist = file_get_contents("https://www.bing.com/HPImageArchive.aspx?format=js&idx=0&n=8");
echo $_GET["callback"].$jsonlist;
?>