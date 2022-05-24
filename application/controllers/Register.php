<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('account_model');
	}

	public function index()
	{
		$this->load->view('register_view');
	}
	public function addUser()
	{
		$dulieu = $this->account_model->layDuLieuAccount();

		$dulieu = json_decode($dulieu,true);

		if($dulieu == null){
			echo "du lieu dang trống";
			$dulieu = array();
		}

		$email = $this->input->post('email');
		$pass = $this->input->post('password');
		$pre_pass = $this->input->post('prepassword');
		$sdt = $this->input->post('sdt');

		$vitri = $this->input->post('vitri');

		if($pass!=$pre_pass)
		{
			echo "mật khẩu nhập lại không trùng";
		}
		else
		{
			$motaccount = array(
			'email' => $email,
			'password'=>$pass,
			'prepassword'=>$pre_pass,
			'sdt'=>$sdt,

			'vitri'=>$vitri
			);
			array_push($dulieu, $motaccount);

			$dulieu = json_encode($dulieu);

			if($this->account_model->updateDuLieuAccount($dulieu))
			{
				$this->load->view('thanhcong');
			}
		}

		// $motaccount = array(
		// 	'email' => $email,
		// 	'password'=>$pass,
		// 	'prepassword'=>$pre_pass,
		// 	'sdt'=>$sdt
		// );
		// array_push($dulieu, $motaccount);

		// $dulieu = json_encode($dulieu);

		// if($this->account_model->updateDuLieuAccount($dulieu))
		// {
		// 	$this->load->view('thanhcong');
		// }
	}

}

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */