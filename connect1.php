<?php

$email = $_POST['email'];
$password = $_POST['password'];
  
$conn = new mysqli('localhost','root','','testdb');
if($conn->connect_error){
echo "$conn->connect_error";
die("Connection Failed : ". $conn->connect_error);
} else {
$stmt = $conn->prepare("select * from sign_up where email= ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt_result = $stmt->get_result();
if($stmt_result->num_rows > 0 ){
$data = $stmt_result->fetch_assoc();
            if ($password ==$data['password']) {
           
            header("Location: mentorsession.html");
            }
            else{
            echo"invalid";
            }
        }
else {
echo"invalid";
}
}


?>
