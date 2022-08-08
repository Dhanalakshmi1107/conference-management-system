<?php
$name = $_POST['name'];
$title = $_POST['title'];
$status=$_POST['status'];
$conn = new mysqli('localhost','root','','testdb');
if($conn->connect_error){
echo "$conn->connect_error";
die("Connection Failed : ". $conn->connect_error);
} else {
$stmt = $conn->prepare("insert into selection(name,title,status) values(?,?,?)");
$stmt->bind_param("sss", $name, $title,$status);
$execval = $stmt->execute();
echo '<script type ="text/javaScript">';  
echo 'alert("Successfully submitted ")'; 
echo '</script>';
header('Location:selection.html');
$stmt->close();
$conn->close();
}
?>