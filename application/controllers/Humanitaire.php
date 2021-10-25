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
}
