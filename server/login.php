<?php
if(isset($_POST["signIn"])){
	$email = $_POST["inputEmail"];
	$pass = $_POST["inputPassword"];
$host="103.21.58.83";
$port=3306;
$socket="";
$user="ieeeyi9s_app";
$password="9f93557d309f655ff06f109a08dcf7c4";
$dbname="ieeeyi9s_app";

$conn = new mysqli($host, $user, $password, $dbname, $port, $socket);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
  }
  $sql = "select * from login_master where login_user='$email' and login_pass='$pass'";
  $result = mysqli_query($conn, $sql);
  $rowcount=mysqli_num_rows($result);
  console.log($rowcount);
if ($rowcount > 0) {
	header("Location: http://ieeeyesist12.org/global_hackathon/jury_dashboard.html");
  } else {
	header("Location: http://ieeeyesist12.org/global_hackathon/login.html");
  }
}
  $conn->close();
?>