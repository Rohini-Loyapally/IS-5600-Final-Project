<?php
	//error_reporting(E_ERROR);
		
		$DB_HOST  = "localhost";
		$DB_UID  = "root";
		$DB_PASS = "";
		$DB_NAME  = "plantclinic";
       
		$db_con = mysqli_connect($DB_HOST,$DB_UID,$DB_PASS) or die('Unable to Connect Database');

		mysqli_select_db($db_con,$DB_NAME);

		$id = $_GET["id"];
			
		$sql = "delete from questions where id = '$id'";
		
		$result = mysqli_query($db_con,$sql);
			
			if($result=="1"){
				header("location: viewUploadsAdmin.php");
			}
			else{
				header("location: error.html");
			}
		mysqli_close($db_con);  


?>