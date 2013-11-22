<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class home_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	public function insertPost(){
		$post=$this->security->xss_clean($this->input->post('newPost'));
		$id=$this->session->userdata('userid');


		$data=array(
			'userID'=>$id,
			'description'=>$post
			);
		$this->db->insert('post',$data);
	}
	public function insertComment($userid,$postId,$comment){
		
		$comment=$this->security->xss_clean($comment);
		$data=array(
			'userId'=>$userid,
			'postID'=>$postID,
			'description'=>$comment


			);

$this->db->insert('comment',$data);






	}

		public function get_friends_posts()
	{

		$id = $this->session->userdata('userid');

		$this->db->from('users');
		$this->db->join('connections', 'users.userid = connections.userId2');
		$this->db->join('post', 'post.userid = connections.userId2');
		$this->db->join('comment', 'post.postID = comment.postID');
		$this->db->where('userId1', $id);
		$query = $this->db->get();
			// Let's check if there are any results
			if($query->num_rows >= 1)
			{
			    return $query->result();
			   
			}
			//echo var_dump($query);
			return NULL;
	}

	public function get_comments_from_post($postid)
	{
		$this->db->from('post');
		$this->db->join('comment', 'post.postID = comment.postID');
		$this->db->where('postID', $postid);
		$query = $this->db->get();
			// Let's check if there are any results
			if($query->num_rows >= 1)
			{
			    return $query->result();
			   
			}
			//echo var_dump($query);
			return NULL;
	}





	
}
?>