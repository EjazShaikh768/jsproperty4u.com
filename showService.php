<?php  include 'includes/header.php' ?>

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax"
        style="background-image: url(img/bg-img/41-Cosmo-Final.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                <?php 
                      include 'admin/conn.php';
                       $ServID = $_GET["srvcid"];
                      $sql = "SELECT * FROM services WHERE id = '{$ServID}'";
                      $result = mysqli_query($conn,$sql) or die("Query Failed");
                      if(mysqli_num_rows($result) > 0){
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                    <div class="breadcrumb-content">
                        <h2><?php echo $row['title']; ?></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">OUR SERVICES</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $row['title']; ?></li>
                            </ol>
                        </nav>
                    </div>
                    
                <?php } } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->


<section>
    <div class="container">
    <?php 
                       $ServID1 = $_GET["srvcid"];
                      $sql1 = "SELECT * FROM services WHERE id = '{$ServID1}'";
                      $result1 = mysqli_query($conn,$sql1) or die("Query Failed");
                      if(mysqli_num_rows($result1) > 0){
                        while ($row1 = mysqli_fetch_assoc($result1)) {
                            ?>
        <div class="row justify-content-center my-5">
            <div class="col-sm-12 col-md-8 text-center">
            <img src="admin/upload/<?php echo $row1['image']; ?>" alt="" class="img-fluid" style="box-shadow:4px 4px 2px 2px #ddd">
            </div>
            <div class="col-sm-12 mt-4">
                <h3 style="text-transform:uppercase;"><?php echo $row1['title']; ?></h3>
                <h4 class="text-muted"><?php echo $row1['category']; ?></h4>
                <p><?php echo $row1['description']; ?></p>
            </div>
        </div>
                <?php } } ?>

    </div>
</section>

<?php  include 'includes/footer.php' ?>