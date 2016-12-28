<?php
header("content-type:text/html;charset=utf-8");
/*
 * 入口文件
 * 1定义常量
 * 2加载数据库
 * 3启动框架
 */
//定义当前框架的主目录
//---------首先定义全局的常量-------------
//echo "123";die;
define('MYMVC',dirname(__FILE__));
//框架核心文件所处的目录
define('CORE',MYMVC.'/core');
//项目文件所处的目录
define('APP',MYMVC.'/app');

define('MODULE','app');
//开启调试模式
define('DEBUG',true);
include "vendor/autoload.php";
if(DEBUG){
//    $whoops = new \Whoops\Run;
//    $errorTitle = '好像出现了错误...--__--';
//    $option = new \Whoops\Handler\PrettyPageHandler;
//    $option->setPageTitle($errorTitle);
//    $whoops->pushHandler($option);
//    $whoops->register();
    ini_set('display_error','on');
}else{
    ini_set('display_error','off');
}


//加载函数库
include CORE.'/common/function.php';
//加载框架核心文件
include CORE.'/mymvc.PHP';
//通过spl_autoload_register实现了类自动加载的功能
spl_autoload_register('\core\mymvc::load');
//启动框架 调用基础类的run方法
\core\mymvc::run();
