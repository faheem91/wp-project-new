<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Notifications extends CI_Controller{
		function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index(){
		// Load our view to be displayed
		// to the user
		$this->load->helper('url');

		if($this->session->userdata('username')){
			$this->load->model('signup_model');
		// Validate the user can login
			$id = $this->signup_model->getProfileImage();
			
				$data["pic_url"]='uploads/30_'.$id.'.jpg';
				$fname=$this->session->userdata('fname');
				$lname=$this->session->userdata('lname');
				$fullname=$fname." ".$lname;
				//$another=base_url();
				//$anotherData='http://'.$another.$data["pic_url"];

				$data["fullname"]=$fullname;
				
				$data["list"]=NULL;


			$this->load->view('common/header');
			$this->load->view('search/main_search.php',$data);
		}else{
			$data['msg'] = $msg;
			$data['heading'] = "Login";
			$this->load->view('common/header');
			//$this->load->view('loginView/login_view', $data)
			$this->load->view('myview/default_main_page.php');
		}
		//$this->load->view('common/footer',$data);
	}
}

?>
