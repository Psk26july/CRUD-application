<?php
class User_model extends CI_model{
	function create($formArray)
	{
		$this->db->insert('teacher',$formArray);
	}

	function all(){

		return $teacher = $this->db->get('teacher')->result_array();
	}
 function getUser($id)
 {
 	$this->db->where('id',$id);
 	return $teacher = $this->db->get('teacher')->row_array();
 } 

 function updateUser($id,$formArray)
 {
 	$this->db->where('id',$id);
 	$this->db->update('teacher',$formArray);
 }


 function deleteUser($id)
 {
 	$this->db->where('id',$id);
 	$this->db->delete('teacher');
 }
}
?>