<?php
namespace App\Controllers;

use App\Models\AdminModel;
use Exception;

class Admin extends BaseController{
    public function index()
    {
        $model = new AdminModel();
        $data = [
            'admin' => $model->getAdmin(),
            'title' => 'AdminList'
        ];
        echo view('Templates/header',$data);
        echo view('List/index',$data);
        echo view('Templates/footer');
    }

    public function view($id = null)
    {
        $model = new AdminModel();
        $data['admin'] = $model->getAdmin($id);

        if(empty($data['admin']))
        {
            throw new Exception($id);
        }
        $data['title'] = 'admin-detail';
        $data['account'] = $data['admin']['account'];
        echo view('Templates/header', $data);
        echo view('List/view', $data);
        echo view('Templates/footer');
    }
}