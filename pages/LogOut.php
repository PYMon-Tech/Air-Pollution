<?php 
session_start();
session_destroy();

echo "<script>window.alert('Logout Successful')</script>";
echo "<script>window.location='HomePage.php'</script>";
?>