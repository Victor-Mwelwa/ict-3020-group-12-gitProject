<?php
error_reporting (E_ALL ^ E_NOTICE);
$host = "localhost";
$dbusername = "root";
$dbPassword = "";
$dbname = "tar";

$conn = new mysqli($host, $dbusername, $dbPassword, $dbname);

if(mysqli_connect_error()){
die('connect error('. mysqli_connect_error().')'. mysqli_connect_error());
} else {
$sql = "SELECT username, email, computerNumber from users";
$result = $conn->query($sql);

       }
$conn->close();
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    <style type="text/css">
            .wrapper{ width: 350px; padding: 20px; }
     </style>

<title>ONLINE REGISTER</title>

  </head>
  <body>
<div class="wrapper">
<table align = "center" border="1px" style="width:600px; height:40px;">
      <tr>
          <th colspan="4"><h2>students record</h2></th>
      </tr>
      <t>
          <th>username</th>
          <th>computerNumber</th>
          <th>status</th>

      </t>
 <?php

       while ($rows = mysqli_fetch_assoc($result)) {
         ?>
          <tr>

      <td><?php print_r($rows['username'])?></td>

      <td><?php print_r($rows['computerNumber'])?></td>
      <td><input type="checkbox" name="computerNumber" value="present"></td>


          </tr>
          <?php
       }

 ?>

    </table>
    <div class="form-group">
     <input type="submit" class="btn btn-primary" value="save">
   </div>
</div>
</body>
</html>                                                                                                                                                                                                                                                                                                                                                                                      
