<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Alumni extends CI_Controller{
		function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	

public function index(){


$this->load->helper('url');

		if($this->session->userdata('username')){
				$this->load->model('signup_model');
		// Validate the user can login
		$id = $this->signup_model->getProfileImage();
		$date1=2007;
		$date2=2017;
			$fname=$this->session->userdata('fname');
				$lname=$this->session->userdata('lname');
				$fullname=$fname." ".$lname;
				//$another=base_url();
				//$anotherData='http://'.$another.$data["pic_url"];

				$data["fullname"]=$fullname;
			$data["pic_url"]='uploads/30_'.$id.'.jpg';
			$this->load->model('alumni_model');
			$x = $this->alumni_model->get_current_school($date1,$date2);
			$data['list'] = $x->result();
			$pCount=0;
			$iCount=0;
			$fCount=0;

			if($x!=null)
			{
				$total_alumni = $x->num_rows;
				foreach($x->result() as $school)
				{
					$data['uni_name']= $school->name; 
					if($school->Country == 'Pakistan')
					{
						$pCount++;
					}
					if($school->Country == 'India')
					{
						$iCount++;
					}
					if($school->Country == 'France')
					{
						$fCount++;
					}
					
				}
				$total_uni = $pCount + $iCount + $fCount;
				$pCount = ($pCount/$total_uni)*100;
				$iCount = ($iCount/$total_uni)*100;
				$fCount = ($fCount/$total_uni)*100;
				$data['pCount'] = $pCount;
				$data['iCount'] = $iCount;
				$data['fCount'] = $fCount;

			//$this->alumni_model->get_school_info($x['institutionId']);
			$this->load->view('common/header');
			$this->load->view('search/find_Alumni.php',$data);
		}
		}
		else
		{
			$data['msg'] = $msg;
			$data['heading'] = "Login";
			$this->load->view('common/header');
			//$this->load->view('loginView/login_view', $data)
			$this->load->view('myview/default_main_page.php');
		}
}








public function findAlumni(){


$this->load->helper('url');

		if($this->session->userdata('username')){
				$this->load->model('signup_model');
		// Validate the user can login
		$id = $this->signup_model->getProfileImage();
		$date1=$this->input->post('startDate');
		$date2=$this->input->post('endDate');
			$fname=$this->session->userdata('fname');
				$lname=$this->session->userdata('lname');
				$fullname=$fname." ".$lname;
				//$another=base_url();
				//$anotherData='http://'.$another.$data["pic_url"];

				$data["fullname"]=$fullname;
			$data["pic_url"]='uploads/30_'.$id.'.jpg';
			$this->load->model('alumni_model');
			$x = $this->alumni_model->get_current_school($date1,$date2);
			$pCount=0;
			$iCount=0;
			$fCount=0;

			if($x!=null)
			{
				$total_alumni = $x->num_rows;
				foreach($x->result() as $school)
				{
					$data['uni_name']= $school->name; 
					if($school->Country == 'Pakistan')
					{
						$pCount++;
					}
					if($school->Country == 'India')
					{
						$iCount++;
					}
					if($school->Country == 'France')
					{
						$fCount++;
					}
					
				}
				$total_uni = $pCount + $iCount + $fCount;
				$pCount = ($pCount/$total_uni)*100;
				$iCount = ($iCount/$total_uni)*100;
				$fCount = ($fCount/$total_uni)*100;
				$data['pCount'] = $pCount;
				$data['iCount'] = $iCount;
				$data['fCount'] = $fCount;

			//$this->alumni_model->get_school_info($x['institutionId']);
			/*$this->load->view('common/header');
			$this->load->view('search/find_Alumni.php',$data);
			*/
			echo $data;
		}
		}
		else
		{
			$data['msg'] = $msg;
			$data['heading'] = "Login";
			$this->load->view('common/header');
			//$this->load->view('loginView/login_view', $data)
			$this->load->view('myview/default_main_page.php');
		}
}










}

?>
