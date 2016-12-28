<?php
namespace core\lib\drive\log;
//日志存在文件系统中
use core\lib\conf;

class file
{
    //日志的存储位置
    public $path;
    public function __construct()
    {
        $conf = conf::get('OPTION','log');
        $this->path = $conf['PATH'];
    }

    public function log($message,$file = 'log'){
        /*
         * 确定文件的存储位置
         * 新建文件
         * 写入日志
         */
        if(!is_dir($this->path)){
            mkdir($this->path,'0777',true);
        }
        chmod($this->path,0777);
        return file_put_contents($this->path.date('Ymd').$file.'.php',date('Y-m-d H:i:s').json_encode($message).PHP_EOL,FILE_APPEND);
    }
}