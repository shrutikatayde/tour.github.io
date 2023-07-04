<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOK NOW</title>
    <link rel="stylesheet" href="hot1.css">
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
        <h1 class="form-title" style="color:crimson;">Hotel Booking Form</h1>
        <hr> <br>
        <h2 style="color: black;"> User Information</h2>
        <form action="/tours/BookNow/hotel1.php" method="post">
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
                    <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Enter Phone Number">

                </div>
            </div>

            <div class="gender-details-box">
                <span class="gender-title">Gender</span>
                <div class="gender-category">
                    <input type="radio" name="gender" id="male" value="m">
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

            <h2 style="color: black;">Booking Information</h2> <br>



            <p><label for="hotelb" style="color:white;">Select a Hotel :</label> </p>
            <select name="hotelb" id="hotelb">
                <optgroup label="Amravati">
                    <option value="Select a Hotel :">Select a Hotel :</option>
                    <option value="Grace Inn">Grace Inn</option>
                    <option value="Vandu International">Vandu International</option>
                    <option value="Hotel Girnar">Hotel Girnar</option>
                    <option value="Hotel R K Emperial">Hotel R K Emperial</option>
                </optgroup>
                <optgroup label="Mumbai">
                    <option value="Select a Hotel :">Select a Hotel :</option>
                    <option value="Krishana Palace Hotel">Krishana Palace Hotel</option>
                    <option value="Empire Royale Hotel">Empire Royale Hotel</option>
                    <option value="The Taj Mahal Palace">The Taj Mahal Palace</option>
                    <option value="Lemon Tree Hotel">Lemon Tree Hotel</option>
                </optgroup>
                <optgroup label="PUNE">
                    <option value="The Orchid Hotel">The Orchid Hotel</option>
                    <option value="FabHotel Rajvada">FabHotel Rajvada</option>
                    <option value="Rose Lodge">Rose Lodge</option>
                    <option value="OAK Hotel">OAK Hotel</option>
                </optgroup>
                <optgroup label="Nagpur">
                    <option value="Hotel Woodlands">Hotel Woodlands</option>
                    <option value="Radison Blu Hotel">Radison Blu Hotel</option>
                    <option value="Hotel Nagpur Ashok">Hotel Nagpur Ashok</option>
                    <option value="AudiRoyal Palms Luxury Appartment">AudiRoyal Palms Luxury Appartment</option>
                </optgroup>
                <optgroup label="Nashik">
                    <option value="Hotel Avanti">Hotel Avanti</option>
                    <option value="Happy Times">Happy Times</option>
                    <option value="Adiem Homestay">Adiem Homestay</option>
                    <option value="Treebo Trip Hotel">Treebo Trip Hotel</option>
                </optgroup>
                <optgroup label="Aurangabad">
                    <option value="Ginger Hotel">Ginger Hotel</option>
                    <option value="J P International">J P International</option>
                    <option value="Enrise Sayaji Hotel">Enrise Sayaji Hotel</option>
                    <option value="Sundar Lodge">Sundar Lodge</option>
                </optgroup>

            </select>



            <p>
                Room Book No. : * <input type="number" name="room_book_number" id="room_book_number" placeholder="1"
                    required>
            </p>


            <p>
                Seat Book No. : * <input type="number" name="seat_book_number" id="seat_book_number" placeholder="1"
                    required>
            </p>
            <p>
                Arriving Date : * <input type="date" name="a_date" id="date" required>
            </p>
            <p>
                Departure Date : * <input type="date" name="d_date" id="date" required>
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