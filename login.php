<!DOCTYPE html>
<html>
<head>
  <title>LOGIN</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
<style>

  /*login page and border sizing*/
body {font-family: Arial, Helvetica, sans-serif;
  font-style: italic;
  background-color:rgb(153, 204, 255) ;
}
form {border: 3px solid #f1f1f1;
  height: 640px;
width: 499px;
margin: 3% auto 5px auto;/* 1% from the top, 1px from the bottom and centered */
background-color: azure;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: 300px;
  padding: 10px 60px;
  background-color: #f44336;
  margin-left:80px;
}

/*for the avatar image positioning */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/*for the avatar image sizing*/
img.avatar {
  width: 30%;
  border-radius: 50%;
}

/*for the contents below image*/
.container {
  padding: 20px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {

  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>


<form action="connect1.php" method="post">
  <div class="imgcontainer">
    <h1 style="font-size: 25px;">LOGIN FORM</h1>
    <img src="https://images.squarespace-cdn.com/content/v1/54b7b93ce4b0a3e130d5d232/1519987020970-8IQ7F6Z61LLBCX85A65S/icon.png?format=1000w" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Email</b></label>
    <input type="text" placeholder="Enter email" name="email" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
   <a href="mentorsession.html"> <button type="submit" rel="import" class="button">Login</button></a>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" onclick="goBack()" class="cancelbtn">Cancel</button>
  </div>
</form>

<script>
  function goBack() {
    window.history.back();
  }
  </script>
</body>
</html>

