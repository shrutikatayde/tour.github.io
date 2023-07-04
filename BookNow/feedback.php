<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form Design</title>
    <link rel="stylesheet" type="text/css" href="feedback.css">
    <script src="https://kit.fontawesome.com/67c66657c7.js"></script>
</head>

<?php
  session_start();
  if(isset($_SESSION['email'])){
    echo "";
  }
  else{
    echo "<script>window.location.href='../popup.html'</script>";

  }
  ?>

<body>
    <div class="container">
        <form action="feedback.php" method="POST">
            <h1>Give your Feedback</h1>
            <div class="id">
                <input type="text" name="fullname" placeholder="Full name" required>
                <i class="far fa-user"></i>
            </div>
            <div class="id">
                <input type="email"  name="email"  placeholder="Email address" required>
                <i class="far fa-envelope"></i>

            </div>
            <textarea cols="15" rows="6" name="feedback"  placeholder="Email address" required>
          
            </textarea>
            <button type="submit" name="submit">Submit</button>

            
            <!-- Feedback form php -->
    <?php
    if(isset($_POST['submit']))
      { 
        $fullname=$_POST['fullname'];
        $email=$_POST['email'];
        $feedback=$_POST['feedback'];
      


        #create connection
        $con =mysqli_connect('localhost','root','','tourism');
       // $con =mysqli_connect('localhost','root','','tourism');


        $sql="INSERT INTO `feedbackf` (`fullname`, `email`, `feedback`) VALUES('$fullname', '$email', '$feedback')";
        $result=mysqli_query($con,$sql);
         
        if(($result)>0)
        {
            echo "THANK YOU! <br>Feedback Saved Succesfully";
        }
        else
        {
        echo "Wrong Information";
        }
    }

   
?>
        </form>
        
        </div>
        <div class="div"><a href="../homepage">Back to home</a></div>
        
  

    <br>
    
    

    



</body>

</html>