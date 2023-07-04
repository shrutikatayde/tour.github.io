<?php
#create connection
      // $con =mysqli_connect('localhost','root','','tourism');
      $con =mysqli_connect('sql110.epizy.com','epiz_33471398','K9Z48T6hWvn8X','epiz_33471398_tourism');


      if(isset($_POST['sb']))
      {
         $username=$_POST['username'];
         $email=$_POST['email'];
         $password=$_POST['password'];
         $mobileno=$_POST['mobile'];
         $query="INSERT INTO signup(username,email,password,mobileno) VALUES ('$username','$email','$password','$mobileno')";
         $run=mysqli_query($con,$query);

         //$sql="select username,password from login where username='$email' and password='$password'";
        //  $result=mysqli_query($con,$sql);
         if(($run)>0)
         {
            echo "SignUp SuccesFul";
         }
         else
         {
            echo "SignUp failed";
         }

      }
      ?>


<?php

// #create connection
//       $con =mysqli_connect('localhost','root','','tourism');



//       if(isset($_POST['sb']))
//       {
//          $username=$_POST['username'];
//          $email=$_POST['email'];
//          $password=$_POST['password'];
//          $mobileno=$_POST['mobile'];

//          $sql="select * from signup where email='$email'";
//          $run=mysqli_query($con,$sql);
//          $data=mysqli_fetch_array($run);
//          if(count($data)>0)
//          { 
//             echo "<script>alert('User already registered! Login please.'); </script>"; 
//             echo "<script>window.location.href = '../signup1.php';</script>"; } 
//             else{ $query="INSERT INTO signup(username,email,password,mobileno) VALUES ('$username','$email','$password','$mobileno')";
//     $run=mysqli_query($con,$query); if(($run)>0){ echo "SignUp SuccesFull"; }
//     else{ echo "SignUp failed"; 
//     } 
    
//     }
//      } 
   //  



