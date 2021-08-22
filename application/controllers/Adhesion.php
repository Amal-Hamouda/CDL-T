<?php
    
    class Adhesion extends CI_Controller {
     
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
            $this->load->view('adhesion');
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
    }
    ?>