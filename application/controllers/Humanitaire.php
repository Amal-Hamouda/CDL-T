<?php
class Humanitaire extends CI_Controller {

public function index()
{
    $this->load->view('Au-Dela-Des-Mots');
}
public function form_benevole(){
		
    $data = array(
        "prenom"=>$this->input->post("first-name"),
        "nom"=>$this->input->post("last-name"),
        "email"=>$this->input->post("email"),
        "phone"=>$this->input->post("phone-number"),
        "msg"=>$this->input->post("message")

);
$this->db->insert("benevole", $data);
$this->load->view('Au-Dela-Des-Mots');
}
public function form_contact(){
		
    $data = array(
    "prenom"=>$this->input->post("first-name"),
    "nom"=>$this->input->post("last-name"),
     "email"=>$this->input->post("email"),
     "phone"=>$this->input->post("phone-number"),
     "msg"=>$this->input->post("message")

);
$this->db->insert("contact", $data);
$this->load->view('Au-Dela-Des-Mots');
}
}
