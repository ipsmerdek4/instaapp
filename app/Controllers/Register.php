<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;  

class Register extends Controller{
    
    public function index()
    {
         
        $data = array( 
            'title' => 'InstaApp &rsaquo; [Register]',  
         );
         
        echo view('extend/header', $data); 
        echo view('v_register', $data); 
        echo view('extend/footer', $data);  
    }


    public function pross()
    {


        if (!$this->validate([ 
                'email' => [
                    'rules' => 'required|min_length[5]|max_length[100] ',
                    'errors' => [
                        'required'   => 'Email Harus diisi.',
                        'min_length' => 'Email Minimal 5 Karakter.',
                        'max_length' => 'Email Maksimal 100 Karakter.',   
                    ]
                ],  
                'namal' => [
                    'rules' => 'required|min_length[5]|max_length[100] ',
                    'errors' => [
                        'required'   => 'Nama Lengkap Harus diisi.',
                        'min_length' => 'Nama Lengkap Minimal 5 Karakter.',
                        'max_length' => 'Nama Lengkap Maksimal 100 Karakter.',   
                    ]
                ],  
                'u_name' => [
                    'rules' => 'required|min_length[8]|max_length[20] ',
                    'errors' => [
                        'required'   => 'Username Harus diisi.',
                        'min_length' => 'Username Minimal 8 Karakter.',
                        'max_length' => 'Username Maksimal 20 Karakter.',   
                    ]
                ],  
                'p_name' => [
                    'rules' => 'required|min_length[8]|max_length[20] ',
                    'errors' => [
                        'required'   => 'Password Harus diisi.',
                        'min_length' => 'Password Minimal 8 Karakter.',
                        'max_length' => 'Password Maksimal 20 Karakter.',   
                    ]
                ],  
            ])) {
                session()->setFlashdata('error', $this->validator->listErrors());
                return redirect()->to(base_url('/register'))->withInput(); 
            } 




        $User = new UserModel();

        echo $email = $this->request->getVar('email');
        $nama = $this->request->getVar('namal');
        $username = $this->request->getVar('u_name');
        $password = $this->request->getVar('p_name');

  




            $User->insert([ 
                        'id' => 0,
                        'email' => $email,
                        'username' => $username, 
                        'password' => password_hash($password, PASSWORD_BCRYPT), 
                        'nama_lengkap' => $nama, 
                        'no_hp' => 0, 
                        'Alamat' => 0, 
                        'picture' => 0, 
                        'level' => 1,
                        'tgl_pembuatan_user' => date('Y-m-d H:i:s'),
                    ]);

            session()->setFlashData("error", "Berhasil Membuat Account");
			return redirect()->to(base_url('/login'));

  


    }








}