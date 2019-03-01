<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>



    <form method="POST" enctype="multipart/form-data" action="uploaded.php">
      <input type="file" name="myfile"/>
      <input type="radio" name="subject"  value="micro" />micro
      <input type="radio" name="subject"  value="csa" />csa
      <input type="number" name="year" placeholder="year"/>
      <button name="btn">Upload</button>
    </form>


  </body>
</html>
