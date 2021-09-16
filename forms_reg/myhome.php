<?php
session_start();
$no=$_SESSION['id'];

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'registerdb';
$conn = mysqli_connect($dbhost,$dbuser, $dbpass, $dbname );

if(! $conn ) {
   die('Could not connect: ' . mysqli_connect_error());
}
$query="SELECT * FROM registeration WHERE no='$no'";
$query_run=mysqli_query($conn,$query);
$data=mysqli_fetch_array($query_run);

mysqli_close($conn);
?>


<html>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;    
}
#red,h3{
    margin-left:350px;
    margin-top:50px;

}
</style>
<body>
<table id="red">
<tr>
    <th>name</th>
    <th>Email</th> 
    <th>Gender</th>
    <th>Mobile</th>
    <th>Adress</th>
    <th>State</th>
  </tr>
<tr>
<td><?php echo $data['name'] ?></td>
<td><?php echo $data['email'] ?></td>
<td><?php echo $data['gender'] ?></td>
<td><?php echo $data['phone'] ?></td>
<td><?php echo $data['adress'] ?></td>
<td><?php echo $data['state'] ?></td>
</tr>
</table>
<h3><a href="logout.php">logout</a></h3>
</body>

</html>

