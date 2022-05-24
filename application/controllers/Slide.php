<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Slide extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('slides_model');
	}

	public function index()
	{
		$this->load->view('addDataForSlide_view');
	}
	public function addSlide()
	{
		# lấy dữ liệu từ trường tên là slides_topbanner ra
		$dulieu = $this->slides_model->layDuLieuSlide();
		# giải mã json
		$dulieu = json_decode($dulieu,true);

		if($dulieu == null){
			echo "du lieu dang trong";
			$dulieu = array();
		}
		# lay du lieu tu view

		# file thi lay tu w3school
		
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["slide_image"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		  $check = getimagesize($_FILES["slide_image"]["tmp_name"]);
		  if($check !== false) {
		    echo "File is an image - " . $check["mime"] . ".";
		    $uploadOk = 1;
		  } else {
		    echo "File is not an image.";
		    $uploadOk = 0;
		  }
		}
		if ($uploadOk == 0) {
		  echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		  if (move_uploaded_file($_FILES["slide_image"]["tmp_name"], $target_file)) {
		    echo "The file ". htmlspecialchars( basename( $_FILES["slide_image"]["name"])). " has been uploaded.";
		  } else {
		    echo "Sorry, there was an error uploading your file.";
		  }
		}

		

		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$button_link = $this->input->post('button_link');
		$button_text = $this->input->post('button_text');
		$slide_image = base_url()."uploads/". basename($_FILES["slide_image"]["name"]);



		# thêm nội dung vào json dùng hàm array push
		$motslideanh = array(
			'title' => $title,
			'description'=>$description,
			'button_link' => $button_link,
			'button_text' => $button_text,
			'slide_image' => $slide_image );
		array_push($dulieu, $motslideanh);


		# mã hóa lại thành json
		$dulieu = json_encode($dulieu);

		# update dữ liệu
		if($this->slides_model->updateDuLieuSlide($dulieu))
		{
			$this->load->view('thanhcong');
		}
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

}

/* End of file Slide.php */
/* Location: ./application/controllers/Slide.php */