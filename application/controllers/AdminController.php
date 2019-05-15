<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

    
       public function page()
	{
            $this->load->view('Admin/blank');
	}
	public function admin_dashboard()
	{
            $this->load->view('Admin/home');
	}
        public function category_entry()
	{
            $this->load->view('Admin/category');
	}
          public function employee_form()
	{
            $this->load->view('Admin/employeeform');
	}
        
        public function product_entry()
	{
            $this->load->view('Admin/productentry');
	}
         
        public function product_edit()
	{
            $this->load->view('Admin/productedit');
	
        }
 
}