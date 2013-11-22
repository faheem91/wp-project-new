<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Alumni_Model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	public function get_current_school($date1=2007,$date2=2017){
		$id = $this->session->userdata('userid');
		
		$this->db->from('users');
		$this->db->join('profile', 'users.userid = profile.userId');
		$this->db->join('education', 'education.userId = profile.userId');
		$this->db->join('institution','education.institutionId = institution.institutionId');
		
		$this->db->where('startDate >=', $date1);
		$this->db->where('endDate <=', $date2);
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