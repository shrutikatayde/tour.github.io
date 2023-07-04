<!-- LOGIN FORM -->
<?php
#create connection

// $con =mysqli_connect('localhost','root','','tourism');
$con =mysqli_connect('localhost','root','','tourism');

if(isset($_POST['submit']))
      {
         $email=$_POST['email'];
         $password=$_POST['password'];
         // $query="INSERT INTO login(username,password) VALUES ('$email','$password')";
         // $run=mysqli_query($con,$query);

         $sql="select email,password from signup where email='$email' and password='$password'";
         $result=mysqli_query($con,$sql);
         
         if(mysqli_num_rows($result)>0)
         {
            echo "Logined";
         }
         else
         {
            echo "failed";
         }

   }
?>