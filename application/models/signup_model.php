<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class signup_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}



	public function uploader1(){

		$usrid=$this->session->userdata('userid');

		$data = array(
               'imageUrl'=>$usrid
            );

$this->db->where('userid', $usrid);
$this->db->update('users', $data); 









	}


	public function getProfileImage($usssr=NULL){
		if($usssr==NULL){
		$usrid=$this->session->userdata('userid');
	}
	else {

		$usrid=$usssr;
	}
		$this->db->where('userId', $usrid);
	$query = $this->db->get('users');
	if($query->num_rows == 1)
		{
			$row = $query->row();
			$imagepath=$row->imageUrl;
			return $imagepath;

}

return "default";

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
 
function create_hash($password)
{

 
    // format: algorithm:iterations:salt:hash
    return $salt = base64_encode(mcrypt_create_iv(PBKDF2_SALT_BYTES, MCRYPT_DEV_URANDOM));
    
}
 



public function validate(){

 
		// grab user input
		$this->load->helper('security');

		$username = $this->security->xss_clean($this->input->post('email'));
		$password = $this->security->xss_clean($this->input->post('password'));

		$salt = $this->create_hash($password);
		$password = PBKDF2_HASH_ALGORITHM . ":" . PBKDF2_ITERATIONS . ":" .  $salt . ":" .
        base64_encode($this->pbkdf2(
            PBKDF2_HASH_ALGORITHM,
            $password,
            $salt,
            PBKDF2_ITERATIONS,
            PBKDF2_HASH_BYTES,
            true
        ));

		$firstname=$this->security->xss_clean($this->input->post('firstName'));
		$lastname=$this->security->xss_clean($this->input->post('lastName'));
		// Prep the query
		$this->db->where('username', $username);
		//$this->db->where('password', $password);
		
		// Run the query
		$query = $this->db->get('users');
		// Let's check if there are any results

		if($query->num_rows == 1)
		{
			// If there is a user, then create session data
			return false;
		
		}



$data = array(
				'fname' => $this->input->post('firstName'),
				'lname' => $this->input->post('lastName'),
				'username' => $this->input->post('email'),
				'password' => $password,
				'salt' => $salt
			);
		
			$this->db->insert('users' , $data);




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


}






		// If the previous process did not validate
		// then return false.
		return true;
	}


public function processp1(){

		$countryCode = $this->security->xss_clean($this->input->post('countryCode'));

			$stYear=$this->input->post('startCollegeYear');
			$enYear=$this->input->post('endCollegeYear');
			
		$postalCode = $this->security->xss_clean($this->input->post('postalCode'));
		
		$statuschooser=$this->security->xss_clean($this->input->post('status-chooser'));

		$jobTitle=$this->security->xss_clean($this->input->post('JobTitle'));
		$company=$this->security->xss_clean($this->input->post('company'));
		$id=$this->session->userdata('userid');
		$mostRecentJob=$this->security->xss_clean($this->input->post('mostRecentJob'));
		$mostRecentCompany=$this->security->xss_clean($this->input->post('mostRecentCompany'));
		$college=$this->security->xss_clean($this->input->post('college'));
		$lang='English';
		$YearsOfExperience=0;
		$date =date("Y-m-d");
		$data=array(
			'userId'=>$id,
			'Country'=>$this->input->post('countryCode'),
			'PostalCode'=>$this->input->post('postalCode'),
			'currentStatus'=>$this->input->post('status-chooser'),
			'DOB'=>$date,
			'lang'=>$lang,
			'YearsOfExperience'=>$YearsOfExperience,
			'joiningDate'=>$date,





			);
		

		$this->db->insert('profile' , $data);
		//echo $data;

if($statuschooser=="employed")
{


		$this->db->where('companyName', $company);
		$query = $this->db->get('company');
	if($query->num_rows == 1){
			// If there is a user, then create session data
			$row = $query->row();
			$companyID =$row->CompanyId;
		}
		else{

		$data=array(
			'companyName'=>$company,
			'companySize'=>1
			);

		$this->db->insert('company',$data);
		$this->db->where('companyName', $company);
		$query = $this->db->get('company');
		if($query->num_rows == 1){
					// If there is a user, then create session data
					$row = $query->row();
					$companyID =$row->CompanyId;




}
}
$data=array(
	'userId'=>$id,
	'jobTitle'=>$jobTitle,
	'CompanyId'=>$companyID
);

$this->db->insert('job',$data);






}

else if($statuschooser=="Job_Seeker")

{






		$this->db->where('companyName', $mostRecentCompany);
			$query = $this->db->get('company');
if($query->num_rows == 1){
			// If there is a user, then create session data
			$row = $query->row();
			$companyID =$row->CompanyId;
}
else{

$data=array(
	'companyName'=>$mostRecentCompany,
	'companySize'=>1
	);

$this->db->insert('company',$data);

		$this->db->where('companyName', $mostRecentCompany);
			$query = $this->db->get('company');
if($query->num_rows == 1){
			// If there is a user, then create session data
			$row = $query->row();
			$companyID =$row->CompanyId;




}
}
$data=array(
	'userId'=>$id,
	'jobTitle'=>$jobTitle,
	'CompanyId'=>$companyID



	);
$this->db->insert('job',$data);






}

if($statuschooser=="Student")

{		$this->db->where('name', $college);
		$query = $this->db->get('institution');
if($query->num_rows == 1){
			// If there is a user, then create session data
			$row = $query->row();
			$collegeID =$row->institutionId;
}
else{

$data=array(
	'name'=>$college,
	'description'=>"college"
	
	);


$this->db->insert('institution',$data);

		$this->db->where('name', $college);
			$query = $this->db->get('institution');
if($query->num_rows == 1){
			// If there is a user, then create session data
			$row = $query->row();
			
			$collegeID =$row->institutionId;
}
}
$data=array(
	'userId'=>$id,
	'institutionId'=>$collegeID,
	'startDate'=>$stYear,
	'endDate'=>$enYear
	);


$this->db->insert('education',$data);





}



}


}


?>