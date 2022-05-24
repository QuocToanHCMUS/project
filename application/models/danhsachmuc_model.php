<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class danhsachmuc_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getAllData()
	{
		$this->db->select('*');
		$dulieu = $this->db->get('allvalue');
		$dulieu = $dulieu->result_array();
		return $dulieu;
	}
	public function getDataById($key)
	{
		$this->db->select('*');
		$this->db->where('id',$key);
		$dulieu = $this->db->get('allvalue');
		$dulieu = $dulieu->result_array();
		return $dulieu;
	}

}

/* End of file danhsachmuc_model.php */
/* Location: ./application/models/danhsachmuc_model.php */