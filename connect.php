<?php
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password=$_POST['confirm_password'];
$conn = new mysqli('localhost','root','','testdb');
if($conn->connect_error){
echo "$conn->connect_error";
die("Connection Failed : ". $conn->connect_error);
} else {
$stmt = $conn->prepare("insert into sign_up(email,password,confirm_password) values(?,?,?)");
$stmt->bind_param("sss", $email, $password,$confirm_password);
$execval = $stmt->execute();
echo '<script type ="text/javaScript">';  
echo 'alert("Successfully submitted ")'; 
header("Location:login.php");
echo '</script>';
$stmt->close();
$conn->close();
}
?>