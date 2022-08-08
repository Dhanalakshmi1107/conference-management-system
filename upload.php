<?php
$name = $_POST['name'];
$link = $_POST['link'];

$conn = new mysqli('localhost','root','','testdb');
if($conn->connect_error){
echo "$conn->connect_error";
die("Connection Failed : ". $conn->connect_error);
} else {
$stmt = $conn->prepare("insert into files(name,link) values(?,?)");
$stmt->bind_param("ss", $name, $link);
$execval = $stmt->execute();
echo '<script type ="text/javaScript">';  
echo 'alert("Successfully submitted ")'; 
echo '</script>';
header('Location:eg.html');
$stmt->close();
$conn->close();
}
?>