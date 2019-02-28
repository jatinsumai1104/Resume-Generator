<?php
class USERS extends CI_Controller{
	public function index(){
		$this->load->view("pages/login");
	}
    public function FormDetails(){
        $this->load->view("pages/form_details");
    }
	public function UpdateDetailsPage(){
		$data['current_page'] = "update";
        $this->load->view("includes/header");
        $this->load->view("includes/header-bp");
        $this->load->view("includes/left-sidebar", $data);
        $this->load->view("pages/update_details");
        $this->load->view("includes/footer-bp");
        $this->load->view("includes/footer");
    }
	public function ResumePage(){
		$data['current_page'] = "resume";
        $this->load->view("includes/header");
        $this->load->view("includes/left-sidebar", $data);
        $this->load->view("pages/resume_page2");
        $this->load->view("includes/footer-bp");
        $this->load->view("includes/footer");
    }
	public function ThemeSelector(){
		$data['current_page'] = "theme";
        $this->load->view("includes/header");
        $this->load->view("includes/left-sidebar", $data);
        $this->load->view("pages/theme_selector");
        $this->load->view("includes/footer-bp");
        $this->load->view("includes/footer");
    }
}
?>