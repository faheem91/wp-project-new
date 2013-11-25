<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Login_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}


	public function upload_photo($photo){


$id=$this->session->userdata('userid');
$this->db->where('userid',$id);

  $this->db->set('profileUrl',$photo);


	}
function pbkdf2($algorithm, $password, $salt, $count, $key_length, $raw_output = false)
{
 
    $algorithm = strtolower($algorithm);
    if(!in_array($algorithm, hash_algos(), true))
        die('PBKDF2 ERROR: Invalid hash algorithm.');
    if($count <= 0 || $key_length <= 0)
        die('PBKDF2 ERROR: Invalid parameters.');
 
    $hash_length = strlen(hash($algorithm, "", true));
    $block_count = ceil($key_length / $hash_length);
 
    $output = "";
    for($i = 1; $i <= $block_count; $i++) {
        // $i encoded as 4 bytes, big endian.
        $last = $salt . pack("N", $i);
        // first iteration
        $last = $xorsum = hash_hmac($algorithm, $last, $password, true);
        // perform the other $count - 1 iterations
        for ($j = 1; $j < $count; $j++) {
            $xorsum ^= ($last = hash_hmac($algorithm, $last, $password, true));
        }
        $output .= $xorsum;
    }
 
    if($raw_output)
        return substr($output, 0, $key_length);
    else
        return bin2hex(substr($output, 0, $key_length));
}
 
	public function get_hashed_pass()
	{
		$username = $this->security->xss_clean($this->input->post('lEmail'));
		$password = $this->security->xss_clean($this->input->post('lPassword'));
		$this->db->where('username', $username);
		$query = $this->db->get('users');
		if($query->num_rows == 1)
		{
			// If there is a user, then create session data
			$row = $query->row();
			$salt = $row->salt;
			$password = PBKDF2_HASH_ALGORITHM . ":" . PBKDF2_ITERATIONS . ":" .  $salt . ":" .
        base64_encode($this->pbkdf2(
            PBKDF2_HASH_ALGORITHM,
            $password,
            $salt,
            PBKDF2_ITERATIONS,
            PBKDF2_HASH_BYTES,
            true
        ));
        return $password;
		}
		return null;
	}
	
	public function validate($usr=NULL,$pass=NULL){
		// grab user input
		if($usr==NULL && $pass==NULL)
		{
		$username = $this->security->xss_clean($this->input->post('lEmail'));
		$password = $this->get_hashed_pass();
		}
		else{
			$username=$usr;
			$password=$pass;
			$usr=NULL;
			$pass=NULL;



		}


		// Prep the query
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		
		// Run the query
		$query = $this->db->get('users');
		// Let's check if there are any results
		if($query->num_rows == 1)
		{
			// If there is a user, then create session data
			$row = $query->row();

			$data = array(
					'userid' => $row->userid,
					'fname' => $row->fname,
					'lname' => $row->lname,
					'username' => $row->username,
					'validated' => true
					);
			$this->session->set_userdata($data);
			return true;
		}
		// If the previous process did not validate
		// then return false.
		return false;
	}
}
?>