<?php
namespace core\lib;

use core\lib\conf;

class route
{
    public $ctrl;
    public $action;

    public function __construct()
    {
        /**
        * 1.隐藏index.php
        * //这个步骤在nginx配置中通过 try_files $uri $uri/ /index.php?$args 已完成
        * //或者在根目录下添加.htaccess文件配置（不是nginx的服务器）
        * 2.获取URL参数部分
        * 3.返回对应控制器和方法
        */
        if (isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/') {
            $path = $_SERVER['REQUEST_URI'];
            $pathArr = explode('/', trim($path, '/'));
            if (isset($pathArr[0])) {
                $this->ctrl = $pathArr[0];
                unset($pathArr[0]);
            }
            if (isset($pathArr[1])) {
                $this->action = $pathArr[1];
                unset($pathArr[1]);
            } else {
                $this->action = conf::get('ACTION', 'route');
            }
            //更长地址的解析
            $count = count($pathArr) + 2;
            $i = 2;
            while ($i < $count) {
                if (isset($pathArr[$i + 1])) {
                    $_GET[$pathArr[$i]] = $pathArr[$i + 1];
                }
                $i += 2;
            }
        } else {
            $this->ctrl = conf::get('CTRL', 'route');
            $this->action = conf::get('ACTION', 'route');
        }
    }
}
