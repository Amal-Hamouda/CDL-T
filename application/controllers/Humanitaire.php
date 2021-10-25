<?php
class Humanitaire extends CI_Controller {

public function index()
{
    $this->db->select('*');
		$this->db->from('projets');
		$this->db->where('view', 1);
		$data["fetch_projets"] = $this->db->get();
    $this->load->view('Au-Dela-Des-Mots',$data);
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

$Prenom = $this->input->post("first-name");
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

$Prenom = $this->input->post("first-name");
$nom = $this->input->post("last-name");
$email = $this->input->post("email");
$phone =$this->input->post("phone-number");
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
$this->load->view('Au-Dela-Des-Mots');
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
                    <h4 style="color:#7E42AE">'.$row->nomduprojet.'</h4></div><br>';
                
                    $output .= '	<div class="row" style="background-color: #7E42AE;border:1px solid white; border-radius:10px;width:100%">';
                        
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

}
