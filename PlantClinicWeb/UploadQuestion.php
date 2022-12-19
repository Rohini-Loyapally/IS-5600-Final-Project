<?php
 
// Path to move uploaded files
$target_path = "uploads/";
 
// array for final json respone
$response = array();
 
// getting server ip address
$server_ip = gethostbyname(gethostname());
 
// final file url that is being uploaded
$file_upload_url = 'http://localhost/PlantDisease/' .  '/' . $target_path;
 
 
if (isset($_FILES['image']['name'])) {
    $target_path = $target_path . basename($_FILES['image']['name']);
 
    // reading other post parameters
    $filename = basename($_FILES['image']['name']);
		
	$filePath = $file_upload_url.''.$filename;
	
	$name = isset($_POST['name']) ? $_POST['name'] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$mobile = isset($_POST['mobile']) ? $_POST['mobile'] : '';
    $desc = isset($_POST['desc']) ? $_POST['desc'] : '';
	
    $response['file_name'] = basename($_FILES['image']['name']);
    $response['email'] = $email;
    $response['name'] = $name;
    $response['mobile'] = $mobile;
    $response['desc'] = $desc;
 
    try {
        // Throws exception incase file is not being moved
        if (!move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
            // make error flag true
            $response['error'] = true;
            $response['message'] = 'Could not move the file!';
        }
 
        // File successfully uploaded
        $response['message'] = 'File uploaded successfully!';
        $response['error'] = false;
        $response['file_path'] = $file_upload_url . basename($_FILES['image']['name']);
    } catch (Exception $e) {
        // Exception occurred. Make error flag true
        $response['error'] = true;
        $response['message'] = $e->getMessage();
    }
	
		$db_host  = "localhost";
		$db_uid  = "root";
		$db_pass = "";
		$db_name  = "plantclinic";
       
		$db_con = mysqli_connect($db_host,$db_uid,$db_pass) or die('Unable to Connect to Database');

		mysqli_select_db($db_con, $db_name);

		$sql = "insert into questions(username, phone, email, descr, filename, filepath) values('$name','$mobile','$email','$desc','$filename','$filePath')" ;
		
		$result = mysqli_query($db_con,$sql);
			
			if($result=="1"){
				echo "Success";				
			}else{
				echo "Fail";
			}
		mysqli_close($db_con);  
	
} else {
    // File parameter is missing
    $response['error'] = true;
    $response['message'] = 'Not received any file!F';
}
 
// Echo final json response to client
echo json_encode($response);
?>