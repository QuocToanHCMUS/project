<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class account_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function layDuLieuAccount()
	{
		$this->db->select('*');
		$this->db->where('tenthuoctinh', 'login');
		$dl = $this->db->get('allvalue');
		$dl = $dl->result_array();

		foreach ($dl as $value) {
			$temp = $value['giatrithuoctinh'];
		}
		return $temp;
	}
	public function updateDuLieuAccount($dulieuupdate)
	{
		# code...
		$dldangmang = array(
			'tenthuoctinh'=>'login',
			'giatrithuoctinh'=>$dulieuupdate
		);
		$this->db->where('tenthuoctinh', 'login');
		return $this->db->update('allvalue', $dldangmang);
	}

}

/* End of file account_model.php */
/* Location: ./application/models/account_model.php */