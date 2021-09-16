
<?php
session_start();

   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'registerdb';
   $conn = mysqli_connect($dbhost,$dbuser, $dbpass, $dbname );
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_connect_error());
   }

   
        if(isset($_POST['btnnn']))
        {
        
            $username=$_POST['username'];
            $password=$_POST['password'];

             

            $query="SELECT * FROM registeration WHERE email='$username' and password='$password'";
            $query_run=mysqli_query($conn,$query);
            $data=mysqli_fetch_array($query_run);



            if (mysqli_num_rows($query_run) > 0)
            {
                //echo "login success";
                $_SESSION['id']=$data['no'];
                header("Location:myhome.php");
            }
            else
            {
                echo "login failed";
            }
        }
            
    

mysqli_close($conn);


?>