<?php
session_start();

include 'databaseconnect.php';

$username=$_SESSION["username"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Upload image using php and ajax whithout refreshing page </title>

<!-- Bootstrap Css -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script> 
        $(document).ready(function() { 
            $(".upload-my_image").click(function(){
                $(".form-horizontal").ajaxForm({target: '.preview'}).submit();
            });

            function my_imagePreview(fileInput) {
    if (fileInput.files && fileInput.files[0]) {
        var fileReader = new FileReader();
        fileReader.onload = function (event) {
            $('#preview').html('<img src="'+event.target.result+'" width="300" height="auto"/>');
        };
        fileReader.readAsDataURL(fileInput.files[0]);
    }
}
$("#my_image").change(function () {
    my_imagePreview(this);

    function my_imagePreview(fileInput) {
    if (fileInput.files && fileInput.files[0]) {
        var fileReader = new FileReader();
        fileReader.onload = function (event) {
            $('#preview').html('<img src="'+event.target.result+'" width="300" height="auto"/>');
        };
        fileReader.readAsDataURL(fileInput.files[0]);
    }
}
$("#my_image").change(function () {
    my_imagePreview(this);
});
        });
});

</script>
</head>
<body>
    <center>
    <nav class="navbar navbar-default">
        <div class="container-fluid card">
        <div class="navbar-header">
        <a class="navbar-brand" href="#">TATA Associates</a>
        </div>
        </div>
    </nav>
    <div class="container card mt-2 mb-2">
    <form action="upload.php" enctype="multipart/form-data" class="form-horizontal" method="post">
        <div id="preview" class="mt-2 mb-2"></div>
        <input type="file" name="my_image" id="my_image" class="form-control mt-2 mb-2" style="width:30%" />
        <button class="btn btn-primary upload-my_image mt-2" name="upload">Register</button>
    
     

    </form>
    </div>

</center>
</body>
</html>