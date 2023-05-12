<?php 

include 'conn.php';
$category = mysqli_real_escape_string($conn,$_POST['category']); 


$sql = "INSERT INTO category (categoryname)VALUES('{$category}')";

if($result = mysqli_query($conn,$sql)){
    echo "<script>alert('Your Category Added Now'); </script>";
    header("location:showCategory.php");
}else{
    echo "<script>alert('Please Wait & Try After Some Time'); </script>";
    
}
?>