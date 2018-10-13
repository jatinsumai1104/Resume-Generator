<?php
class Users extends CI_Controller{
	public function index(){
		$this->load->view("pages/login");
	}
    public function FormDetails(){
        $this->load->view("pages/form_details");
    }
	public function UpdateDetails(){
        $this->load->view("includes/header");
        $this->load->view("includes/header-bp");
        $this->load->view("includes/left-sidebar");
        $this->load->view("pages/update_details");
        $this->load->view("includes/footer-bp");
        $this->load->view("includes/footer");
    }
	public function ResumePage(){
        $this->load->view("includes/header");
//        $this->load->view("includes/header-bp");
        $this->load->view("includes/left-sidebar");
        $this->load->view("pages/resume_page");
        $this->load->view("includes/footer-bp");
        $this->load->view("includes/footer");
    }
	public function ThemeSelector(){
        $this->load->view("includes/header");
//        $this->load->view("includes/header-bp");
        $this->load->view("includes/left-sidebar");
        $this->load->view("pages/theme_selector");
        $this->load->view("includes/footer-bp");
        $this->load->view("includes/footer");
    }
}
?>