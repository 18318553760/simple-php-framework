<?php
//日志存在文件系统
namespace core\lib\drive\log;

use core\lib\conf;

class file
{
    public $path;

    public function __construct()
    {
        $this->path = conf::get('OPTION', 'log')['PATH'];
    }
    public function log($message, $file = 'log')
    {
        /*
        * 1. 确定文件是否存在 否则新建
        * 2. 写入日志
        */

        if(!is_dir($this->path . date('YmdH'))) {
            mkdir($this->path . date('YmdH'), '0777', true);
        }

        $logFile = $this->path . date('YmdH') . '/' . $file . '.php';
        $message = date('Y-m-d H:i:s') . json_encode($message);

        return file_put_contents($logFile, $message . PHP_EOL, FILE_APPEND);
    }
}
