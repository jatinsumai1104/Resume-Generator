<?php
class Details_model extends CI_Model{

    public function __construct()
    {
        $this->load->database();
    }
    
    public function addUserDetails($tablename, $data){
		$data  = array_merge($data,$this->metaData());
		$user_query = $this->db->insert($tablename,$data);
		return $this->db->insert_id();
	}
	
	public function getfullyloggedIn($user_id){
		$query = "select is_fully_registered from user_fully_registered where user_id = $user_id";
		return $this->db->query($query);
	}
	
	public function updateUserDetails($tablename, $data, $user_id){
		$this->db->where('user_id', $user_id);
		$this->db->update($tablename, $data);
	}
	
	public function getUser($table,$userid){
        $query="select * from $table where user_id=$userid";
        $result=$this->db->query($query);
        return $result->row_array();
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