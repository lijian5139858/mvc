<?php
namespace app\ctrl;
class indexCtrl extends \core\mymvc
{
    public function index(){
//        p('is index');
//        $model = new \core\lib\model();
//        $sql="select * from stu";
//        $model->query("set names utf8");
//        $res = $model->query($sql);
//        p($res->fetchAll());
        $temp = \core\lib\conf::get('CTRL','route');
        $temp = \core\lib\conf::get('ACTION','route');
        $temp = new \core\lib\model();
        $data='hello world';
        $title='试图';
        $this->assign("data",$data);
        $this->assign("title",$title);
        $this->display("index.html");
    }
}