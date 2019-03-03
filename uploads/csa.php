<?php
require 'common.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <?php

    $queryi="SELECT name,subject,year FROM upload WHERE subject='csa' ORDER BY id DESC";
    $result=mysqli_query($con,$queryi);

     ?>
     <div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <?php

  while($row=mysqli_fetch_array($result)){
  ?>
    <a href="<?php echo  $row['name']; ?>" target="_blank"><li class="list-group-item"><?php echo $row['name']; ?></li></a>
<?php } ?>
  </ul>
</div>

  </body>
</html>
