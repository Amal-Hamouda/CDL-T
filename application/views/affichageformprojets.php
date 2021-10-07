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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"> </script>
<!--===============================================================================================-->

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

</style> 
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
                    <button type="button" class="btn" data-toggle="modal" data-target="#modalproj"><i class="fa fa-plus"></i> Ajout projet</button>
                    <div class="modal fade" id="modalproj" tabindex="-1" role="dialog" aria-labelledby="modalprojLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalprojLabel">Ajouter un projet</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form id="upload_form">
        <label for="nomduprojet" class="col-form-label">Nom du Projet:</label><br>
        <input type="text" style="background-color:#6c7ae02e;border:1px solid #ced4da" class="form-control" id="nomduprojet" name="nomduprojet"><br>
        <label for="date" class="col-form-label">Date:</label><br>
        <input type="date" style="background-color:#6c7ae02e;border:1px solid #ced4da" class="form-control" id="dateproj" name="dateproj"><br>
        <label for="lieu" class="col-form-label">Lieu:</label><br>
        <input type="text" style="background-color:#6c7ae02e;border:1px solid #ced4da"class="form-control" id="lieu" name="lieu"><br>
        <label for="description" class="col-form-label">Description:</label><br>
        <input type="text" style="background-color:#6c7ae02e;border:1px solid #ced4da"class="form-control" id="description" name="description"><br>
        <label for="Participant" class="col-form-label">Participant:</label><br>
        <input type="number" style="background-color:#6c7ae02e;border:1px solid #ced4da"class="form-control" id="participant" name="participant"><br>
        <label for="budget" class="col-form-label">Budget:</label><br>
        <input type="number" style="background-color:#6c7ae02e;border:1px solid #ced4da" class="form-control" id="budget" name="budget"><br>
        <label for="image_file_cov">Image Couverture: <i class="fa fa-image" style="cursor:pointer;font-size:24px"></i></label>
        <input type="file" style="display:none;visibility:none" onchange="loadFile(event)" name="image_file_cov" id="image_file_cov" class="btn btn-info" />
        <img id="display-image" width="100" style="margin-bottom:10px"/><br>
        <label for="image_file_ext">Image Exterieure: <i class="fa fa-image" style="cursor:pointer;font-size:24px"></i></label>
        <input type="file" style="display:none;visibility:none" onchange="loadFile2(event)" name="image_file_ext" id="image_file_ext" class="btn btn-info" />
        <img id="display-image2" width="100" style="margin-bottom:10px"/><br>
        <label for="image_file_int">Image Interieure: <i class="fa fa-image" style="cursor:pointer;font-size:24px"></i></label>
        <input type="file" style="display:none;visibility:none" onchange="loadFile3(event)" name="image_file_int" id="image_file_int" class="btn btn-info" />
        <img id="display-image3" width="100" style="margin-bottom:10px"/><br>
   
                            </div>
                            <div class="modal-footer">
                                <button id= "exit" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                <button name="upload" id="upload" value="upload" class="btn btn-primary">Ajouter</button>
                            </div>
                            </form>
                            </div>
                        </div>
                        </div>
                        <div id=content>
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
<script>
    $(document).ready(function() {
        $('#upload_form').on('submit', function(e) {
            e.preventDefault();

            if ($('#image_file_cov').val() == '') {
                alert('noimg');
            } else {
                $.ajax({
                    url: "<?php echo base_url(); ?>index.php/Home/ajoutprojet",
                    method: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        alert("IdÃ©e est en cours de traitement");
                    }
                });
            }
        });
    });
</script>

<script>
$('#exit').click(function(){
$('#content').load('<?php echo base_url(); ?>index.php/Home/ajoutprojet')
});
</script>
<script>
var loadFile = function(event) {
	var image = document.getElementById('display-image');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>
<script>
var loadFile2 = function(event) {
	var image = document.getElementById('display-image2');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>
<script>
var loadFile3 = function(event) {
	var image = document.getElementById('display-image3');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>
<script>
    $('input[type=checkbox]').on('change', function (e) {
    if ($('input[type=checkbox]:checked').length > 3) {
        $(this).prop('checked', false);
        alert("Selectionner 3 elements");
    }
});
</script>
<!--<script>
    function getImage(imagename){
        var newimg=imagename.replace(/^.*\\/,"");
        $('#display-image').html(newimg);
    }
</script>
<script>
    function getImage2(imagename){
        var newimg2=imagename.replace(/^.*\\/,"");
        $('#display-image2').html(newimg2);
    }
</script>
<script>
    function getImage3(imagename){
        var newimg3=imagename.replace(/^.*\\/,"");
        $('#display-image3').html(newimg3);
    }
</script>-->