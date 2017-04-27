<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="dist/semantic.min.css">
<link rel="icon" href="foto/home.ico" type="image/x-icon">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous">

</script>
<script src="dist/semantic.min.js"></script>
  <!-- Standard Meta -->
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<!-- Site Properties -->
<title>Import Folder</title>

<link rel="stylesheet" type="text/css" href="dist/components/reset.css">
<link rel="stylesheet" type="text/css" href="dist/components/site.css">

<link rel="stylesheet" type="text/css" href="dist/components/container.css">
<link rel="stylesheet" type="text/css" href="dist/components/grid.css">
<link rel="stylesheet" type="text/css" href="dist/components/header.css">
<link rel="stylesheet" type="text/css" href="dist/components/image.css">
<link rel="stylesheet" type="text/css" href="dist/components/menu.css">

<link rel="stylesheet" type="text/css" href="dist/components/divider.css">
<link rel="stylesheet" type="text/css" href="dist/components/list.css">
<link rel="stylesheet" type="text/css" href="dist/components/segment.css">
<link rel="stylesheet" type="text/css" href="dist/components/dropdown.css">
<link rel="stylesheet" type="text/css" href="dist/components/icon.css">

<script type="dist/semantic.min.js">$('.autumn.leaf').transition('fade');
</script>
</head>
<body style="background-color: #fff;font-family: 'Roboto'">
<?php
$count = 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    foreach ($_FILES['files']['name'] as $i => $name) {
        if (strlen($_FILES['files']['name'][$i]) > 1) {
            if (move_uploaded_file($_FILES['files']['tmp_name'][$i], 'dest/'.$name)) {
                $count++;
            }
        }
    }
}

  ?>

<div class="ui container" style="">
  <div class="ui stackable menu" style="background-color: #000;" >
  	<center><h1 style="color:#fff;">Move Data From one Folder to Other Folder</h1></center>
  
  </div>
  

  <center>
  <form name="myForm" id="myForm" onSubmit="return validateForm()" action="" method="post" enctype="multipart/form-data">
    <center><h3><p style="color: white;font-family: 'Roboto'">Impor Folder</p></h3></center>
    <div class="ui inverted blue button">
      <input type="file" name="files[]" id="files" multiple="" directory="" webkitdirectory="" mozdirectory="" style="color: black"></input>
    </div>

    <br><br>
      <input type="submit" name="submit" class="ui blue toggle button" value="Submit">
      


    </div>
    </center>
  </div>
  <div class="ui container segment align bottom" style="background-color: #000;color: white">
    <center><p>Ilham Rohmad Dani (15650006)</p></center>
  </div>
</form>

</body>
</html>