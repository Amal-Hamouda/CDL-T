<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginadmin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library("session");
		$this->load->helper('url');
	 }
	  

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('Index');
	}
	public function login()
{
    
  $this->load->view('login');

}
	public function form_validation(){
		
		$data = array(
		 "prenom"=>$this->input->post("first-name"),
		 "nom"=>$this->input->post("last-name"),
		 "email"=>$this->input->post("email"),
		 "phone"=>$this->input->post("phone-number"),
		 "msg"=>$this->input->post("message")

	);
	$this->db->insert("contact", $data);
	
	$Prenom =$this->input->post("first-name");
	$nom = $this->input->post("last-name");
	$email = $this->input->post("email");
	$phone = $this->input->post("phone-number");
	$msg = $this->input->post("message");

// Plusieurs destinataires
	$to  = 'test@miraiphi.com'; // notez la virgule

	// Sujet
	$subject = 'Contact';

	// message
	$message = '
	<html>
	 <head>
	  <title>Envoi MSG de la part de M./Mme '.$nom.' </title>
	 </head>
	 <body>
	  <p>Envoi MSG de la part de M./Mme '.$nom.' Ayan le numero '.$phone.' et voici son message :</p>
	  <p>'.$msg.'</p>
	  
	 </body>
	</html>
	';

	// Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
	$headers[] = 'MIME-Version: 1.0';
	$headers[] = 'Content-type: text/html; charset=iso-8859-1';

	// En-têtes additionnels
	$headers[] = 'To: Test<test@miraiphi.com>';
	$headers[] = 'From: '.$nom.'<'.$email.'>';
	$headers[] = 'Cc: anniversaire_archive@example.com';
	$headers[] = 'Bcc: anniversaire_verif@example.com';

	// Envoi
	mail($to, $subject, $message, implode("\r\n", $headers));
	$this->load->view('Index');
}
function fetch_contact()
      {
           //$query = $this->db->get("tbl_user");
           //select * from tbl_user
           //$query = $this->db->query("SELECT * FROM tbl_user ORDER BY id DESC");
		   $data["fetch_contact"] = $this->db->get("contact");
		   $this->load->view('affichageformcontact', $data);
      }
function fetch_question()
      {
           //$query = $this->db->get("tbl_user");
           //select * from tbl_user
           //$query = $this->db->query("SELECT * FROM tbl_user ORDER BY id DESC");
		   $data["fetch_question"] = $this->db->get("question_imam");
		   $this->load->view('affichageformquestion', $data);
      }
function fetch_benevole()
      {
           //$query = $this->db->get("tbl_user");
           //select * from tbl_user
           //$query = $this->db->query("SELECT * FROM tbl_user ORDER BY id DESC");
		   $data["fetch_benevole"] = $this->db->get("benevole");
		   $this->load->view('affichageformbenevole', $data);
      }
function fetch_don()
      {
           //$query = $this->db->get("tbl_user");
           //select * from tbl_user
           //$query = $this->db->query("SELECT * FROM tbl_user ORDER BY id DESC");
		   $data["fetch_don"] = $this->db->get("don");
		   $this->load->view('affichageformdon', $data);
      }
function fetch_adhesion()
      {
           //$query = $this->db->get("tbl_user");
           //select * from tbl_user
           //$query = $this->db->query("SELECT * FROM tbl_user ORDER BY id DESC");
		   $data["fetch_adhesion"] = $this->db->get("adhesion");
		   $this->load->view('affichageformadhesion', $data);
      }
	  function ajoutprojet()
      {

        $config['upload_path'] = './resources/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['encrypt_name'] = TRUE ;
                $this->load->library('upload', $config);
                if($this->upload->do_upload('image_file_cov'))
                {
                    $data = $this->upload->data();
                    $file_name=$this->upload->data();
         $image=$file_name['file_name'];
        
         if($this->upload->do_upload('image_file_ext')){
            $data = $this->upload->data();
            $file_name2=$this->upload->data();
 $image2=$file_name2['file_name'];
            
        if($this->upload->do_upload('image_file_ext')){
            $data = $this->upload->data();
            $file_name3=$this->upload->data();
        $image3=$file_name3['file_name'];
 

           
            $nomduprojet=htmlspecialchars($this->input->post('nomduprojet'));
            $nomduprojet=AddSlashes($nomduprojet);
            $dateproj=$this->input->post('dateproj');  
            $lieu=htmlspecialchars($this->input->post('lieu'));
            $lieu=AddSlashes($lieu);
            $description=htmlspecialchars($this->input->post('description'));
            $description=AddSlashes($description);
            $participant=$this->input->post('participant');
            $budget=$this->input->post('budget');
           
            
            

            //$query =$this->db->query("INSERT INTO projets(nomduprojet,dateproj,lieu,description,participant,Budget,img_file_cov,img_file_ext,img_file_int) VALUES ('$nomduprojet','$dateproj','$lieu','$description','$participant','$budget','1','0','0','0','$image')");
           $query =$this->db->query("INSERT INTO projets(nomduprojet,dateproj,lieu,description,participant,Budget,image_file_cov,image_file_ext,image_file_int) VALUES ('$nomduprojet','$dateproj','$lieu','$description','$participant','$budget','$image','$image2','$image3')");


          


        }
               }
            }

      }
}
