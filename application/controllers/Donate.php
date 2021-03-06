<?php
    
    class Donate extends CI_Controller {
     
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
            $this->load->view('donate');
        }
            
        /**
         * Get All Data from this method.
         *
         * @return Response
        */
      
        public function payment()
        {
          require_once('vendor/autoload.php');
          $success = site_url("Home");
          $stripeSecret = 'sk_test_51JHpHoG89vko2fx6LOAAOiW6g8NBU4dfXh8QbKULTHMs8b7UJwDQXkkS18RsyTk8JJ5mS3bP3KQ3WZ41Bz51YfWC00nEi4ookx';
     
          \Stripe\Stripe::setApiKey($stripeSecret);
          $product = \Stripe\Product::create([
              'name'=>'CDL'
          ]);
          $price =\Stripe\Price::create([

            'unit_amount' => $this->input->post('amount'),
            'currency' => 'eur',
            'product' => $product,        
          ]);
         
          $stripe = \Stripe\Checkout\Session::create ([
            'success_url' => $success,
            'cancel_url' => 'https://example.com/cancel',
            'payment_method_types' => ['card'],
            'line_items' => [
              [
                'price' => $price,
                'quantity' => 1,
              ],
            ],
            'mode' => 'payment',
    ]);
    
            $data = array('success' => true, 'data'=> $stripe->id);
     
            echo json_encode($data);
        }
        public function insertpaymentpaypal(){
            $data = array(
                "prenom"=>$this->input->post("firstname"),
                "nom"=>$this->input->post("lastname"),
                "email"=>$this->input->post("email"),
                "msg"=>$this->input->post("msg"),
                "payment_method"=>"paypal",
                "montant"=>$this->input->post("montant")
                
           );
   
           $this->db->insert("don", $data);
        }
        public function insertpaymentstripe(){
            $data = array(
                "prenom"=>$this->input->post("firstname"),
                "nom"=>$this->input->post("lastname"),
                "email"=>$this->input->post("email"),
                "msg"=>$this->input->post("msg"),
                "payment_method"=>"Stripe",
                "montant"=>$this->input->post("montant")
           );
   
           $this->db->insert("don", $data);
        }
    }
    ?>