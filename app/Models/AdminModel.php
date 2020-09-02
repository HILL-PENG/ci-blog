<?php
namespace App\Models;

class AdminModel extends \CodeIgniter\Model
{
    protected $table = 'admin';

    public function getAdmin($id = false)
    {
        if($id === false)
        {
            return $this->findAll();
        }

        return $this->asArray()->where(['id'=>$id])->first();
    }
}