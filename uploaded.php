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
ini_set('upload_max_filesize', '10M');
ini_set('post_max_size', '10M');
ini_set('max_input_time', 300);
ini_set('max_execution_time', 300);
if(move_uploaded_file($tmp_name,$file_destination.$name)){
  echo "files uploaded";
  $query_insert="INSERT INTO id8882972_micrp.upload ( `name`, `subject`, `year`) VALUES ('$name','$subject','$year')";
  $submit_query=mysqli_query($con,$query_insert);

}
else{

echo "not uploaded";
}

}

 ?>
