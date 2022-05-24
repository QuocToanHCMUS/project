<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Edit_cacdanhmuc extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		echo 'edit các danh muc';
	}
	public function allAccount()
	{
		$this->load->model('account_model');
		$dl = $this->account_model->layDuLieuAccount();

		$dl = json_decode($dl,true);
		$dl = array('mangdl' => $dl);

		$this->load->view('edit_acount_view', $dl);
	}
	public function editAccount()
	{
		$email = $this->input->post('email');
		$pass = $this->input->post('password');
		$pre_pass = $this->input->post('prepassword');
		$sdt = $this->input->post('sdt');

		$vitri = $this->input->post('vitri');


		$accounts = array();

		for($i=0;$i<count($email);$i++)
		{
			$temp = array();
			$temp['email'] = $email[$i];
			$temp['password'] = $pass[$i];
			$temp['prepassword'] = $pre_pass[$i];
			$temp['sdt'] = $sdt[$i];
			$temp['vitri'] = $vitri[$i];
			array_push($accounts, $temp); 
		}

		$accounts = json_encode($accounts);

		$this->load->model('account_model');
		if($this->account_model->updateDuLieuAccount($accounts))
		{
			$this->load->view('edit_thanhcong_view');
		}
		else
		{
			$this->load->view('loi');
		}
	}
	//slide
	public function allSlides()
	{
		$this->load->model('slides_model');
		$dl = $this->slides_model->layDuLieuSlide();

		$dl = json_decode($dl,true);
		$dl = array('mangdl' => $dl);

		$this->load->view('edit_slides_view', $dl);
	}
	public function editSlide()
	{
		// lấy về nội dung tu view
		$title = $this->input->post('title'); //đay là mảng
		$description = $this->input->post('description');
		$button_link = $this->input->post('button_link');
		$button_text = $this->input->post('button_text');

		

		// lấy về tất cả các ảnh, rồi upload
		$pictures = $_FILES["slide_image"]["name"]; //lưu trên file
		$fileanh = $_FILES["slide_image"]["tmp_name"];// file thật

		$slide_image = array();

		$slide_image_old = $this->input->post('slide_image_old');
		// duyệt mảng để lấy tên từng file
		for ($i=0; $i < count($pictures); $i++) { 
			# code...

			

			if(empty($pictures[$i]))
			{
				$slide_image[$i] = $slide_image_old[$i];
			}
			else{
				$link = 'uploads/'.$pictures[$i];
				move_uploaded_file($fileanh[$i], $link);
				$slide_image[$i] = base_url()."uploads/".$pictures[$i];
			}

		}
			//$slide_image chứa toàn bộ tên file mình cần

			
		// tạo 1 mảng "tatcaslide"
		$tatcaslide = array();

		// insert từng phần tử vào mảng tatcaslide
		for ($i=0; $i <count($title) ; $i++) { 
			# code...
			$tam = array();
			$tam['title'] = $title[$i];
			$tam['description'] = $description[$i];
			$tam['button_link'] = $button_link[$i];
			$tam['button_text'] = $button_text[$i];
			$tam['slide_image'] = $slide_image[$i];
			array_push($tatcaslide, $tam); 
		}

			// echo "<pre>";
			// var_dump($tatcaslide);
			// echo "</pre>";

		// dua thanh json
		$tatcaslide = json_encode($tatcaslide);

		// goi model update du lieu
		$this->load->model('slides_model');
		if($this->slides_model->updateDuLieuSlide($tatcaslide))
		{
			$this->load->view('thanhcong');
		}
		else{
			echo "thất bại";
		}
	}
	public function allProducts()
	{
		$this->load->model('products_model');
		$dl = $this->products_model->layDuLieuProduct();

		$dl = json_decode($dl,true);
		$dl = array('mangdl' => $dl);

		$this->load->view('edit_products_view', $dl);
	}
	public function editProduct()
	{
		// lấy về nội dung tu view
		$title = $this->input->post('title'); //đay là mảng
		$description = $this->input->post('description');
		$button_link = $this->input->post('button_link');
		$button_text = $this->input->post('button_text');

		

		// lấy về tất cả các ảnh, rồi upload
		$pictures = $_FILES["product_image"]["name"]; //lưu trên file
		$fileanh = $_FILES["product_image"]["tmp_name"];// file thật

		$product_image = array();

		$product_image_old = $this->input->post('product_image_old');
		// duyệt mảng để lấy tên từng file
		for ($i=0; $i < count($pictures); $i++) { 
			# code...

			

			if(empty($pictures[$i]))
			{
				$product_image[$i] = $product_image_old[$i];
			}
			else{
				$link = 'uploads/'.$pictures[$i];
				move_uploaded_file($fileanh[$i], $link);
				$product_image[$i] = base_url()."uploads/".$pictures[$i];
			}

		}
			//$slide_image chứa toàn bộ tên file mình cần

			
		// tạo 1 mảng "tatcaslide"
		$tatcaproduct = array();

		// insert từng phần tử vào mảng tatcaslide
		for ($i=0; $i <count($title) ; $i++) { 
			# code...
			$tam = array();
			$tam['title'] = $title[$i];
			$tam['description'] = $description[$i];
			$tam['button_link'] = $button_link[$i];
			$tam['button_text'] = $button_text[$i];
			$tam['product_image'] = $product_image[$i];
			array_push($tatcaproduct, $tam); 
		}

			// echo "<pre>";
			// var_dump($tatcaslide);
			// echo "</pre>";

		// dua thanh json
		$tatcaproduct = json_encode($tatcaproduct);

		// goi model update du lieu
		$this->load->model('products_model');
		if($this->products_model->updateDuLieuProduct($tatcaproduct))
		{
			$this->load->view('thanhcong');
		}
		else{
			echo "thất bại";
		}
	}

	//news
	public function allNews()
	{
		$this->load->model('news_model');
		$dl = $this->news_model->layDuLieuNews();

		$dl = json_decode($dl,true);
		$dl = array('mangdl' => $dl);

		$this->load->view('edit_news_view', $dl);
	}

	public function editNews()
	{
		// lấy về nội dung tu view
		$title = $this->input->post('title');
		//$description = $this->input->post('description');
		$button_link = $this->input->post('button_link');
		$iddanhmuc = $this->input->post('iddanhmuc');
		$noidungtin = $this->input->post('noidungtin');
		$button_text = $this->input->post('button_text');

		

		// lấy về tất cả các ảnh, rồi upload
		$pictures = $_FILES["news_image"]["name"]; //lưu trên file
		$fileanh = $_FILES["news_image"]["tmp_name"];// file thật

		$news_image = array();

		$news_image_old = $this->input->post('news_image_old');
		// duyệt mảng để lấy tên từng file
		for ($i=0; $i < count($pictures); $i++) { 
			# code...

			

			if(empty($pictures[$i]))
			{
				$news_image[$i] = $news_image_old[$i];
			}
			else{
				$link = 'uploads/'.$pictures[$i];
				move_uploaded_file($fileanh[$i], $link);
				$news_image[$i] = base_url()."uploads/".$pictures[$i];
			}

		}
			//$slide_image chứa toàn bộ tên file mình cần



		//$pictures = $_FILES["slide_image"]["name"]; //lưu trên file
		//$fileanh = $_FILES["slide_image"]["tmp_name"];// file thật

		// $noidungtin_old = array();

		$noidungtin_old = $this->input->post('noidungtin_old');
		$noidungtin = $this->input->post('noidungtin');
		// duyệt mảng để lấy tên từng file
		// for ($i=0; $i < count($pictures); $i++) { 
		// 	# code...

			

			if($noidungtin=="")
			{
				$noidungtin = $noidungtin_old;
			}
			else{
				$noidungtin = $this->input->post('noidungtin');
			}

		// }
			
		// tạo 1 mảng "tatcaslide"
		$tatcanews = array();

		// insert từng phần tử vào mảng tatcaslide
		for ($i=0; $i <count($title) ; $i++) { 
			# code...
			$tam = array();
			$tam['title'] = $title[$i];
			$tam['iddanhmuc'] = $iddanhmuc[$i];
			$tam['noidungtin'] = $noidungtin[$i];
			$tam['button_link'] = $button_link[$i];
			$tam['button_text'] = $button_text[$i];
			$tam['news_image'] = $news_image[$i];
			array_push($tatcanews, $tam); 
		}

			// echo "<pre>";
			// var_dump($tatcaslide);
			// echo "</pre>";

		// dua thanh json
		$tatcanews = json_encode($tatcanews);

		// goi model update du lieu
		$this->load->model('news_model');
		if($this->news_model->updateDuLieuNews($tatcanews))
		{
			$this->load->view('thanhcong');
		}
		else{
			echo "thất bại";
		}
	}
}

/* End of file Edit_cacdanhmuc.php */
/* Location: ./application/controllers/Edit_cacdanhmuc.php */