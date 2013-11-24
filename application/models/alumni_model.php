<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Alumni_Model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	public function get_school_name($id){
		$this->db->from('profile');
		$this->db->join('education', 'education.userId = profile.userId AND profile.userId ='.$id);
		$query = $this->db->get();
		
		return $query->row()->institutionId;
	}
	public function get_current_school($date1=2006,$date2=2017){
		$id = $this->session->userdata('userid');
		
		$schoolname = $this->get_school_name($id);
		$this->db->from('users');
		$this->db->join('profile', 'users.userid = profile.userId');
		$this->db->join('education', 'education.userId = profile.userId');
		$this->db->join('institution','education.institutionId = institution.institutionId');
		
		$this->db->where('startDate >=', $date1);
		$this->db->where('endDate <=', $date2);
		$this->db->where('institution.institutionId', $schoolname);
		$this->db->where('education.userid !=', $id);
		$query = $this->db->get();
			// Let's check if there are any results
			if($query->num_rows >= 1)
			{
			    return $query;
			}
			//echo var_dump($query);
			return NULL;
		
}
	
}
?>