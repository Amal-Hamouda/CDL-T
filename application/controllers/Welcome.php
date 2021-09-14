<?php
class Welcome extends CI_Controller {

     public function __construct() {
           parent::__construct();
           $this->load->library("session");
           $this->load->helper('url');
        }
         

public function index()
{
      if($this->session->userdata('id'))
      {
  redirect('home/fetch_contact');
  }
  else{
  $this->load->view('login');}

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
	   $data["fetch_contact"] = $this->db->get("contact");
	   $this->load->view('affichageformcontact', $data);
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
 }
 function logout()
 {
  $data = $this->session->all_userdata();
  foreach($data as $row => $rows_value)
  {
   $this->session->unset_userdata($row);
  }
  $this->load->view('login');
}
 function fetch_contact()
      {
            if($this->session->userdata('id'))
	{
	
           //$query = $this->db->get("tbl_user");
           //select * from tbl_user
           //$query = $this->db->query("SELECT * FROM tbl_user ORDER BY id DESC");
		   $data["fetch_contact"] = $this->db->get("contact");
		   $this->load->view('affichageformcontact', $data);
            }
            else{ redirect('login');}
      }
function fetch_question()
      {
            if($this->session->userdata('id'))
	{
           //$query = $this->db->get("tbl_user");
           //select * from tbl_user
           //$query = $this->db->query("SELECT * FROM tbl_user ORDER BY id DESC");
		   $data["fetch_question"] = $this->db->get("question_imam");
		   $this->load->view('affichageformquestion', $data);
            }
            else{ redirect('login');}
      }
function fetch_benevole()
      {
            if($this->session->userdata('id'))
            {
           //$query = $this->db->get("tbl_user");
           //select * from tbl_user
           //$query = $this->db->query("SELECT * FROM tbl_user ORDER BY id DESC");
		   $data["fetch_benevole"] = $this->db->get("benevole");
		   $this->load->view('affichageformbenevole', $data);
            }
            else{ redirect('login');}
      }
function fetch_don()
      {
            if($this->session->userdata('id'))
            {
           //$query = $this->db->get("tbl_user");
           //select * from tbl_user
           //$query = $this->db->query("SELECT * FROM tbl_user ORDER BY id DESC");
		   $data["fetch_don"] = $this->db->get("don");
		   $this->load->view('affichageformdon', $data);
            }
            else{ redirect('login');}
      }
function fetch_adhesion()
      {
            if($this->session->userdata('id'))
            {
           //$query = $this->db->get("tbl_user");
           //select * from tbl_user
           //$query = $this->db->query("SELECT * FROM tbl_user ORDER BY id DESC");
		   $data["fetch_adhesion"] = $this->db->get("adhesion");
		   $this->load->view('affichageformadhesion', $data);
            }
            else{ redirect('login');}
      }
} 