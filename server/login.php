<?php
if (isset($_POST['signIn'])){

   $dbhost = '103.21.58.83:3306';
   $dbuser = 'ieeeyi9s_app';
   $dbpass = '9f93557d309f655ff06f109a08dcf7c4';
   
   $conn = new mysqli($dbhost, $dbuser, $dbpass,'ieeeyi9s_app');
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }   
   $email = $_POST['inputEmail'];
   $passwd = $_POST['inputPassword'];
   $stmt = $conn->prepare("SELECT * FROM login_master;");
	$stmt->execute();
	$stmt->bind_result($id, $login_user, $login_pass);
   $loginDetails = array();
   while($stmt->fetch()) {
	$temp = array();
	$temp['login_id'] = $id;
	$temp['login_user'] = $login_user;
  $temp['login_pass'] = $login_pass;
  array_push($loginDetails, $temp);

    if($email == $login_user and $passwd == $login_pass){
      echo json_encode($loginDetails);
      header("location: http://ieeeyesist12.org/global_hackathon/jury_dashboard.html");
    }else{
      header("location: http://ieeeyesist12.org/global_hackathon/login.html");
      echo json_encode($loginDetails);
    }
  }   
   mysql_close($conn);
}
?>