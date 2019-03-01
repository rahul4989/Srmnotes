<?php
require 'common.php';
if(isset($_FILES['myfile'])){
$name=$_FILES['myfile']['name'];
$size=$_FILES['myfile']['size'];
$type=$_FILES['myfile']['type'];
$tmp_name=$_FILES['myfile']['tmp_name'];
$file_destination="uploads/";
if(move_uploaded_file($tmp_name,$file_destination.$name)){
  echo "files uploaded";
}
else{

echo "not uploaded";
}

}

 ?>
