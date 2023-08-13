<?php 
require 'config.php';
if (isset($_POST['submit'])) 
{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$sql="INSERT INTO  user ( id ,fname,lname,phone,email ,password) VALUES 
    (NULL,'$fname','$lname','$phone','$email','$password')";
	
if ($con->query($sql) == TRUE) {
  echo "New record created successfully";
  header ("Location: index.php");
} 

else {
  echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close();
}
?>


<html>
<head>
  <meta charset="UTF-8" />
  <title>
    must hospital
  </title>
  <meta name="discription" content="this hospital is perfect" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/regstration.css">
</head>

<center>
<header>
  <h1>must hospital system</h1>
  <img src="css/dow.jpg" alt="logo" style =>
  <dl>
    <dl><a href="index.php" class = "link selected"><b> Home</b> </a></dl><br>
    <dl><a href="#" class = "link"><b>about us</b> </a></dl><br>
    <dl><a href="/" class = "link"><b>services</b></a></dl><br>
    <dl><a href="#" class = "link"><b>contact us</b></a></dl><br>
    <dl><a href="#" class = "link"><b>Help</b></a></dl><br>
  </dl>
</header>

<body>
<form class= 'container' action ='' method="post">
  <label for="fname">first name:</label><br>
  <input type="text" required placeholder="f.name" name="fname"><br>
  <label for="lname">last name:</label><br>
  <input type="text" required placeholder="l.name" name="lname"><br>
  <label for="phonenumber">phone number:</label><br>
  <input type="numbers" required placeholder="phonenumber" name="phone"><br>
  <label for="email">your e-mail:</label><br>
  <input type="email" required placeholder="e-mail" name="email"><br>
  <label for="name">Password:</label><br>
  <input type="password" required placeholder="password" name="password" minlength="8" maxlength="12"><br>
  <input type="submit" value="register" name = "submit">
</form>
</body>
<hr>
<footer>

  <dl>
    <dl><a href="index.php" class = "link selected">Home </a></dl><br>
    <dl><a href="#" class = "link">about us </a></dl><br>
    <dl><a href="/" class = "link">services</a></dl><br>
    <dl><a href="#" class = "link">contact us</a></dl><br>
    <dl><a href="#" class = "link">Help</a></dl><br>
  </dl>

</footer>
</center>
</html>

