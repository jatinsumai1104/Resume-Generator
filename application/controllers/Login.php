<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Login_model");
		$this->load->helper("form");
		  $this->load->helper('url_helper');
		  $this->load->library("session");
		
	}
    
    public function verify(){
        if(isset($_POST["login"])){
			extract($_POST);
			$user=$this->Login_model->getUser("user_email",$user_email);
			$user=$user->row_array();
			
			if($user){
			if(password_verify($user_password,$user['password'])){
				$url = "../users/FormDetails";	
			}
			else{
				$_SESSION['status']="FAILURE";
				$url="../..";
			}
		}
			else{
				$url="../..";
			}
		}
		header("Location: $url");
		
	}
}
?>