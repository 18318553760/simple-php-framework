<?php
namespace app\ctrl;

use core\lib\model;
use app\model\guestbookModel;

class indexCtrl extends \core\imooc
{
    //所有留言
    public function index()
    {
        $model = new guestbookModel();
        $data = $model->all();
        $this->assign('data', $data);
        $this->display('index.html');
    }

    //添加留言
    public function add()
    {
        $this->display('add.html');
    }

    //保存留言
    public function save()
    {
        $data['title'] = post('title');
        $data['content'] = post('content');
        $data['created'] = time();

        $model = new guestbookModel();
        $ret = $model->addOne($data);

        if($ret) {
            jump("/");
        } else {
            p('error');
        }
    }

    public function del()
    {
        $id = get('id');
        if ($id) {
            $model = new guestbookModel();
            $ret = $model->delOne($id);
            if ($ret) {
                jump('/');
            } else {
                exit('删除失败');
            }
        } else {
            exit('参数错误');
        }
    }

        /*
        $data = 'Hello World!';

        $this->assign('data', $data);

        $this->display('index.html');
        /*
        /*
        $model = new \app\model\studentsModule();

        $res = $model->lists();
        $yue = $model->getOne(3);

        $data = array(
            'name' => 'honghong',
            'age' => '20'
        );
        $set = $model->setOne(2, $data);

        $del = $model->delOne(2);
        dump($del);
        */
        /*
        $model = new model();

        $select = $model->select('students', '*');

        $data = array(
            'id' => '3',
            'name' => 'xiaoyue',
            'age' => '22'
        );

        $insert = $model->insert('students', $data);
        */
        //目前insert会返回一个queryString的插入语句
        /*
        $title = '视图文件';
        $data = 'hello world!';
        $this->assign('data', $data);
        $this->assign('title', $title);
        $this->display('index.html');
        */

        /*
        * 以下数据库查询
        $model = new \core\lib\model();
        $sql = "select * from students";
        $ret = $model->query($sql);
        p($ret->fetchAll());
        */

    public function test()
    {
        $data = 'test';
        $this->assign('data', $data);
        $this->display('test.html');
    }
}
