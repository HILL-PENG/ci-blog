<?php namespace App\Controllers;

use Exception;

class Page extends BaseController
{
    public function index()
    {
        echo "Page";
    }

    public function view($page = 'home')
    {
        if ( ! file_exists(APPPATH.'/Views/Page/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                throw new Exception();
        }
    
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $data['hugh'] = "HUGH";
        echo view('Templates/Header', $data);
        echo view('Page/'.$page, $data);
        echo view('Templates/Footer', $data);
    }
}