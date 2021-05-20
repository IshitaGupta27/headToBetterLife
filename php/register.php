<?php

	$server="localhost";
	$username="root";
	$password="";
	$database="headtobetterlife";

	$con=mysqli_connect($server,$username,$password,$database);

	if(!$con)
		{
			die("coonection to this databse failed due to".mysql_connect_error());
		}

	if(isset($_POST['signup']) && $_POST['signup'] =='Register' ){

		$name=$_POST["name"];
		$email=$_POST["email"];
		$password=$_POST["pass"];
		$age=$_POST["age"];
		$date = $_POST["dob"];
		$gender = $_POST["radiogen"];

		// table name - > userAccount
		$sql = "INSERT INTO `useraccount`(`name`,`email`,`password`,`age`,`dob`,`gender`) VALUES ('$name','$email','$password','$age','$date','$gender')";

		if($con->query($sql)==true){
			header('location:../login.html');
		}
		else
		{
			echo "Error: $sql <br> $con->error";
		}
	}
?>