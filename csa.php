<?php
require 'common.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>.footer {

      bottom: 0;
      width: 100%;
      height: 60px; /* Set the fixed height of the footer here */
      line-height: 60px; /* Vertically center the text there */
      background-color: #f5f5f5;
    }</style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">Hidden brand</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>

  </div>
</nav>
<div class="container">
  <div class="row">
    <div class="col-sm-1">
    </div>
    <div class="col-sm-10">
<div class="card mb-3">
  <img src="kk.png" class="card-img-top" alt="..."height="500">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

  </div>
</div>
</div>
</div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-1">
    </div>
    <div class="col-sm-10">
      <?php

      $queryi="SELECT name,subject,year FROM upload WHERE subject='csa' ORDER BY id DESC";
      $result=mysqli_query($con,$queryi);

       ?>


      <?php
    $upload='uploads/';
    while($row=mysqli_fetch_array($result)){?>
      <div class="card">

    <div class="card-body">
      <a href="<?php echo  $upload.$row['name']; ?>" target="_blank"><?php echo $row['name']; ?></a>
    </div>
  </div>


  <?php } ?>

  </div>
  </div>
  </div>
  <footer class="footer">
        <div class="container">
          <span class="text-muted">Footer</span>
        </div>
  </footer>
  </body>
</html>
