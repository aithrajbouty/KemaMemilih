<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_login;
use App\Controllers\Home;
use App\Controllers\Mainpage;

class Login extends BaseController
{
	public function index()
	{
		return view('v_login');
	}

	public function login_action()
	{
		$mlogin = new M_login();
		//------------
		$npm = $this->request->getPost('npm');
		$password = $this->request->getPost('password');

		$cek = $mlogin->get_data($npm, $password);

		if(($cek['npm']==$npm) && ($cek['password']==$password)){
			session()->set('npm',$cek['npm']);
			session()->set('nama',$cek['nama']);
			session()->set('role',$cek['role']);
			return redirect()->to(base_url('MainpageUniv'));
		}else{
			session()->setFlashdata('gagal','NPM atau Password Salah!');
			return redirect()->to(base_url('Login'));
		}
	}

	public function logout()
	{
		session()->destroy();
		return redirect()->to(base_url('Home'));
	}

	//--------------------------------------------------------------------

}
