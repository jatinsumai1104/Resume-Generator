<?php
class Login_model extends CI_Model{

    public function __construct()
    {
        $this->load->database();
    }
    
    public function adduser($data){
        $data  = array_merge($data,$this->metaData());
		$user_query = $this->db->insert("user",$data);
		$this->db->insert_id();
    }
    
    public function getUser($condn,$key){
		$query="select * from user where $condn='$key'";
		return $this->db->query($query);
	}
	public function updateUser($username, $password){
		$query = "insert into user(username, password) values ('$username', '$password')";
		$this->db->query($query);
	}
	public function insertFullyRegistered($user_id){
		$query = "insert into user_fully_registered(user_id, is_fully_registered) values ($user_id, 0)";
		$this->db->query($query);
	}
	public function getUserFullyRegistered($user_id){
		$query="select is_fully_registered from user_fully_registered where user_id='$user_id'";
		return $this->db->query($query);
	}
	private function metaData(){
		date_default_timezone_set("Asia/Kolkata");
        $time = time();
        $created_at = date("Y-m-d H:i:s", $time);
        return array(
            'created_at'=>$created_at,
			'updated_at'=>$created_at,
            'deleted'=> 0
        );
	}
    
}
?>