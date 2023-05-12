<?php 
 
 include 'conn.php';
$catid = $_GET['catid'];
 $sql = "DELETE FROM category WHERE id = '{$catid}' ";
 
 if ($result = mysqli_query($conn,$sql) ) {
    echo "<script>alert('Your Record Hass Been Deleted')</script>";
    header("location:showCategory.php");
 }else{
    echo "<script>alert('Your Can Delete After Some Time')</script>";
 }

 

?>