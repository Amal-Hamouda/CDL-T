<h3>Fetch Data from Table using Codeigniter</h3><br />
      <div class="table-responsive">
           <table class="table table-bordered">
                <tr>
                     <th>ID</th>
                     <th>First Name</th>
                     <th>Last Name</th>
                     <th>Email</th>
                     <th>Phone number</th>
                     <th>Message</th>
                     <th>Date</th>
                </tr>
           <?php
           if($fetch_data->num_rows() > 0)
           {
                foreach($fetch_data->result() as $row)
                {
           ?>
                <tr>
                     <td><?php echo $row->id; ?></td>
                     <td><?php echo $row->prenom; ?></td>
                     <td><?php echo $row->nom; ?></td>
                     <td><?php echo $row->email; ?></td>
                     <td><?php echo $row->phone; ?></td>
                     <td><?php echo $row->msg; ?></td>
                     <td><?php echo $row->datejour; ?></td>

                </tr>
           <?php
                }
           }
           else
           {
           ?>
                <tr>
                     <td colspan="7">No Data Found</td>
                </tr>
           <?php
           }
           ?>
           </table>
      </div>