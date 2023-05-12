<?php

if (isset($_FILES['fileToUpload'])) {
    $errors = array();

    $file_name = $_FILES['fileToUpload']['name'];
    $file_size = $_FILES['fileToUpload']['size'];
    $file_tmp = $_FILES['fileToUpload']['tmp_name'];
    $file_type = $_FILES['fileToUpload']['type'];
    $file_ext = (explode('.', $file_name));



    $new_name = time()."_".basename($file_name);
    $target = "upload/".$new_name;

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, $target);
    }else{
        print_r($errors);
        die();
    }
}




include 'conn.php';
$category = mysqli_real_escape_string($conn,$_POST['categoryname']); 


$sql = "INSERT INTO gallery (category,image)VALUES('{$category}','{$new_name}')";

if($result = mysqli_query($conn,$sql)){
    echo "<script>alert('Your Category Added Now'); </script>";
    header("location:gallery.php");
}else{
    echo "<script>alert('Please Wait & Try After Some Time'); </script>";
    
}

?>