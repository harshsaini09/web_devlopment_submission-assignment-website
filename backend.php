<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$servername = "localhost";

$username = "root";

$password = "Harsh@2001";

$DB = "assignment_student_details";
// Create connection

$conn = mysqli_connect($servername, $username, $password, $DB);

 

// Check connection

if (!$conn) {

  die("Connection failed: " . mysqli_connect_error());

}

echo "Connected successfully \n";

$sql = "INSERT INTO information(name,roll_no,email,phone_no,private_c)

VALUES ('$_POST[name]', '$_POST[roll_no]', '$_POST[email]','$_POST[Phone_no]','$_POST[Desp]')";

if ($conn->query($sql) === TRUE) {

  echo "New record created successfully";

} else {

  echo "Error: " . $sql . "<br>" . $conn->error;

}
$conn->close();

}
 $targetfolder = "upload/";

 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

 $ok=1;

$file_type=$_FILES['file']['type'];

if ($file_type=="application/pdf") {

 if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

 {

 echo " The file ". basename( $_FILES['file']['name']). " is uploaded";
     header("Location: Done.html?DONE");

 }

 else {

 echo " Problem uploading file";

 }

}

else {

 echo " You may only upload PDFs, JPEGs or GIF files.<br>";

}


?>