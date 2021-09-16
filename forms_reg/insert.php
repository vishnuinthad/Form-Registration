<html>
<head>
</head>
<style>
h2,h4{
   text-align:center;
   margin-top:100px;
}
</style>
<body>
<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'registerdb';
   $conn = mysqli_connect($dbhost,$dbuser, $dbpass, $dbname );
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_connect_error());
   }
   
   if(isset($_POST['btnn'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $cpassword=$_POST['cpassword'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone'];
    $adress=$_POST['adress'];
    $state=$_POST['state'];

$query="INSERT INTO registeration (name,email,password,gender,phone,adress,state) VALUES ('$name','$email','$cpassword','$gender','$phone','$adress','$state')";
$query_run=mysqli_query($conn,$query);


}
   if(! $query_run ) {
      die('Could not enter data: ' . mysqli_connect_error());
   }
   
   echo "<h4>Registered successfully\n</h4>";
   
   
   mysqli_close($conn);
  
?>

<h2><a href="login.php" class="ForgetPwd" value="Login">Login</a></h2>
</body>
<html>
