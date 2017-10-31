<!DOCTYPE html>
<html>
<head lang="en">
<meta charset="UTF-8">
<script src="js/html5shiv.js"></script><!--IE８以前のバージョンの場合でもレイアウトが崩れないようにする-->
<script type="text/javascript">
window.onload = function() {
	var options =
		{
			imageBox: '.imageBox',
			thumbBox: '.thumbBox',
			spinner: '.spinner',
			imgSrc: 'sora.png'
		}
	var cropper;
	document.querySelector('#file').addEventListener('change', function(){
		var reader = new FileReader();
		reader.onload = function(e) {
			options.imgSrc = e.target.result;
			cropper = new cropbox(options);
		}
		reader.readAsDataURL(this.files[0]);
		this.files = [];
	})
	document.querySelector('#btnCrop').addEventListener('click', function(){
		var img = cropper.getAvatar()
		document.querySelector('.cropped').innerHTML += '<img src="'+img+'">';
	})
	document.querySelector('#btnZoomIn').addEventListener('click', function(){
		cropper.zoomIn();
	})
	document.querySelector('#btnZoomOut').addEventListener('click', function(){
		cropper.zoomOut();
	})
};
</script>
<script src="js/img_edit.js"></script>
<link rel="stylesheet" href="css/default.css" type="text/css" />
	
	
<title>Tinny Cropper</title>

    <style>
        .container
        {
            position: absolute;
            top: 10%; left: 10%; right: 0; bottom: 0;
        }
        .action
        {
            width: 400px;
            height: 30px;
            margin: 10px 0;
        }
        .cropped>img
        {
            margin-right: 10px;
        }
    </style>
</head>
<body>


<div class="container">
    <div class="imageBox">
        <div class="thumbBox"></div>
        <div class="spinner" style="display: none">Loading...</div>
    </div>
    <div class="action">
        <input type="file" id="file" style="float:left; width: 250px">
        <input type="button" id="btnCrop" value="Crop" style="float: right">
        <input type="button" id="btnZoomIn" value="+" style="float: right">
        <input type="button" id="btnZoomOut" value="-" style="float: right">
    </div>
    <div class="cropped">

    </div>
</div>


</body>
</html>