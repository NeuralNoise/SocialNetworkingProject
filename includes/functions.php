<?php
	
	include 'dbh.php';

	$first=$last=$email=$pwd=$pwd2=$day=$month=$year=$dob=$gender="";

	function post_content($conn){
		if(isset($_POST['post'])){
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				$uname = $_SESSION['first']." ".$_SESSION['last'];
				$caption = filter($_POST['caption']);
				if(empty($caption)){
					
				}
				else{
						$caption=nl2br(filter($caption));
						$uid = $_SESSION['uid'];
						$date = date('y-m-d');
						$sql="INSERT INTO posts (uid,date,caption) VALUES ('$uid','$date','$caption')";
						$result=$conn->query($sql);

				}
			}
		}
	}

	function show_content($conn){
		$sql = "SELECT * FROM posts";
		$result = $conn->query($sql);
		
		while($row = $result->fetch_assoc()){
			echo "<div class='card posts'>".$row['uid']."<br>".$row['date']."<br>".nl2br($row['caption'])."</div>";
		}

	}



	function userExists($email,$conn){
		$sql = "SELECT * FROM phbinhrm WHERE email='$email'";
		$result = $conn->query($sql);
		$user_check = mysqli_num_rows($result);
		
		if($user_check > 0){

			//User Exists
			return true;
		}
		else{
			return false;
		}
	}

	function addUser($conn,$first,$last,$email,$pwd,$dob,$gender){
		$sql = "INSERT INTO phbinhrm (first,last,email,pwd,dob,gender) VALUES ('$first','$last','$email','$pwd','$dob','$gender')";
		$conn->query($sql);
		
		$sql = "SELECT * FROM phbinhrm WHERE email='$email'";
		$result = $conn->query($sql);
		$usrdata = $result->fetch_assoc();

		return $usrdata;
	}

	function filter($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	function signup($conn){
		if(isset($_POST['btn-signup'])){
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				$first = ucfirst(strtolower(filter($_POST['first'])));
				$last = ucfirst(strtolower(filter($_POST['surname'])));
				$email = filter($_POST['email']);
				$pwd = filter($_POST['pwd']);
				$pwd2 = filter($_POST['pwd2']);
				$day = filter($_POST['birthday_day']);
				$month = filter($_POST['birthday_month']);
				$year = filter($_POST['birthday_year']);
				$dob = $year."-".$month."-".$day;
				$gender = filter($_POST['sex']);

				if(empty($first) || empty($last) || empty($email) || empty($pwd) || empty($pwd2) || empty($dob) || empty($gender)){
					
					header('Location: ./?error=empty_fields');
					exit();
				}
				else{

					$status = userExists($email,$conn);

					if($status){
						header('Location: ./?error=user_exists');
					}
					else{
						//User doesn't exists so encrypt data and add user
						if($pwd2 != $pwd){
							header('Location: ./?error=password_mismatch');
						}
						else{

							$enc_pwd = password_hash($pwd,PASSWORD_DEFAULT);
							$row = addUser($conn,$first,$last,$email,$enc_pwd,$dob,$gender);
							session_start();
							$_SESSION = $row;
							header('Location: ./dashboard.php');
						}
						
					}
				}
			}
		}
	}

	function checkLogin($conn,$email,$pwd){
		$sql = "SELECT * FROM phbinhrm WHERE email='$email'";
		$result = $conn->query($sql);
		$usrdata = $result->fetch_assoc();
		$hash = $usrdata['pwd'];
		$decrypt = password_verify($pwd,$hash);
		
		if(!$decrypt){
			//password mismatch
			header('Location: ./?invalid_password');
		}
		else{
			return $usrdata;
		}
	}

	function login($conn){
		if(isset($_POST['btn-login'])){
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				$email = filter($_POST['email']);
				$pwd = filter($_POST['pwd']);

				if(empty($email) || empty($pwd)){
					header('Location: ./?error=empty_fields');
				}
				else{
					$status = userExists($email,$conn);

					if(!$status){
						header('Location: ./?error=invalid_user');
					}
					else{
						$row = checkLogin($conn,$email,$pwd);
						if(!isset($row['uid'])){
							header('Location: ./?error=invalid_details');
						}
						else{
							session_start();
							$_SESSION = $row;
							header('Location: ./dashboard.php');
						}
					}
				}
			}
		}
	}


	function logout(){
		if(isset($_POST['btn-logout'])){
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				session_start();
				session_destroy();
				header('Location: ./?message=logout_sucess');
			}
		}
	}