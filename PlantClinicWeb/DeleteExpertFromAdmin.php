<?php
	error_reporting(E_ERROR);
		
		$DB_HOST  = "localhost";
		$DB_UID  = "root";
		$DB_PASS = "";
		$DB_NAME  = "plantclinic";
       
		$db_con = mysqli_connect($DB_HOST,$DB_UID,$DB_PASS) or die('Unable to Connect Database');

		mysqli_select_db($db_con, $DB_NAME);

		$email = $_GET["email"];
			
		$sql = "delete from faculty where email = '$email'";
		
		$result = mysqli_query($db_con,$sql);
			
			if($result=="1"){
				header("location: viewExperts.php");
			}
			else{
				header("location: error.html");
			}
		mysqli_close($db_con);  


?>