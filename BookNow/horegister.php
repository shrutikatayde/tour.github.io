

<?php


$host="localhost";
$dbfullname="root";
$dbPassword="";
$dbname="tourism";

#create connection
$con =mysqli_connect('sql110.epizy.com','epiz_33471398','K9Z48T6hWvn8X','epiz_33471398_tourism');
      //$con =mysqli_connect('localhost','root','','tourism');



      if(isset($_POST['submit']))
      {

        #get data through 'POST' method
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];
$phoneNumber = $_POST['phoneNumber'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$rbn = $_POST['rbn'];
$sbn = $_POST['sbn'];
#$a_date = $_POST['a_date'];
#$d_date = $_POST['d_date'];

        
         $query="INSERT INTO hotelregister(fullname,email,password,phoneNumber,gender,address,rbn,sbn) VALUES ('fullname','$email','$password','phoneNumber','gender','address','rbn','sbn')";
         $run=mysqli_query($con,$query);

      }



      if($conn->connect_error())
  {
    die('Could not connect to that database.');
  }
  else{
    #SELECT email From hotelregister
    
    $SELECT = "SELECT * From hotelregister Where email = ? Limit 1";
   $INSERT = "INSERT Into hotelregister (fullname, email, password, phoneNumber, gender, address,rbn,sbn)
              values(?,?,?,?,?,?,?,?)";

    // Prepare statement
    $stmt = $conn->prepare($SELECT);
    $stmt-> bind_param("s",$email);
    $stmt-> execute();
    $stmt-> bind_result($resultemail);
    $stmt-> store_result();
    $stmt->fetch();
    $rnum = $stmt->num_rows;
    
    #check condition for insert queries
    if($rnum==0)
    {
        $stmt->close();

        $stmt=$conn->prepare($INSERT);
        $stmt->bind_param("sssissiicc",$fullname,$email,$password,$phoneNumber,$gender,$address,$rbn,$sbn);
        if($stmt->execute()) {
        echo "New record inserted succesfully";
    }
    else{
         echo $stmt->error;
    }
  }
    else{
           echo "Someone already register using this email";
    }

    $stmt->close();
    $stmt->close();

  }



     

      ?>
