<?php
session_start();
if(isset($_SESSION['email'])){
    session_destroy();
    echo "<script>window.location.href='signup1.php'</script>";
}
else{
    echo "<script>window.location.href='signup1.php'</script>";
}
?>