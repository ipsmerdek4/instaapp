<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;  

class Login extends Controller{


    private $google_client=NULL;
    function __construct(){
		require_once APPPATH. "libraries/vendor/autoload.php"; 
        $this->google_client = new \Google_Client();
        $this->google_client->setClientId('250103246997-3goh6vtugh87hqffgstbq4slgsi7855a.apps.googleusercontent.com'); //masukkan ClientID anda 
        $this->google_client->setClientSecret('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'); //masukkan Client Secret Key anda
        $this->google_client->setRedirectUri('http://localhost:8080/login/v'); //Masukkan Redirect Uri anda
        $this->google_client->addScope('email');
        $this->google_client->addScope('profile'); 

	}

    public function index()
    {
         
        $data = array( 
            'title' => 'InstaApp &rsaquo; [Login]',  
            'google_button' => '<a href="'.$this->google_client->createAuthUrl().'" ><img src="'.base_url().'/img/google_logo.png" alt="Login With Google" style="width:200px;" class="border border-primary"></a>',
        );
         
        echo view('extend/header', $data); 
        echo view('v_login', $data); 
        echo view('extend/footer', $data); 


    }

    public function login_manual()
    {
        $User = new UserModel();

        $username = $this->request->getVar('u_name');
        $password = $this->request->getVar('p_name');

        if (( $username == "0") || ($username == "")) {
            session()->setFlashdata('error', ' <b style="text-transform: capitalize;letter-spacing:1px;">Username Tidak Tersedia.</b> ');
            return redirect()->to(base_url('/login'))->withInput(); 
        }elseif (( $password == "0")||( $password == "")) {
            session()->setFlashdata('error', ' <b style="text-transform: capitalize;letter-spacing:1px;">Password Tidak Tersedia.</b> ');
            return redirect()->to(base_url('/login'))->withInput(); 
        }else{
            $DataUser = $User->where([
                                    'username' => $username,
                                ])->first();
        }

 
         if($DataUser){
                if (password_verify($password, $DataUser->password)) {
                    
                         session()->set([
                                'nama' => $DataUser->nama_lengkap,
                                'ID' => $DataUser->id_user,
                                'level' => $DataUser->level,
                                'logged_in' => TRUE
                        ]); 
                        return redirect()->to(base_url('/'));

                } else {
                        session()->setFlashdata('error', ' <b style="text-transform: capitalize;letter-spacing:1px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;Password Salah.</b> ');
                        return redirect()->to(base_url('/login'))->withInput(); 
                }
         }else{
            session()->setFlashdata('error', ' <b style="text-transform: capitalize;letter-spacing:1px;">Username Dan Password Anda Tidak<br>ada di Data Kami.<br> Silahkan Ulangi Lagi.</b> ');
            return redirect()->to(base_url('/login'))->withInput(); 
         }



    }



    public function login()
    {
        $User = new UserModel();
        $token = $this->google_client->fetchAccessTokenWithAuthCode($this->request->getVar('code'));
        if(!isset($token['error'])){ 
 
			$googleService = new \Google_Service_Oauth2($this->google_client);
			$data = $googleService->userinfo->get();
			$currentDateTime = date("Y-m-d H:i:s");
			    //echo "<pre>"; print_r($data);die;
			$userdata=array();
            $DataUser = $User->where([
                                            'id' => $data['id'],
                                        ])->first();

            if($DataUser){
                //echo "<pre>"; print_r($data);die;
                    $dataUsersup = [ 
                        'nama_lengkap'      => $data['name'],
                        'picture'    => $data['picture'],  
                        'tgl_pembuatan_user' => date('Y-m-d H:i:s'),
                    ];   
                    $User->update('id_user', $dataUsersup);
                    session()->set([
                                    'nama' => $DataUser->nama_lengkap,
                                    'ID' => $DataUser->id_user,
                                    'level' => $DataUser->level,
                                    'logged_in' => TRUE
                                ]);  
 			        return redirect()->to(base_url('/'));
            }else{
                 $User->insert([ 
                                    'id' => $data['id'],
                                    'email' => $data['email'],
                                    'username' => 0, 
                                    'password' => 0, 
                                    'nama_lengkap' => $data['name'], 
                                    'no_hp' => 0, 
                                    'Alamat' => 0, 
                                    'picture' => $data['picture'], 
                                    'level' => 1,
                                    'tgl_pembuatan_user' => date('Y-m-d H:i:s'),
                                ]);
                    session()->set([
                                'nama' => $DataUser->nama_lengkap,
                                'ID' => $DataUser->id_user,
                                'level' => $DataUser->level,
                                'logged_in' => TRUE
                    ]);  
 			        return redirect()->to(base_url('/'));
            } 

		}else{
			session()->setFlashData("Error", "Something went Wrong");
			return redirect()->to(base_url('/login'));
		}
		//Successfull Login
		//return redirect()->to(base_url()."/profile");



    }



    function logout(){
		session()->remove('logged_in');
		session()->remove('level');
		session()->remove('ID');
		session()->remove('nama');
        
        return redirect()->to(base_url('/login'));

        
        /* 


		if(!(session()->get('LoggedUserData') && session()->get('AccessToken') )){
			session()->setFlashData("Success", "Logout Successful");
			return redirect()->to(base_url());
		}else{
			session()->setFlashData("Error", "Failed to Logout, Please Try Again");
			return redirect()->to(base_url()."/profile");
		} */
	}





}