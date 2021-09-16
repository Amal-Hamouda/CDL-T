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
          $success = site_url("Home");
          \Stripe\Stripe::setApiKey($stripeSecret);
          $product = \Stripe\Product::create([
              'name'=>'donation'
          ]);
          $price =\Stripe\Price::create([

            'unit_amount' => $this->input->post('amount'),
            'currency' => 'eur',
            'recurring' => ['interval' => 'month'],
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
            'mode' => 'subscription',
    ]);
    
            $data = array('success' => true, 'data'=> $stripe->id);
     
            echo json_encode($data);
        }
        public function insertpaymentpaypal(){
            $data = array(
                "prenom"=>$this->input->post("firstname"),
                "nom"=>$this->input->post("lastname"),
                "date_de_naissance"=>$this->input->post("birthdate"),
                "adresse"=>$this->input->post("adresse"),
                "ville"=>$this->input->post("ville"),
                "pays"=>$this->input->post("pays"),
                "tel"=>$this->input->post("tel"),
                "email"=>$this->input->post("email"),
                "msg"=>$this->input->post("msg"),
                "payment_method"=>"Paypal",
                "montant"=>$this->input->post("montant"),

                
           );
   
           $this->db->insert("adhesion", $data);
        }
        public function insertpaymentstripe(){
            $data = array(
                "prenom"=>$this->input->post("firstname"),
                "nom"=>$this->input->post("lastname"),
                "date_de_naissance"=>$this->input->post("birthdate"),
                "adresse"=>$this->input->post("adresse"),
                "ville"=>$this->input->post("ville"),
                "pays"=>$this->input->post("pays"),
                "tel"=>$this->input->post("tel"),
                "email"=>$this->input->post("email"),
                "msg"=>$this->input->post("msg"),
                "payment_method"=>"Stripe",
                "montant"=>$this->input->post("montant"),

           );
   
           $this->db->insert("adhesion", $data);
        }
    }
    ?>