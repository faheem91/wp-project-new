<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class home extends CI_Controller{
		function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

public function index(){
			$this->load->helper('url');

		if($this->session->userdata('username')){
			$this->load->view('common/header');
			$this->load->view('home/home.php');
		}else{
			$data['msg'] = $msg;
			$data['heading'] = "Login";
			$this->load->view('common/header',$data);
			$this->load->view('myview/default_main_page.php',$data);
		}




}

public function updatePost(){
	$this->load->model('home_model');
	 $this->home_model->insertPost();
	redirect('home/home');





}

public function updateComment(){
	$this->load->model('home_model');
	$id=$this->data->get('postID');
	$userID=$this->data->get('userID');
	$comment=$this->data->get('comment');
	$this->load->model('home_model');
	$this->home_model->insertComment($userID,$id,$comment);




}
	
	
}

?>
