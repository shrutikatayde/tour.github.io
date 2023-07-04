<?php
    if(isset($_POST['submit']))
    {
      $name=$_POST['fullname'];
      $email=$_POST['email'];
      $pass=$_POST['password'];
      $phone=$_POST['phoneNumber'];
      $gender=$_POST['gender'];
      $address=$_POST['address'];
      $fmember=$_POST['member'];
      $fname=$_POST['fname'];
      $resource=$_POST['travel'];
      $date=$_POST['date'];
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
     $sql="INSERT INTO `travelregister` (`fullname`, `email`, `password`, `mobileno`, `gender`, `address`, `member`, `name` ,`resource`,`date`) VALUES ('$name', '$email', '$pass', '$phone', '$gender', '$address','$fmember', '$fname' ,'$resource','$date')";
     $result=mysqli_query($conn,$sql);
    }

    if($result){
        echo 'submitted successfully';
    }
    else{
        echo 'not submitted';}



?>