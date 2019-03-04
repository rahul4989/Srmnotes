<?php
require 'common.php';

$loginkey=$_POST['loginkey'];
$queryy="SELECT loginkey FROM id8882972_micrp.login WHERE loginkey='$loginkey'";
$query_res=mysqli_query($con,$queryy);
$rowss=mysqli_num_rows($query_res);
if($rowss==1){
  $id=1234;


$_SESSION['id']=true;
  header('location:upload.php');
}
else{

  echo "not a admin";
}
 ?>
