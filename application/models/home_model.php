<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class home_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	public function deletePost($postid){
		
		$this->db->delete('post', array('postID' => $postid)); 
	}
	public function deleteComment($commentid){
		$this->db->delete('comment', array('commentId' => $commentid)); 
	}



	public function insertPost($image=NULL){
		$post=$this->security->xss_clean($this->input->post('newPost'));
		$id=$this->session->userdata('userid');
		$chooser=$this->input->post('chooser');

$reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";

// The Text you want to filter for urls
$text = $post;

// Check if there is a url in the text
if(preg_match($reg_exUrl, $text, $url))
{

       // make the urls hyper links
		$url = $url[0];
}
else
{
	$url = null;
}

if(!$image){

		$data=array(
			'userID'=>$id,
			'description'=>$post,
			'sharewith'=>$chooser,
			'post_link'=>$url
			);
		$this->db->insert('post',$data);
	}
	else{

		$data=array(
			'userID'=>$id,
			'description'=>$post,
			'sharewith'=>$chooser,
			'picturepath'=>$image,
			'post_link'=>$url
			);
		$this->db->insert('post',$data);




	}

}



	public function insertComment($userid,$postId,$comment){
		
		$comment=$this->security->xss_clean($comment);


		$data=array(
			'userId'=>$userid,
			'postID'=>$postId,
			'description'=>$comment


			);

$this->db->insert('comment',$data);






	}
	public function get_own_posts()
	{
		$id = $this->session->userdata('userid');
		$this->db->from('users');
		$this->db->join('post', 'post.userID = users.userid');
		$this->db->where('users.userid = '.$id);
		$query = $this->db->get();
		// Let's check if there are any results
		if($query->num_rows >= 1)
		{
			
		    return $query->result();
			   
		}
			//echo var_dump($query);
			return NULL;

	}
	public function get_friends_posts()
	{	

		$id = $this->session->userdata('userid');

		

		$this->db->distinct();
		$this->db->select('*');
		$this->db->from('users');
		$this->db->join('connections', 'users.userid = connections.userId2 AND connections.userId1='.$id,'left outer');
		$this->db->join('post', 'post.userID = users.userid');
		$this->db->where('userId1', $id);
		$this->db->or_where('users.userid', $id);
		$this->db->or_where('post.sharewith', false);
		$this->db->order_by("timeofpost","desc");
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
		
		
		//$this->db->where('postID', $postid);
		//$this->db->join('comment', 'post.postID = comment.postID');
		//$this->db->where('postID', $postid);
		$query = $this->db->query("
		SELECT *
		    FROM post JOIN comment  
		        ON comment.postID = post.postID AND post.postID =".$postid."
		        JOIN users ON users.userid = comment.userID");
		/*$this->db->select('comment.userID,comment.postID AS newpostID,comment.description,comment.commentId');
		$this->db->from('comment');
		$this->db->join('post', 'comment.newpostID = post.postID');
		$this->db->where('comment.postID', $postid);*/
		//$query = $this->db->get();
			// Let's check if there are any results
		$this->db->order_by("timeofcomment","desc");
			if($query->num_rows >= 1)
			{
			    return $query->result();
			   
			}
			//echo var_dump($query);
			return NULL;
	}





	
}
?>