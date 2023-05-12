<?php 

include 'conn.php';
$catid = $_POST['catid'];
$category = mysqli_real_escape_string($conn,$_POST['category']); 


$sql = "UPDATE `category` SET `categoryname`='{$category}' WHERE id = '{$catid}' ";

if($result = mysqli_query($conn,$sql)){
    echo "<script>alert('Your Category Added Now'); </script>";
    header("location:showCategory.php");
}else{
    echo "<script>alert('Please Wait & Try After Some Time'); </script>";
    
}
?>