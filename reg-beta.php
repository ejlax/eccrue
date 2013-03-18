<?php
ob_start();
session_start();
include_once('config/connect.php');
include_once('config/salt.php');
//print_r($_POST);
if(isset($_POST['firstName']) and isset($_POST['lastName']) and isset ($_POST['email1']) and isset($_POST['password1'])){
	if (($_POST['email1']) == $_POST['email2']) {
		//echo "THis isn't working!";
		$fname=$_POST['firstName'];
		$lname=$_POST['lastName'];
		$email=$_POST['email1'];
		$pwd=sha1($_POST['password1'].$pepper);
		$_SESSION['email'] = $email;
		$query="SELECT COUNT(id) FROM users where email = '$email'";
		//echo $query."<br>";
		$result=mysql_query($query,$link);
		list($count)=mysql_fetch_array($result);
		//echo $count."<br>";
		if ($count>0){
			echo "<div class='row contact'><p>That Email already has an account. Did you "."<a href='#pass_reset'>forget</a>"." your password?</p></div>";
		}else{
			$query="SELECT COUNT(id) FROM users where email = '$email'";
			//echo $query."<br>";
			$result=mysql_query($query,$link);
			list($count)=mysql_fetch_array($result);
			//echo $count."<br>";
			if ($count>0){
			echo "<h4 class='alert-info'>That EmployeeId or Email already has an account. Did you "."<a href='reset_password.php'>forget</a>"." your password?</h4>";
			}else{
				$_SESSION['email'] = $email;
				$sql="INSERT INTO users(fName,lName,email,password,salt) VALUES('$fname','$lname','$email','$pwd','$salt')";
				mysql_query($sql,$link);
				//header('location:../eccrue/#in_signup&message=1');
				echo "Thank you for registering. Now enter your company information.";
				echo "<div class='container' id='co_signup'>
					<div class='section_header'>
						<h3>Company Info</h3>
					</div>
					<div id='signup_final' class='row contact'>
						<div id='register_response'>	
						</div>	
						<form id='company_info' class='form' method='post' action=''>
							<div class='row form'>
								<div class='span6'>
									<input class='name' name='company_name' type='text' placeholder='Company Name' required>
									<input class='name' name='company_id'type='text' placeholder='EIN / SSN'>
									<input class='mail' name='co_email'type='text' placeholder='Email'>
									<!--  <input class='mail' name='email2'type='text' placeholder='Confirm Email' required>
									<input class='password' name='password1' type='password' placeholder='Password' required>
									<input class='password' name='password2' type='password' placeholder='Confirm Password' required>  -->
									<br>
									<input class='btn btn-info' type='submit' value='Next'>
								</div>
							</div>
						</form>
					</div>
				</div>";
			}
		}
	}else{
	echo "ERROR";
}
}
ob_flush();
//$time = getdate();
//echo "<br>".$time[weekday].",&nbsp".$time[month]."&nbsp".$time[mday].",&nbsp".$time[year]."<br>";
?>