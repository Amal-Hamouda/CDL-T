<!DOCTYPE html>
<html>

<head>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"> </script> 
</head>

<body>

    <h2>HTML Forms</h2>

    <form id="upload_form">
        <label for="nomduprojet">Nom du Projet</label><br>
        <input type="text" id="nomduprojet" name="nomduprojet"><br>
        <label for="lname">Date</label><br>
        <input type="date" id="dateproj" name="dateproj"><br>
        <label for="lieu">Lieu</label><br>
        <input type="text" id="lieu" name="lieu"><br>
        <label for="description">Description</label><br>
        <input type="text" id="description" name="description"><br>
        <label for="Participant">Participant</label><br>
        <input type="number" id="participant" name="participant"><br>
        <label for="budget">Budget</label><br>
        <input type="number" id="budget" name="budget"><br>
        <label for="image_file_cov">Image Couverture</label><br>
        <input type="file" name="image_file_cov" id="image_file_cov" class="btn btn-info" /><br>
        <label for="image_file_ext">Image Exterieure</label><br>
        <input type="file" name="image_file_ext" id="image_file_ext" class="btn btn-info" /><br>
        <label for="image_file_int">Image Interieure</label><br>
        <input type="file" name="image_file_int" id="image_file_int" class="btn btn-info" /><br>
        <button name="upload" id="upload" value="upload">Upload</button>
    </form>

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