<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class USER_DETAILS extends CI_Controller{
	
	var $data_set_elements;
    
    public function __construct(){
		parent::__construct();
		$this->load->model("Details_model");
		$this->load->library("encryption");
		$this->load->helper("form");
		$this->load->helper('url_helper');
		$this->load->library("session");
	}
    
    
    public function updateDetails(){
       if(isset($_POST["proceed"]) || isset($_POST["update_proceed"])){
		   extract($_POST);
		   if($_SESSION['islogin']){
			   $user_id = $_SESSION['user_id'];
			   $user_data = array(
				   'user_id' => $user_id,
				   'created_by' => $user_id
			   );
		   }
           
			$data0 = array(
			'user_first_name' => $user_first_name,
			'user_last_name' => $user_last_name,
			'user_phone_number' => $user_phone_number,
			'user_email' => $user_email,
			'user_git_link' => $user_git_link,
			'user_address' => $user_address,
			'user_age' => $user_age,
			'user_current_pointer' => $user_current_pointer,
			'user_current_college_name' => $user_current_college_name,
			'user_achivements' => $user_achivements
			);
			$data1 = array(
			'curricular_name' => $user_co_curricular,
			);
			$data2 = array(
			'user_hsc_marks' => $user_hsc_marks,
			'user_hsc_college_name' => $user_hsc_college_name,
			);
			$data3 = array(
			'user_experience_title' => $user_experience,
			);
			$data4 = array(
			'extra_curricular_name' => $user_extra_curricular,
			);
			$data5 = array(
			'language' => $language,
			);
			$data6 = array(
			'project_name' =>$user_projects,
			);
			$data7 = array(
			'user_ssc_marks' => $user_ssc_marks,
			'user_school_name' => $user_school_name,
			);
			$data8 = array(
			'is_fully_registered' => 1,
			);
		   
		   if($_SESSION['islogin']){
			   //Inserting into table if user has logged IN
			   $table_array = array("user_details", "user_co_curriculars", "user_college_name", "user_experience", "user_extra_curricular", "user_known_languages", "user_projects", "user_school_details", "user_fully_registered");
			   
				$data_arrays = array($data0, $data1, $data2, $data3, $data4, $data5, $data6, $data7, $data8);
				$ret = $this->Details_model->getfullyloggedIn($user_id);
				$ret=$ret->row_array();
				if($ret['is_fully_registered']==0){
					for($i = 0; $i< count($table_array)-1; $i++){
					   $this->Details_model->addUserDetails($table_array[$i], array_merge($data_arrays[$i], $user_data));
					//					   echo "data not present need to be inserted";
					}
					$this->Details_model->updateUserDetails("user_fully_registered", array_merge($data8, $user_data), $user_id);
				}
				else{
					for($i = 0; $i< count($table_array); $i++){
					   $this->Details_model->updateUserDetails($table_array[$i], array_merge($data_arrays[$i], $user_data), $user_id);
					//					   echo "user already present need to be updated";
					}
				}  
		   	}
		}
		$this->data_set_elements = array_merge($data0, $data1, $data2, $data3, $data4, $data5, $data6, $data7, $data8);
//		print_r($data_set_elements);
		$this->fetchDetailsForResume();
	}
	
	private function getDeatils(){
		$user_id = $_SESSION['user_id'];
		$table_array = array("user_details", "user_co_curriculars", "user_college_name", "user_experience", "user_extra_curricular", "user_known_languages", "user_projects", "user_school_details", "user_fully_registered");
		for($i = 0; $i< count($table_array)-1; $i++){
			$result=$this->Details_model->getUser($table_array[$i], $user_id);
			$data['random'.$i]=$result;
		}
		return $data;
	}
	public function fetchDetails(){
		if($_SESSION['islogin']){
			$data = $this->getDeatils();
		}else{
			$data = $this->data_set_elements;
			$data['current_page'] = "update";
            header("Location: ../../");
		}
		$data['current_page'] = "update";
        $this->load->view("includes/header", $data);
        $this->load->view("includes/header-bp", $data);
        $this->load->view("includes/left-sidebar", $data);
		$this->load->view("pages/update_details", $data);
        $this->load->view("includes/footer-bp", $data);
        $this->load->view("includes/footer", $data);
		  
    }
	public function fetchDetailsForResume(){
		if($_SESSION['islogin']){
			$data = $this->getDeatils();
		}else{
			$data = $this->data_set_elements;
		}
		$data['current_page'] = "resume";
        $this->load->view("includes/header", $data);
        $this->load->view("includes/header-bp", $data);
        $this->load->view("includes/left-sidebar", $data);
		$this->load->view("pages/resume_page2", $data);
        $this->load->view("includes/footer-bp", $data);
        $this->load->view("includes/footer", $data);
    }
}

