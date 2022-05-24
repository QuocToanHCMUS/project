<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('slides_model');
		$sl = $this->slides_model->layDuLieuSlide();
		$this->load->model('products_model');
		$pd = $this->products_model->layDuLieuProduct();
		$this->load->model('news_model');
		$tt = $this->news_model->layDuLieuNews();
		$dl = array(
			'mangsl'=>$sl,
			'mangpd'=>$pd,
			'mangtt'=>$tt
		);
		$this->load->view('home_view',$dl);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */