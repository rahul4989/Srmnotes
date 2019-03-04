<?php
session_start();
if(($_SESSION['id']!=true)){
  header('location:login.php');
}?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link rel="stylesheet" href="uplo.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-2">
          <a href="logout.php">Logout</a>
        </div>
      </div>
    </div>



    <div class="container">
      <div class="panel panel-default">
        <div class="panel-heading"><strong>Upload Files</strong> <small>file upload</small></div>
        <div class="panel-body">

          <!-- Standar Form -->
          <h4>Select files from your computer</h4>
          <form action="uploaded.php" method="post" enctype="multipart/form-data" id="js-upload-form">
            <div class="form-inline">
              <div class="form-group">
                <input type="file" name="myfile" id="js-upload-files" >
              </div>
              <div class="form-group">
                  <input type="radio" name="subject" value="micro" />micro
              </div>
              <div class="form-group">
                <input type="radio" name="subject" value="csa" />csa
              </div>
              <div class="form-group">
              <input type="number" name="year" placeholder="year"/>
                </div>
              <button type="submit" class="btn btn-sm btn-primary" id="js-upload-submit">Upload files</button>
            </div>
          </form>


        </div>
      </div>
    </div> <!-- /container -->

<script src="up.js"></script>
  </body>
</html>
