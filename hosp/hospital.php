<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";
 

// Create connection
$conn = new mysqli('localhost','root','','hospital');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// get the post records
$FName = $_POST['fname'];
$Surname = $_POST['sname'];
$Email = $_POST['email'];
$DOB = $_POST['dob'];
$Address = $_POST['address'];
$Phone = $_POST['phone'];
$Gender = $_POST['gender'];
$Name = $_POST['kname'];
$Relationship = $_POST['relationship'];
$KEmail = $_POST['kemail'];
$KPhone = $_POST['kphone'];
$Finance = $_POST['payment'];
$Drugs = $_POST['drugs'];
$Ward = $_POST['ward'];
$Bed = $_POST['bed'];


//inserting data into database
$sql = "INSERT INTO patient (FName, Surname, Email, DOB, Address, Phone, Gender, Name, Relationship, KEmail, KPhone, Finance, Drugs, Ward, Bed)
VALUES ('$FName','$Surname','$Email','$DOB','$Address', '$Phone', '$Gender','$Name','$Relationship','$KEmail','$KPhone','$Finance','$Drugs','$Ward','$Bed')";

//checking the condition if its true
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>