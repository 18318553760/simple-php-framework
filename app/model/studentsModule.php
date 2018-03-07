<?php
namespace app\model;

use core\lib\model;

class studentsModule extends model
{
    public $table = 'students';
    
    public function lists()
    {
        $ret = $this->select($this->table, '*');
        return $ret;
    }

    public function getOne($id)
    {
        $res = $this->get($this->table, '*', array('id' =>$id));

        return $res;
    }

    public function setOne($id, $data)
    {
        return $this->update($this->table, $data, array(
            'id' => $id
        ));
    }

    public function delOne($id)
    {
        return $this->delete($this->table, array(
            'id' => $id
        ));
    }
}
