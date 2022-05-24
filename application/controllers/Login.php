<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('login_view');
	}
	public function checkAccount()
	{
		// $this->load->view('login_view');

		$this->load->model('account_model');

		$dl = $this->account_model->layDuLieuAccount();

		$dl = json_decode($dl,true);
		$dl = array('mangdl'=>$dl);
		$dlacc = $dl['mangdl'];

		// echo "<pre>";
		// var_dump($dl);
		// echo "</pre>";

		$email = $this->input->post('email');
		$pass = $this->input->post('password');

		// $this->session->set_userdata('member',$email);

		$toEnd = count($dlacc);
		
		//$last_key = end(array_keys($dlacc));
		foreach ($dlacc as $key => $value) {
			// echo "<pre>";
			// var_dump($value['email']);
			// echo $email.'nè';
			// var_dump($value['password']);
			// echo $pass."nè";
			// echo "</pre>";


			if($email == $value['email']&& $pass==$value['password'])
			{
				$this->session->set_userdata('member',$email);
				if($value['vitri']=='1')
				{
					redirect('Danhsachmuc','refresh');
				}
				else
				{
					// $this->load->view('trangchu');
					// $this->load->view('home_view');
					redirect('Home','refresh');
				}
				// redirect('Danhsachmuc','refresh');
				break;
			}
			else{
				if($key== ($toEnd-1))
				{
					// redirect('Login','refresh');
					// echo "sai";
					$this->load->view('login_view');
				}
				
			}


			
/*
			if($email == $value['email'] && $pass==$value['password'])
			{
				//$this->session->set_userdata('member',$email);
				// if($this->session->userdata('member'))
				// {
				// 	// $this->load->view('trangchu');
				// 	redirect('Danhsachmuc','refresh');
				// }
				// else
				// {
				// 	redirect('Login','refresh');
				// }
				

				redirect('Danhsachmuc','refresh');
				break;			
			}
			else
			{
				redirect('Login','refresh');
				// $this->load->view('login_view');
				// echo "thất bại";
				break;
			}
*/
		}
	}
	public function logout()
	{

		if($this->session->userdata('member'))
		{
			$this->session->unset_userdata('member');
			redirect('Login','refresh');
		}
		else{
			echo "logout thất bại";
		}
	}


}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */