<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include( 'function.php');
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

					$row->comments = $this->home_model->get_comments_from_post($row->postID);			
				}
			}
			$data['allposts'] = $q;
			$this->load->view('common/header');
			$this->load->view('home/home.php',$data);
			//$this->load->view('home/test.php',$data);

		}else{
			$data['msg'] = $msg;
			$data['heading'] = "Login";
			$this->load->view('common/header',$data);
			$this->load->view('myview/default_main_page.php',$data);
		}




}
public function idGenerator(){

$d=date('Y/m/d H:i:s');
$s="";
$i=0;
for(;$d[$i]!=' ';$i++){

if($d[$i]!='/')
	$s=$s.$d[$i];

}
$i++;
for(;$i<strlen($d);$i++){

	if($d[$i]!=':')
	{

		$s=$s.$d[$i];
	}
}
return $s;
}
public function updatePost(){




$max_file_size = 10240*10240; // 200kb
$valid_exts = array('jpeg', 'jpg', 'png', 'gif');
// thumbnail sizes
$sizes = array(300 => 177);
$date=null;

if ($_SERVER['REQUEST_METHOD'] == 'POST' AND isset($_FILES['image'])) {
	if( $_FILES['image']['size'] < $max_file_size ){
		// get file extension

		

		$ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
		if (in_array($ext, $valid_exts)) {
			$date = $this->idGenerator();
			$date=$date.$this->session->userdata('userid');
			

			$_FILES['image']['name']=$date.'.jpg';
			
			foreach ($sizes as $w => $h) {
				$files[] = resize($w, $h);
			
			}
			
		

		} 
	} 
}




$this->load->model('home_model');
if($date){
$this->home_model->insertPost($date);
}
else{
$this->home_model->insertPost();

}


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

public function deleteComment(){
	$this->load->model('home_model');
	$commentid=$this->input->post('commentID');
	$this->home_model->deleteComment($commentid);

	redirect('home/home','refresh');


}
	
public function deletePost(){
	$this->load->model('home_model');
	$commentid=$this->input->post('postID');
	$this->home_model->deletePost($postid);

	redirect('home/home','refresh');



}
	
	
}

?>
