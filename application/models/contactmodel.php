<?php
class contactmodel extends CI_Model
 { 
function insert_data($data)
      {
           $this->db->insert("centredephcdl", $data);
      }
 }
 ?>