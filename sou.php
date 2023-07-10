<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "student details";

// Create connection
$connection =mysqli_connect($servername, $username, $password, $database);
// Check connection
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}
else {
    echo "MySql Connection Succesful";
}

// $query ="INSERT INTO sou (fname,lname,branch,sem)VALUES('Raj','Vivek','BE',2);";
// $query .="INSERT INTO sou (fname,lname,branch,sem)VALUES('Patel','Neel','ME',4);";
// $query .="INSERT INTO sou (fname,lname,branch,sem)VALUES('Rajput','Uday','CE',6);";
// $query .="INSERT INTO sou (fname,lname,branch,sem)VALUES('Dave','Meet','EE',8);";


$result=$connection -> multi_query($query);

if($connection -> error) {
  echo $conn ->error;
}
else {
  echo "Record inserted succesfully";
}
// $connection -> close();
?>