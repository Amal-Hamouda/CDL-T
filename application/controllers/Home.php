<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->db->select('*');
		$this->db->from('projets');
		$this->db->where('view', 1);
		$data["fetch_projets"] = $this->db->get();
		$this->load->view('Index',$data);
	}
	public function login()
{
    
  $this->load->view('login');

}
public function table()
{
	$data["fetch_projets"] = $this->db->get("projets");
	$this->load->view('table', $data);
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
	  if($this->session->userdata('id'))
{

	 //$query = $this->db->get("tbl_user");
	 //select * from tbl_user
	 //$query = $this->db->query("SELECT * FROM tbl_user ORDER BY id DESC");
	 $data["fetch_contact"] = $this->db->get("contact");
	 $this->load->view('affichageformcontact', $data);
	  }
	  else{ redirect('welcome');}
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
	  else{ redirect('welcome');}
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
	  else{ redirect('welcome');}
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
	  else{ redirect('welcome');}
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
	  else{ redirect('welcome');}
}
function fetch_projets()
{
	  if($this->session->userdata('id'))
	  {
	 //$query = $this->db->get("tbl_user");
	 //select * from tbl_user
	 //$query = $this->db->query("SELECT * FROM tbl_user ORDER BY id DESC");
	 $data["fetch_projets"] = $this->db->get("projets");
	 $this->load->view('affichageformprojets', $data);
	  }
	  else{ redirect('welcome');}
}
public function AjoutProj()
{
	$this->load->view('AjoutProj');
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
           $query =$this->db->query("INSERT INTO projets(nomduprojet,dateproj,lieu,description,participant,Budget,image_file_cov,image_file_ext,image_file_int,view) VALUES ('$nomduprojet','$dateproj','$lieu','$description','$participant','$budget','$image','$image2','$image3','0')");         

        			}
               }
            }


			$fetch_projets = $this->db->get('projets');
		   
			$output = '';
			$output .= '<table style="margin-top:40px" id="table">
			<tr>
											  <th>Public</th>
											  <th>Nom du Projet</th>
											  <th>Date</th>
											  <th>Lieu</th>
											  <th>Description</th>
											  <th>Participants</th>
											  <th>Budget</th>
											  <th>Image couverture</th>
											  <th>Image exterieure</th>
											  <th>Image interieure</th>
			</tr>
		   
			<tr>';
 
 
			if($fetch_projets->num_rows() > 0)
			{
			 foreach($fetch_projets->result() as $row)
			 {
				 $output .= '<tr>
				 <td>'; 
				 if($row->view == 0) {
					 
					$output .= '<input type="checkbox" id="valide" name="valide" value="valide"    onclick="Valid('.$row->id.','. $row->view.')" style="margin-left:auto; margin-right:auto;">';
					}

					if ($row->view == 1) {
						$output .= '<input type="checkbox" id="valide" name="valide" value="valide" checked="checked" onclick="Valid('.$row->id.','. $row->view.')" style="margin-left:auto; margin-right:auto;">';
					}
					$output .= '</td>
					   
					  <td>'.$row->nomduprojet.'</td>
					  <td>'.$row->dateproj.'</td>
					  <td>'.$row->lieu.'</td>
					  <td><textarea readonly style="border: none; overflow: auto; outline: none; box-shadow: none; resize:none;width:100%">'. $row->description.'</textarea></td>
					  <td>'.$row->participant.'</td>
					  <td>'.$row->Budget.'</td>
					  <td><img src="'.base_url().'/resources/'.$row->image_file_cov.'" style="height:50px"></td>                     
					  <td><img src="'.base_url().'/resources/'. $row->image_file_ext.'" style="height:50px"></td>
					  <td><img src="'.base_url().'/resources/'.$row->image_file_cov.'" style="height:50px"></td>
						   </tr>';
			 }
		    }
			$output .= '/<tr>  </table>';
		 echo $output;

      }


	  function fetch_ProjetUnique(){
		
		$id =$_POST["id"];
		$this->db->select('*');
		$this->db->from('projets');
		$this->db->where('id', $id);
		$fetch_projets = $this->db->get();
		
		
		$output = '';
		if($fetch_projets->num_rows() > 0)
           		{
                	foreach($fetch_projets->result() as $row)
                	{
						$output .= '<center><div class="col-12">
						<h4 style="color:#d4ac46">'.$row->nomduprojet.'</h4></div><br>';
					
						$output .= '	<div class="row" style="background-color: #d4ac46;border:1px solid white; border-radius:10px;width:100%">';
							
						$output .= '<div class="col" style="color:#fff;font-size: 15px;font-weight: bold;margin-top:10px ;"> Date
							<br>
							<p style="font-weight: lighter;">'.$row->dateproj.'</p>

									</div>';
						
									
						$output .= '	<div class="col" style="color:#fff;font-size: 15px;font-weight: bold;margin-top:10px ;">Lieu
									<br>
									<p style="font-weight: lighter;">'.$row->lieu.'</p>

								</div>';

						$output .= '<div class="col" style="color:#fff;font-size: 15px;font-weight: bold;margin-top:10px ;">Participants
                                        <br>
                                        <p style="font-weight: lighter;">'.$row->participant.'</p>

                                    </div>';

						$output .='</div><br>';

						$output .= '<div class="col-12" style="margin-bottom:2% ;"><p>'.$row->description.'</p>

						</div>';

						$output .= '<div class="row">';
						$output .= '<div class="col">
						<img class="img-fluid_modal" src="'.base_url().'/resources/'.$row->image_file_cov.'">

					</div>';
					$output .= '<div class="col">
					<img class="img-fluid_modal" src="'.base_url().'/resources/'.$row->image_file_ext.'">

				</div>';
					$output .= '<div class="col">
					<img class="img-fluid_modal" src="'.base_url().'/resources/'.$row->image_file_int.'">

				</div>';
						$output .= '</div><br>';

						$output .= '<div class="col-12" style="background-color:lightgrey;border:1px solid white; border-radius:10px;width:100%">
						<p style="color:black; margin-top:15px;font-size: 15px;">don récoltés lors de cette action : '.$row->Budget.'€</p>

					</div>  </center>';
                	}
					echo $output;
        		}
           		

	
	}


	function validProjet(){
		$rep =$_POST["rep"];
		$viewrep =$_POST["viewrep"];
		if ($viewrep == 0){
		$query =$this->db->query("UPDATE projets
		SET view = 1
		WHERE id = $rep;");}
		else {
			$query =$this->db->query("UPDATE projets
		SET view = 0
		WHERE id = $rep;");
		}
	}
	

}
