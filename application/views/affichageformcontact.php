  <!DOCTYPE html>
<html lang="en">
<head>
	<title>contact</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url();?>/resources/img/favicon.ico" />
<!--===============================================================================================-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resources/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resources/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resources/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resources/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resources/css/main.css">
    <link href="<?php echo base_url();?>resources/css/styles.css" rel="stylesheet" />
<!--===============================================================================================-->
</head>
<body>
<div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Administateur</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo base_url();?>index.php/Home/fetch_contact">Contact</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo base_url();?>index.php/Home/fetch_question">Question a l'imam</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo base_url();?>index.php/Home/fetch_benevole">Benevole</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo base_url();?>index.php/Home/fetch_don">Don</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo base_url();?>index.php/Home/fetch_adhesion">Adhésion</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle" style="width:150px">Toggle Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="<?php echo base_url();?>index.php/Home">Home</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid">
                    <h1 class="mt-4">Contact</h1>
<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">ID</th>
									<th class="cell100 column2">First Name</th>
									<th class="cell100 column3">Last Name</th>
									<th class="cell100 column4">Email</th>
									<th class="cell100 column5">Phone number</th>
                                    <th class="cell100 column6">Message</th>
                                    <th class="cell100 column7">Date</th>

								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
                                   <?php
           if($fetch_contact->num_rows() > 0)
           {
                foreach($fetch_contact->result() as $row)
                {
           ?>
                <tr class="row100 body">
                     <td class="cell100 column1"><?php echo $row->id; ?></td>
                     <td class="cell100 column2"><?php echo $row->prenom; ?></td>
                     <td class="cell100 column3"><?php echo $row->nom; ?></td>
                     <td class="cell100 column4"><?php echo $row->email; ?></td>
                     <td class="cell100 column5"><?php echo $row->phone; ?></td>
                     <td class="cell100 column6"><?php echo $row->msg; ?></td>
                     <td class="cell100 column7"><?php echo $row->datejour; ?></td>

                </tr>
           <?php
                }
           }
           else
           {
           ?>
                <tr class="row100 body">
                     <td class="cell100" colspan="7">No Data Found</td>
                </tr>
           <?php
           }
           ?>			
							</tbody>
						</table>
                        <div align="center">
    <form method="post" action="<?php echo base_url(); ?>excel_export/action">
     <input type="submit" name="export" class="btn btn-success" value="Export" />
    </form>
   </div>
					</div>
				</div>
                </div>
		</div>
	</div>
    </div>
            </div>
        </div>
<!--===============================================================================================-->	
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--===============================================================================================-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!--===============================================================================================-->
	<script src="<?php echo base_url();?>resources/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>resources/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>resources/js/main.js"></script>
    <script src="<?php echo base_url();?>resources/js/scripts.js"></script>


</body>
</html>