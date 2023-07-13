<?php
		$servername = "localhost";
        $username = "root";
        $password = "";
        $databasename = "student details";
        
        $conn = mysqli_connect($servername, $username, $password, $databasename);

		if ($conn->connect_error) {
            die($conn->connect_error);
        } else {
            echo "MySql Connection Successful!";
        }
        
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$gender = $_REQUEST['gender'];
		$address = $_REQUEST['address'];
		$email = $_REQUEST['email'];
		$feedback =$_REQUEST["feedback"];


		$sql = "INSERT INTO studentsdata VALUES ('$first_name','$last_name','$gender','$address','$email','$feedback')";
		
		if(mysqli_query($conn, $sql)){
			echo "Successfully Saved";
		} else{
			echo "ERROR $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>