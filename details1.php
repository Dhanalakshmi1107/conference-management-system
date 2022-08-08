<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$qualification = $_POST['qualification'];
$gender = $_POST['gender'];
$state = $_POST['state'];
$city = $_POST['city'];
$dob = $_POST['dob'];
$age = $_POST['age'];
$title = $_POST['title'];
$email = $_POST['email'];
$ph_no = $_POST['ph_no'];

$conn = new mysqli('localhost','root','','testdb');
if($conn->connect_error){
echo "$conn->connect_error";
die("Connection Failed : ". $conn->connect_error);
} else {
$stmt = $conn->prepare("insert into details(firstname,lastname,qualification,gender,state,city,dob,age,title,email,ph_no) values(?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("sssssssssss",$firstname,$lastname,$qualification,$gender,$state,$city,$dob,$age,$title,$email,$ph_no);
$execval = $stmt->execute();
echo '<script type ="text/JavaScript">';  
echo 'alert("Successfully submitted ")';  
header('Location:payment.html');
echo '</script>';
$stmt->close();
$conn->close();
}
?>
