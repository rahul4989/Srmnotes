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
      height: 60px;
      line-height: 60px;
      background-color: #f5f5f5;
      text-align: center;
    }</style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="index.html">SRMNotes</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="login.php"> Login<span class="sr-only">Login</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Microprocessors</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="csa.php" tabindex="-1" aria-disabled="true">CSA</a>
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
  <img src="http://epilepsyu.com/wp-content/uploads/2018/09/trace-3157431__340.jpg" class="card-img-top" alt="..."height="500">
  <div class="card-body">
    <h5 class="card-title">Microprocessors</h5>
    <p class="card-text">Find your notes updated daily by your faculty.</p>

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

    $queryi="SELECT name,subject,year FROM id8882972_micrp.upload WHERE subject='micro' ORDER BY id DESC";
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
        <span class="text-muted">&copy Madeby-Rahul Kumar 2nd Year CSE Student</span>
      </div>
</footer>

  </body>
</html>
