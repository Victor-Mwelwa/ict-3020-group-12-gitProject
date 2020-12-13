<?php
error_reporting (E_ALL ^ E_NOTICE);
$username = $_POST ['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$course = $_POST['course'];
$computerNumber = $_POST['computerNumber'];

/* Database credentials. */
$host = "localhost";
$dbusername = "root";
$dbPassword = "";
$dbname = "tar";
// connecting to the database
$conn = new mysqli($host, $dbusername, $dbPassword, $dbname);

if(mysqli_connect_error()){
die('connect error('. mysqli_connect_error().')'. mysqli_connect_error());
} else {
  $SELECT = "SELECT email from users where email = ? limit 1 ";
  $INSERT = "INSERT into users (username, password, email, course, computerNumber) values(?,?,?,?,?)";

  // prepare statement
  $stmt = $conn->prepare($SELECT);
  $stmt -> bind_param ('s', $email);
  $stmt -> execute();
  $stmt -> bind_result($email);
  $stmt -> store_result();
  $rnum = $stmt-> num_rows();

  if($rnum==0){
        $stmt ->close();
        $stmt = $conn->prepare($INSERT);
        $stmt -> bind_param("sssss", $username, $password, $email,$course,$computerNumber);
        $stmt->execute();
      header("location: welcome.php");
echo "REGISTERED COLLECTLY";
}else {echo "someone already registered using this email"; }
//<a href="login.php">Login here</a>.
$stmt->close();
$conn->close();

}
?>
