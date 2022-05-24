<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
	}

	public function index()
	{
		$this->load->view('addDataForNews_view');
	}
	public function addNews()
	{
		# lấy dữ liệu từ trường tên là slides_topbanner ra
		$dulieu = $this->news_model->layDuLieuNew();
		# giải mã json
		$dulieu = json_decode($dulieu,true);

		if($dulieu == null){
			echo "du lieu dang trong";
			$dulieu = array();
		}
		# lay du lieu tu view

		# file thi lay tu w3school
		
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["news_image"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		  $check = getimagesize($_FILES["news_image"]["tmp_name"]);
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
		  if (move_uploaded_file($_FILES["news_image"]["tmp_name"], $target_file)) {
		    echo "The file ". htmlspecialchars( basename( $_FILES["news_image"]["name"])). " has been uploaded.";
		  } else {
		    echo "Sorry, there was an error uploading your file.";
		  }
		}

		

		$title = $this->input->post('title');
		//$description = $this->input->post('description');
		$button_link = $this->input->post('button_link');
		$iddanhmuc = $this->input->post('iddanhmuc');
		$noidungtin = $this->input->post('noidungtin');
		$button_text = $this->input->post('button_text');
		$news_image = base_url()."uploads/". basename($_FILES["news_image"]["name"]);



		# thêm nội dung vào json dùng hàm array push
		$motnews = array(
			'title' => $title,
			'iddanhmuc'=>$iddanhmuc,
			'noidungtin'=>$noidungtin,
			'button_link' => $button_link,
			'button_text' => $button_text,
			'news_image' => $news_image );
		array_push($dulieu, $motnews);


		# mã hóa lại thành json
		$dulieu = json_encode($dulieu);

		# update dữ liệu
		if($this->news_model->updateDuLieuNews($dulieu))
		{
			$this->load->view('thanhcong');
		}
	}

}

/* End of file Slide.php */
/* Location: ./application/controllers/Slide.php */