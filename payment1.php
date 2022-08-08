<?php
$name = $_POST['name'];
$card_number = $_POST['card_number'];
$expiry=$_POST['expiry'];
$password = $_POST['password'];
$conn = new mysqli('localhost','root','','testdb');
if($conn->connect_error){
echo "$conn->connect_error";
die("Connection Failed : ". $conn->connect_error);
} else {
$stmt = $conn->prepare("insert into payment(name,card_number,expiry,password) values(?,?,?,?)");
$stmt->bind_param("ssss", $name,$card_number,$expiry,$password);
$execval = $stmt->execute();
echo '<script type ="text/javaScript">';  
echo 'alert("Successfully submitted ")'; 
header("Location:eg.html");
echo '</script>';
$stmt->close();
$conn->close();
}
?>