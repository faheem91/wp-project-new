<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Notifications extends CI_Controller{
		function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index()
	{
	  	echo "hamza ka level";
	} 
	public function getfriendListAJAX(){
	$this->load->helper('url');
	$this->load->model('connection_model');
	$res = $this->connection_model->get_friend_list();
	
$jsonData = '{';
$i=0;
	foreach($res as $friend)
	{


		 $friend->fullname=$friend->fname.' '.$friend->lname;
		 $jsonData .= '"user'.$i.'":{ "imageUrl":"'.$friend->imageUrl.'","fullname":"'.$friend->fullname.'", "userid":"'.$friend->userid.'" },';
		 $i++;
		//echo $friend->userid;
		//echo 'uploads/30_'.$friend->imageUrl .'.jpg';
	}
	
$jsonData = chop($jsonData, ",");
$jsonData .= '}';
echo $jsonData;
}
}

?>
