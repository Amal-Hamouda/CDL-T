<?php
class login extends CI_Controller {

     public function __construct() {
           parent::__construct();
           $this->load->library("session");
           $this->load->helper('url');
        }
         

public function index()
{
    
  $this->load->view('login');

}
function validation()
 {
    $this->load->library('form_validation');
  $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email');
  $this->form_validation->set_rules('user_password', 'Password', 'required');
  if($this->form_validation->run())
  {

   $email = $this->input->post('user_email');
   $password = $this->input->post('user_password');
   $this->db->where('email', $email);
   $query = $this->db->get('login_admin');
   if($query->num_rows() > 0)
   {
    foreach($query->result() as $row)
    {
 
    
      if($password == $row->password)
      {
       $this->session->set_userdata('id', $row->id);
       $this->load->view('affichageformcontact');
      }
      else
      {
       
        $this->session->set_flashdata('message','Mot de passe erroné');
        $this->load->view('login');
      }
    
    }
   }
   else
   {
   
    $this->session->set_flashdata('message','email erroné');
    $this->load->view('login');
  
   }
  


  }
  else
  {
   $this->index();
  }
 }}