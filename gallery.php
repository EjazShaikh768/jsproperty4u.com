<?php include 'includes/header.php'; ?>

<?php 


$db_server = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "js_property";


$conn = mysqli_connect($db_server,$db_username,$db_password,$db_name);

if(!$conn){
    die("Could Not Connect My Sql Server".mysqli_connect_error());
}

?>


<section>
    <div class="container">
        <div class="row justify-content-between" id="gallery">
        <?php 
                      $sql = "SELECT * FROM gallery";
                      $result = mysqli_query($conn,$sql) or die("Query Failed");
                      if(mysqli_num_rows($result) > 0){
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
            <div class="col-sm-12 col-md-3 col-lg-3 ">
                    
                     <img src="admin/upload/<?php echo $row['image'] ?>" class="img-fluid" alt="" >

            </div>
                    <?php } } ?>
        </div>
    </div>
</section>


<?php include 'includes/footer.php'; ?>
