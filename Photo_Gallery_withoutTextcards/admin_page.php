<?php
 session_start();
?>

<html>
 <head>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="admin.css">
  <title>upload pictures</title>

</head>

<body>
<div class="container" >
    <div class="card">
        <div class="card-body">
        <form action="includes/upload_pdf.php?" method="POST" enctype="multipart/form-data">

        <div class="form-group row">
          <label for="file_name" class="col-sm-3 col-form-label">Filename </label>
          <div class="col-sm-9">
          <input type="text" class="form-control" name="file_name" required/>
          </div>
        </div> 

        <div class="form-group row">
          <label for="file_L" class="col-sm-3 col-form-label">Upload image</label>
          <div class="col-sm-9">
          <input type="file" class="form-control-file" name="file_L" id="fileToUpload" required/> 
          </div>
        </div> 

          <input type="submit" class="btn btn-primary" value="Upload files" name="file_submit"/>
          </div>
      </form>
      </div>
    </div>
</div>

 <?php


 $dir = 'images';
 $files = array_diff(scandir($dir,1), array(".", "..") );

 $filecount = count($files);

     for ($x = 0; $x < $filecount; $x++) {?>
        <div class="container" style="margin-top: 1%;">
        <div class="card">
            <div class="card-body">    
                <label >Image: </label >
                <?php echo $files[$x]; ?> 
                <a href='includes/delete_file.php?file='<?php echo$files[$x]; ?>>Delete file</a> 
            </div>
        </div>
        </div>
      <?php } ?>

</body>
</html>
