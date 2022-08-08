<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"/>
   <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
 <!--our css-->
    <link rel="stylesheet" type="text/css">
    <title>LINK PAGE</title>
  <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border_box;/*to box model*/
}
.main{
        font-family: "Merienda+One", sans-serif;
        
    background-image:url(https://www.pixelstalk.net/wp-content/uploads/images2/Free-Download-Computer-Wallpaper-HD-for-Desktop.jpg);
    background-repeat:no-repeat;
    background-size:cover;
        overflow-x: hidden;
}
.tb   {
       margin-top:50px;
       margin-left:280px;
        border-collapse: collapse;
        width: 700px;
        color: #f0fffb;
        font-family: monospace;
        font-size: 25px;
        text-align: center;
        }
.th1 {
        background-color:#f5429c;
        color: white;
        }
.heading{
  color:white;
}
        </style>
</head>

<body class="main">
  <!--navbar-->
  <nav class="navbar navbar-dark bg-dark">
        <!-- Navbar content -->
     
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  MENU
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" rel="import" href="reviewermenu.html">REVIEWER HOMEPAGE</a></li>
                  <li><a class="dropdown-item" rel="import" href="selection.html">SELECTION PAGE</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="eg.html" onclick="yourFunction(); return false">Cancel</a></li>
                </ul>
              </li>
            </ul>
        </div>
      </nav>
    </nav>
 <div class="heading">
    <h3 style="font-size:40px" ><strong>LINK PAGE</strong></h3>
</div>
 <table class="tb">
     
     <tr>
    <th class="th1">NAME</th>
    <th class="th1">LINK</th>  
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "testdb");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT name,link FROM files";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td >" . $row["name"]. '</td><td><a href="https://docs.google.com/document/d/1qvJqHIOjEs2Yidyd36B6qZ6YhAdh2d0S/edit">'.$row["link"]. "</a></td><td>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
 <!-- JavaScript Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>