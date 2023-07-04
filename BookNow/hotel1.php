<?php
    if(isset($_POST['submit']))
    {
      $name=$_POST['fullname'];
      $email=$_POST['email'];
      $pass=$_POST['password'];
      $phone=$_POST['phoneNumber'];
      $gender=$_POST['gender'];
      $address=$_POST['address'];
      $hotelb=$_POST['hotelb'];
      $room=$_POST['room_book_number'];
      $seat=$_POST['seat_book_number'];
      $adate=$_POST['a_date'];
      $ddate=$_POST['d_date'];
    }
      

    
    $servername='localhost';
    $username='root';
    $password='';
    $database='tourism';


    
    $conn =mysqli_connect('localhost','root','','tourism');
   // $conn=mysqli_connect($servername,$username,$password,$database);

    if(!$conn){
        die ("sorry" . mysqli_connect_error());
    }
    else{
     $sql="INSERT INTO `hotel_registration_info` (`Full_Name`, `Email_id`, `Password`, `Phone_Number`, `Gender`, `Address`, `hotelb`, `Rooms`, `Seats`, `A_Date`, `D_Date`) VALUES ('$name', '$email', '$pass', '$phone', '$gender', '$address', '$hotelb', '$room', '$seat', '$adate', '$ddate')";
     $result=mysqli_query($conn,$sql);
    }

    if($result){
        echo 'submitted successfully';
    }
    else{
        echo 'not submitted';}
?>


