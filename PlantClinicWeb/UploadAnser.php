<?php
	//error_reporting(E_ERROR);
		session_start();
		$DB_HOST  = "localhost";
		$DB_UID  = "root";
		$DB_PASS = "";
		$DB_NAME  = "plantclinic";
       
		$db_con = mysqli_connect($DB_HOST,$DB_UID,$DB_PASS) or die('Unable to Connect to Database');

		mysqli_select_db($db_con, $DB_NAME);

			$id = $_POST["id"];
			$qun = $_POST["qun"];
			$suggestion = $_POST["ans"];
			
			
			
			$sql = "update questions set suggestion = '$suggestion' , answered = 'YES' where id = '$id' ";

			$result = mysqli_query($db_con,$sql);
			
			if($result=="1"){
				$sql1 = "insert into answers(qid, question, answer, ansfrom, dept) values('$id','$qun','$suggestion','Admin','Admin')";
				$result1 = mysqli_query($db_con,$sql1);
			
				header("Location: success.html");
			}else{
				header("Location: error.html");
			}
			
		mysqli_close($db_con);  
?>