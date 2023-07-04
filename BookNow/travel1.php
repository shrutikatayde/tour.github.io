<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOK NOW</title>
    <link rel="stylesheet" href="travel.css">
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
        <h1 class="form-title">
            <marquee scrollamount="20">Travel Booking Form </marquee>
        </h1>
        <hr> <br>
        <h2> User Information</h2>
        <form action="travel.php" method="POST">
            <div class="main-user-info">
                <div class="user-input-box">
                    <label for="fullname">Full Name : </label>
                    <input type="text" id="fullname" name="fullname" placeholder="Enter Full Name">
                </div>

                <div class="user-input-box">
                    <label for="email">Email id: </label>
                    <input type="text" id="email" name="email" placeholder="Enter Email">
                </div>

                <div class="user-input-box">
                    <label for="password">Password : </label>
                    <input type="text" id="password" name="password" placeholder="Enter Password">
                </div>

                <div class="user-input-box">
                    <label for="phoneNumber">Phone Number : </label>
                    <input type="text" id="phoneNumber" name="phoneNumber" placeholder="Enter Phone Number">
                </div>
            </div>

            <div class="gender-details-box">
                <span class="gender-title">Gender</span>
                <div class="gender-category">
                    <input type="radio" name="gender" id="male" value="m>
                    <label for="male">Male</label>

                    <input type="radio" name="gender" id="female" value="f">
                    <label for="male">Female</label>

                    <input type="radio" name="gender" id="other" value="o">
                    <label for="male">Other</label>

                </div>
            </div>




            <p>
                Address :
                <textarea name="address" id="address" placeholder="Enter Your Address" cols="100" rows="5"> </textarea>
            </p>


            <hr> <br>

            <h2>Booking Information</h2> <br>

            <p>
                <label for="fmember">Number Of Member : * </label>
                 <input type="number" name="member" id="member" placeholder="Enter Member Number"
                    required>
            </p>

            <p>
                <label for="fname">Enter Their Name : </label>
                <textarea name="fname" id="name" placeholder="Enter Member Name" cols="100" rows="5"> </textarea>
            </p>


            <p><label class="tv" for="travel">Choose a Travelling Resource:</label> </p>

            <select name="travel" id="travel">
                <option value="select">Select-Option</option>
                <option value="bus">Bus</option>
                <option value="train">Train</option>
                <option value="aeroplane">Aeroplane</option>
                <option value="audi">Car</option>
            </select>

            <p>
                Date : * <input type="date" name="date" id="date" required>
            </p>

            
            <div class="form-submit-btn">
                <input type="submit" value="SUBMIT" name="submit">
            </div>
            <br>
            <a href="../homepage/index.html">Back to home</a>
        </form>

    </div>

   
    
</body>

</html>