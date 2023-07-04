<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Search Bar</title>
</head>

<style>

   body{
    
    background:whitesmoke;
   }

</style>

<?php
  session_start();
  if(isset($_SESSION['email'])){
    echo "";
  }
  else{
    echo "<script>window.location.href='popup.html'</script>";

  }
?>

<body >

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header" >
                        <h4>Write The Place Type Or Tourism Place In Search Bar To Fetch The Data</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" class="form-control" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit"  class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12" >
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    
                                    <th>PLACE TYPE</th>
                                    <th>TOURISM PLACE</th>
                                    <th>LOCATION</th>
                                    <th>DESCRIPTION</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php 
                                #To create a connection
                                   // $con = mysqli_connect("localhost","root","","tourism");
                                    $con =mysqli_connect('localhost','root','','tourism');

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM users WHERE CONCAT(placetype,tourismplace,location,description) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);


                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['placetype']; ?></td> 
                                                    <td><?= $items['tourismplace']; ?></td>
                                                    <td><?= $items['location']; ?></td>
                                                    <td><?= $items['description']; ?></td>
                                                    <!-- <td><?= $items['description']; ?></td> -->
                                                </tr>
                                                <?php
                                                #end of php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="5">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br> <br>

    <a href="./homepage/index.html" style=" padding-left: 300px; text-align:bottom" >Back to home</a>
    <br><br>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>