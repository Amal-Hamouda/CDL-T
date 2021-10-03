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
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo base_url();?>index.php/home/fetch_contact">Contact</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo base_url();?>index.php/home/fetch_question">Question a l'imam</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo base_url();?>index.php/home/fetch_benevole">Benevole</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo base_url();?>index.php/home/fetch_don">Don</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo base_url();?>index.php/home/fetch_adhesion">Adhésion</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo base_url();?>index.php/home/fetch_projets">Projets</a>
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
                                <li class="nav-item active"><a class="nav-link" href="<?php echo base_url();?>index.php/welcome/logout">Logout</a></li>

                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid">
                    <h1 class="mt-4">Projets</h1>
<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
                                     <th class="cell100 column1">Public</th>
									<th class="cell100 column1">Nom du Projet</th>
									<th class="cell100 column2">Date</th>
									<th class="cell100 column3">Lieu</th>
									<th class="cell100 column4">Description</th>
									<th class="cell100 column5">Budget</th>
                                    <th class="cell100 column6">Image couverture</th>
                                    <th class="cell100 column7">Image exterieure</th>
                                    <th class="cell100 column8">Image interieure</th>
                                 
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
                                   <?php
           if($fetch_projets->num_rows() > 0)
           {
                foreach($fetch_projets->result() as $row)
                {
           ?>
                <tr class="row100 body">
                <td class="cell100 column1"> <input type="checkbox" id="valide" name="valide" value="valide"  style="margin-left:auto; margin-right:auto;"></td>
                     <td class="cell100 column1"><?php echo $row->nomduprojet; ?></td>
                     <td class="cell100 column2"><?php echo $row->date; ?></td>
                     <td class="cell100 column3"><?php echo $row->lieu; ?></td>
                     <td class="cell100 column4"><textarea readonly style="border: none; overflow: auto; outline: none; box-shadow: none; resize:none;"><?php echo $row->description; ?></textarea></td>
                     <td class="cell100 column5"><?php echo $row->Budget; ?></td>
                     <td class="cell100 column6"><img src="<?php echo base_url();?>/resources/img/imgmodal.jpg" style="height:50px"></td>                     
                     <td class="cell100 column7"><img src="<?php echo base_url();?>/resources/img/prj1.jpg" style="height:50px"></td>
                     <td class="cell100 column8"><img src="<?php echo base_url();?>/resources/img/Palestine.jpg" style="height:50px"></td>
                </tr>
           <?php
                }
           }
           else
           {
           ?>
                <tr class="row100 body">
                     <td class="cell100" colspan="8">No Data Found</td>
                </tr>
           <?php
           }
           ?>			
							</tbody>
						</table>
     
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