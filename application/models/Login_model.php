<?php
class Login_model extends CI_Model{

    public function __construct()
    {
        $this->load->database();
    }
    

    public function getUser($condn,$key){
		$query="select * from user where $condn='$key'";
		return $this->db->query($query);
	}
    
}
?>