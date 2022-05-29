<?php

namespace App\Controllers; 
use App\Models\PostModel;  

class Home extends BaseController
{ 

    public function index()
    {
             
        $data = array( 
            'title' => 'InstaApp &rsaquo; [Home]',   
            'nama' => session()->get('nama'),
        );
         
        echo view('extend/header', $data); 
        echo view('v_home', $data); 
        echo view('extend/footer', $data); 


    }

    public function post1()
    {
        $Post = new PostModel();
        $post1 = $this->request->getVar('post1');


        echo session()->get('ID');
 /* 
        $Post->insert([ 
                    'id_user ' => session()->get('ID'),
                    'text' => $post1, 
                    'tgl_pembuatan_post' => date('Y-m-d H:i:s'),
                ]);

        return redirect()->to(base_url('/')); */

    }








}
