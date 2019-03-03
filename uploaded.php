<?php
require 'common.php';
if(isset($_FILES['myfile'])){
$name=$_FILES['myfile']['name'];
$size=$_FILES['myfile']['size'];
$type=$_FILES['myfile']['type'];
$subject=$_POST['subject'];
$year=$_POST['year'];
$tmp_name=$_FILES['myfile']['tmp_name'];
$file_destination="uploads/";
if(move_uploaded_file($tmp_name,$file_destination.$name)){
  echo "files uploaded";
  $query_insert="INSERT INTO micrp.upload ( `name`, `subject`, `year`) VALUES ('$name','$subject','$year')";
  $submit_query=mysqli_query($con,$query_insert);
header('location:upload.php');
}
else{

echo "not uploaded";
}

}

 ?>
