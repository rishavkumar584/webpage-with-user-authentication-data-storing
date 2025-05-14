<html lang="en">
<head>
<title>Upload image using php and ajax whithout refreshing page </title>

<!-- Bootstrap Css -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script> 
        $(document).ready(function() { 
            $(".upload-image").click(function(){
            	$(".form-horizontal").ajaxForm({target: '.preview'}).submit();
            });

            function imagePreview(fileInput) {
    if (fileInput.files && fileInput.files[0]) {
        var fileReader = new FileReader();
        fileReader.onload = function (event) {
            $('#preview').html('<img src="'+event.target.result+'" width="300" height="auto"/>');
        };
        fileReader.readAsDataURL(fileInput.files[0]);
    }
}
$("#image").change(function () {
    imagePreview(this);
});
        }); 

</script>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid card">
		<div class="navbar-header">
		<a class="navbar-brand" href="#">PHP - Image Uploading with Form JS Example</a>
		</div>
		</div>
	</nav>
	<div class="container card mt-2 mb-2">
	<form action="upload-image.php" enctype="multipart/form-data" class="form-horizontal" method="post">
		<div id="preview" class="mt-2 mb-2"></div>
		<input type="file" name="image" id="image" class="form-control mt-2 mb-2" style="width:30%" />
		<button class="btn btn-primary upload-image mt-2">Save</button>
	
     function imagePreview(fileInput) {
    if (fileInput.files && fileInput.files[0]) {
        var fileReader = new FileReader();
        fileReader.onload = function (event) {
            $('#preview').html('<img src="'+event.target.result+'" width="300" height="auto"/>');
        };
        fileReader.readAsDataURL(fileInput.files[0]);
    }
}
$("#image").change(function () {
    imagePreview(this);
});
        });

	</form>
	</div>
</body>
</html>