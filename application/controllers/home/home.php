<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class home extends CI_Controller{
		function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

public function index($msg=null){
			$this->load->helper('url');

		if($this->session->userdata('username')){
				$this->load->model('signup_model');
			$id=$id = $this->signup_model->getProfileImage();
			$data["pic_url"]='uploads/30_'.$id.'.jpg';
				$data["big_Pic"]='uploads/100_'.$id.'.jpg';
				$fname=$this->session->userdata('fname');
				$lname=$this->session->userdata('lname');
				$fullname=$fname." ".$lname;

				//$another=base_url();
				//$anotherData='http://'.$another.$data["pic_url"];

				$data["fullname"]=$fullname;

			$this->load->model('home_model');
			$q = $this->home_model->get_friends_posts();
			if($q!=NULL)
			{
				foreach($q as $row)
				{
					//echo var_dump($row);
					$row->comments = $this->home_model->get_comments_from_post($row->postID);
					
				}
			}
			$data['allposts'] = $q;
			$this->load->view('common/header');
			$this->load->view('home/home.php',$data);

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
	 //$query=$this->home_model->get_friends_posts();
	




	 




	redirect('home/home','refresh');





}

public function updateComment(){
	$this->load->model('home_model');
	$id=$this->input->post('postID');
	
	$userID=$this->session->userdata('userid');
	$comment=$this->input->post('comment');
	$this->load->model('home_model');
	$this->home_model->insertComment($userID,$id,$comment);

	redirect('home/home','refresh');


}
	
	
}

?>
