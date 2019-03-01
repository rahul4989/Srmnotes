<?php
require 'common.php';

$loginkey=$_POST['loginkey'];
$queryy="SELECT loginkey FROM login WHERE loginkey='$loginkey'";
$query_res=mysqli_query($con,$queryy);
$rowss=mysqli_num_rows($query_res);
if($rowss==1){

  echo"logged in";
}
else{

  echo "not a admin";
}
 ?>
