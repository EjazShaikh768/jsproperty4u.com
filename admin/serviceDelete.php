<?php 
 
 include 'conn.php';
$srvcid = $_GET['srvcid'];
 $sql = "DELETE FROM services WHERE id = '{$srvcid}' ";
 
 if ($result = mysqli_query($conn,$sql) ) {
    echo "<script>alert('Your Record Hass Been Deleted')</script>";
    header("location:services.php");
 }else{
    echo "<script>alert('Your Can Delete After Some Time')</script>";
 }

 

?>