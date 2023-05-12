<?php 
 
 include 'conn.php';
$imgid = $_GET['imgid'];
 $sql = "DELETE FROM gallery WHERE id = '{$imgid}' ";
 
 if ($result = mysqli_query($conn,$sql) ) {
    echo "<script>alert('Your Record Hass Been Deleted')</script>";
    header("location:gallery.php");
 }else{
    echo "<script>alert('Your Can Delete After Some Time')</script>";
 }

 

?>