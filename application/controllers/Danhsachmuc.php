<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Danhsachmuc extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('danhsachmuc_model');
	}

	public function index()
	{
		$ketqua = $this->danhsachmuc_model->getAllData();
		$ketqua = array('mangketqua'=>$ketqua);

		$this->load->view('danhsachmuc_view',$ketqua);
	}
	// public function muc_edit($idnhanvao)
	// {
	// 	$ketqua = $this->danhsachmuc_model->getDataById($idnhanvao);
	// 	$ketqua = array('dulieukq' => $ketqua);
	// 	if($idnhanvao =='1')
	// 	{
	// 		$this->load->view('edit_acount_view', $ketqua);
	// 	}
	// 	else
	// 	{
	// 		echo "hiện view khác";
	// 	}
	// 	//$this->load->view('edit_acount_view', $ketqua);
	// }
	public function muc_edit($idnhanvao)
	{
		$ketqua = $this->danhsachmuc_model->getDataById($idnhanvao);
		$ketqua = array('dulieukq' => $ketqua);
		if($idnhanvao =='login')
		{
			// echo "<pre>";
			// var_dump($ketqua);
			// echo "</pre>";
			redirect('Edit_cacdanhmuc/allAccount','refresh');
		}
		else if($idnhanvao =='slides_topbanner')
		{
			// echo "top banner";
			redirect('Edit_cacdanhmuc/allSlides','refresh');
		}
		else if($idnhanvao =='top_products')
		{
			// echo "top banner";
			redirect('Edit_cacdanhmuc/allProducts','refresh');
		}
		else if($idnhanvao =='news')
		{
			// echo "top banner";
			redirect('Edit_cacdanhmuc/allNews','refresh');
		}
		else
		{
			echo "hiện view khác";
		}
		//$this->load->view('edit_acount_view', $ketqua);
	}

}

/* End of file danhsachmuc.php */
/* Location: ./application/controllers/danhsachmuc.php */