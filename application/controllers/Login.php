<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LOGIN extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Login_model");
		$this->load->helper("form");
		$this->load->helper('url_helper');
		$this->load->library("session");
		$this->load->library("encryption");
		$this->load->helper("cookie");
	}
	
    public function verify(){
        if(isset($_POST["login"])){
			extract($_POST);
			$user=$this->Login_model->getUser("username",$username);
			$user=$user->row_array();
			if($user){
				if(password_verify($password,$user['password'])){
					$_SESSION['islogin'] = TRUE;
					$_SESSION['user_id'] = $user['user_id'];
					$ret = $this->Login_model->getUserFullyRegistered($user['user_id']);
					$ret=$ret->row_array();
					if(isset($_POST["stay_signed_in"])){
						$cookie_name="Resume_User";
						$user_id=$user['user_id'];
						$cookie_content=password_hash("$user_id", PASSWORD_BCRYPT);
						$cookie_time=time()+ 86400 * 7;
						$cookie_path="/";
						setcookie($cookie_name,$cookie_content,$cookie_time,$cookie_path);
					}
					else{
						$cookie_name="Resume_User";
						$user_id=$user['user_id'];
						$cookie_content=password_hash("$user_id", PASSWORD_BCRYPT);
						$cookie_time=time()+ 3600;
						$cookie_path="/";
						setcookie($cookie_name,$cookie_content,$cookie_time,$cookie_path);
					}
					if($ret['is_fully_registered'] != 1){
						//if user registered for first time redirect him to resume form page
						$url = "../USERS/FormDetails";
					}	
					else{
						//if user already registered and filled the form then redirect it directly to resume page
						$url = "../USER_DETAILS/fetchDetailsForResume";
					}
						
				}
				else{
					$_SESSION['status']="FAILURE";
					$url="../../";
				}
			}
			else{
				$url="../../";
			}
			header("Location: $url");
		}
		else if(isset($_POST["skip_sign_in"])){
			$_SESSION['islogin'] = FALSE;
			$_SESSION['user_id'] = 0;
			header("Location: ../USERS/FormDetails");
		}
		
	}
	public function logout(){
		$cookie_name = "Resume_User";
        $user_id_to_logout = $_SESSION['user_id'];
        $encrypt_id = password_hash("$user_id_to_logout", PASSWORD_BCRYPT);
        $cookie_content = $encrypt_id;
        $cookie_time = time() - 86400 * 30;
        $path = "/";
        setcookie($cookie_name, $cookie_content, $cookie_time, $path);

		$arr=array('user_id','user_role_id','user_email');
       	$this->session->unset_userdata('user_id');
        session_destroy();

        header("Location: ../");
	}

	public function registerUser(){
		if(isset($_POST["sign_up"])){
			extract($_POST);
			$user=$this->Login_model->getUser("username",$signup_username);
			$user=$user->row_array();
			if(!$user){
				$hashedpass = password_hash("$signup_password", PASSWORD_BCRYPT);
				$this->Login_model->updateUser($signup_username, $hashedpass);
				
				//getting user_id
				$user=$this->Login_model->getUser("username",$signup_username);
				$user=$user->row_array();
				//inserting into fullyregistered table
				$this->Login_model->insertFullyRegistered($user['user_id']);
			}else{
				$_SESSION['status']="SIGNUP_FAILURE";
			}
			header("Location: ../../");
		}
	}
}
?>
