
<?php
    
    class Cultuel extends CI_Controller {
     
        /**
         * Get All Data from this method.
         *
         * @return Response
        */
        public function __construct() {
           parent::__construct();
           $this->load->library("session");
           $this->load->helper('url');
        }
         
        /**
         * Get All Data from this method.
         *
         * @return Response
        */
        public function index()
        {
            $this->load->view('Cultuel');
        }
            
        /**
         * Get All Data from this method.
         *
         * @return Response
        */
        public function payment()
        {
          require_once('vendor/autoload.php');
         
          $stripeSecret = 'sk_test_51JHpHoG89vko2fx6LOAAOiW6g8NBU4dfXh8QbKULTHMs8b7UJwDQXkkS18RsyTk8JJ5mS3bP3KQ3WZ41Bz51YfWC00nEi4ookx';
     
          \Stripe\Stripe::setApiKey($stripeSecret);
          
         
          $stripe = \Stripe\Charge::create ([
            "amount" => $this->input->post('amount'),
            "currency" => "eur",
            "source" => $this->input->post('tokenId'),
            "description" => "Don"
    ]);
            $data = array('success' => true, 'data'=> $stripe);
     
            echo json_encode($data);
        }
        public function form_question(){
		
            $data = array(
             "prenom"=>$this->input->post("first-name"),
             "nom"=>$this->input->post("last-name"),
             "email"=>$this->input->post("email"),
             "msg"=>$this->input->post("message")
    
        );

        $this->db->insert("question_imam", $data);
      
        $Prenom = $this->input->post("first-name");
        $nom = $this->input->post("last-name");
        $email = $this->input->post("email");
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
          <p>Envoi MSG de la part de M./Mme '.$nom.' et voici son message :</p>
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
       // $this->load->view('Cultuel');
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
        //$this->load->view('Cultuel');
    }
    }
    ?>