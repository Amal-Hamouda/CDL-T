<!DOCTYPE html>
<html lang="en">
<head>
	<title>Don</title>
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
    <link href="<?php echo base_url();?>resources/css/styles.css" rel="stylesheet" /><!--===============================================================================================-->
<style>
table { 
    border: 1px solid #ddd;
    border-collapse: separate;
    border-left: 0;
    border-radius: 6px;
    border-spacing: 0px;
	
}
thead {
    display: table-header-group;
    vertical-align: middle;
    border-color: inherit;
    border-collapse: separate;
}
tr {
    display: table-row;
    vertical-align: inherit;
    border-color: inherit;
}
th{
	background-color: #6c7ae0;
	color:white;
	padding: 12px 4px 12px 4px !important;
}
th, td {
    padding: 8px 4px 6px 4px; 
    vertical-align: top;
    border-left: 1px solid #ddd;
	text-align:center;    
}
td {
    border-top: 1px solid #ddd;    
}
thead:first-child tr:first-child th:first-child, tbody:first-child tr:first-child td:first-child {
    border-radius: 4px 0 0 0;
}
thead:last-child tr:last-child th:first-child, tbody:last-child tr:last-child td:first-child {
    border-radius: 0 0 0 4px;
}

</style></head>
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
                    <h1 class="mt-4">Don</h1>
                    <table style="margin-top:40px" id="table">
  <tr>
                                    <th>ID</th>
									<th>Prenom</th>
									<th>Nom</th>
									<th>Email</th>
                                    <th>Message</th>
                                    <th>Montant</th>
                                    <th>Methode de paiement</th>
                                    <th>Date</th>
  </tr>
  <tr>
  <?php
           if($fetch_don->num_rows() > 0)
           {
                foreach($fetch_don->result() as $row)
                {
           ?>
                <tr>
                     <td><?php echo $row->id; ?></td>
                     <td><?php echo $row->prenom; ?></td>
                     <td><?php echo $row->nom; ?></td>
                     <td><?php echo $row->email; ?></td>
                     <td><textarea readonly style="border: none; overflow: auto; outline: none; box-shadow: none; resize:none;width:100%"><?php echo $row->msg; ?></textarea></td>
                     <td><?php echo $row->montant; ?></td>
                     <td><?php echo $row->payment_method; ?></td>
                     <td><?php echo $row->datejour; ?></td>

                </tr>
           <?php
                }
           }
           else
           {
           ?>
                <tr>
                     <td colspan="8">No Data Found</td>
                </tr>
           <?php
           }
           ?>	
  </tr>

</table>
<div style="text-align:center">
                        <button id="downloadexcel" class="btn btn-success">Export to excel</button>
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
<script src="<?php echo base_url();?>resources/js/table2excel.js"></script>

<script>
    document.getElementById("downloadexcel").addEventListener('click', function(){
        var table2excel = new Table2Excel();
  table2excel.export(document.querySelectorAll("#table"), "Tableau don");
    });
 
</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>resources/js/main.js"></script>
    <script src="<?php echo base_url();?>resources/js/scripts.js"></script>


</body>
</html>