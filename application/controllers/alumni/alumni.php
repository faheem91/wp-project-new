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

				$data["pic_url"]='uploads/30_'.$id.'.jpg';
				//$another=base_url();
				//$anotherData='http://'.$another.$data["pic_url"];

				



			$this->load->view('common/header');
			$this->load->view('search/find_Alumni.php',$data);
		}else{
			$data['msg'] = $msg;
			$data['heading'] = "Login";
			$this->load->view('common/header');
			//$this->load->view('loginView/login_view', $data)
			$this->load->view('myview/default_main_page.php');
		}
}



}

?>
