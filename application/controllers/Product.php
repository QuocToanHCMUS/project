<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('products_model');
	}

	public function index()
	{
		$this->load->view('addDataForProduct_view');
	}
	public function addProduct()
	{
		# lấy dữ liệu từ trường tên là slides_topbanner ra
		$dulieu = $this->products_model->layDuLieuProduct();
		# giải mã json
		$dulieu = json_decode($dulieu,true);

		if($dulieu == null){
			echo "du lieu dang trong";
			$dulieu = array();
		}
		# lay du lieu tu view

		# file thi lay tu w3school
		
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["product_image"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		  $check = getimagesize($_FILES["product_image"]["tmp_name"]);
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
		  if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file)) {
		    echo "The file ". htmlspecialchars( basename( $_FILES["product_image"]["name"])). " has been uploaded.";
		  } else {
		    echo "Sorry, there was an error uploading your file.";
		  }
		}

		

		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$button_link = $this->input->post('button_link');
		$button_text = $this->input->post('button_text');
		$product_image = base_url()."uploads/". basename($_FILES["product_image"]["name"]);



		# thêm nội dung vào json dùng hàm array push
		$motproduct = array(
			'title' => $title,
			'description'=>$description,
			'button_link' => $button_link,
			'button_text' => $button_text,
			'product_image' => $product_image );
		array_push($dulieu, $motproduct);


		# mã hóa lại thành json
		$dulieu = json_encode($dulieu);

		# update dữ liệu
		if($this->products_model->updateDuLieuProduct($dulieu))
		{
			$this->load->view('thanhcong');
		}
	}

}

/* End of file Slide.php */
/* Location: ./application/controllers/Slide.php */