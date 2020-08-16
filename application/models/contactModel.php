<?php
class contactModel extends CI_Model{
	public function createPerson($formArray){
		$this->db->insert('person',$formArray);
	}
	public function createContact($formArray){
		$this->db->insert_batch('contact', $formArray);
	}
	public function getContactType()
	{
		$this->db->select('contact_types.id,contact_types.contact_type') //right
		//        $this->db->select('tbl_contact_type.id', 'tbl_contact_type.contact_type')//syntax error
		->from('contact_types');
		$result = $this->db->get();
		return $result->result_array();
	}
}
