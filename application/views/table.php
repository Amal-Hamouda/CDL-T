<table style="margin-top:40px" id="table">
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
 
  <tr>
  <?php
           if($fetch_projets->num_rows() > 0)
           {
                foreach($fetch_projets->result() as $row)
                {
           ?>
                <tr>
                <td> <input type="checkbox" id="valide" name="valide" value="valide"  style="margin-left:auto; margin-right:auto;"></td>
                     <td><?php echo $row->nomduprojet; ?></td>
                     <td><?php echo $row->dateproj; ?></td>
                     <td><?php echo $row->lieu; ?></td>
                     <td><textarea readonly style="border: none; overflow: auto; outline: none; box-shadow: none; resize:none;width:100%"><?php echo $row->description; ?></textarea></td>
                     <td><?php echo $row->participant; ?></td>
                     <td><?php echo $row->Budget; ?></td>
                     <td><img src="<?php echo base_url();?>/resources/<?php echo $row->image_file_cov; ?>" style="height:50px"></td>                     
                     <td><img src="<?php echo base_url();?>/resources/<?php echo $row->image_file_ext; ?>" style="height:50px"></td>
                     <td><img src="<?php echo base_url();?>/resources/<?php echo $row->image_file_cov; ?>" style="height:50px"></td>
                </tr>
           <?php
                }
           }
           else
           {
           ?>
                <tr>
                     <td colspan="9">No Data Found</td>
                </tr>
           <?php
           }
           ?>			
  </tr>

</table>