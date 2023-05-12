
<?php  include 'header.php'; ?>


<div class="container-fluid">
    <div class="row justify-content-around">
       <div class="col-sm-12 col-md-8">
           <div class="row justify-content-center">
            <div class="col-sm-12 col-md-6 Signincard pt-5">
                <div class="row justify-content-around">

                <?php 
                      include 'conn.php';
                      $CATID = $_GET['catid'];
                      $sql = "SELECT * FROM category WHERE id = '{$CATID}' ";
                      $result = mysqli_query($conn,$sql) or die("Query Failed");
                      if(mysqli_num_rows($result) > 0){
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                <form action="editCategorySave.php" method="post">
                <div class="form-group">
                    <label for="username">Category Name </label>
                    <input type="text" class="form-control" name="category" value="<?php echo $row['categoryname']; ?>" >
                    <input type="hidden" class="form-control" name="catid" value="<?php echo $row['id']; ?>" >
                </div>
                <div class="form-group text-center py-4">
                    <button class="btn px-5" name="CATEGORYuPDATE">ADD Category</button>
                </div>
            </form>
            <?php } } ?>
                </div>
            </div>
           </div>
       </div>
       <div class="col-sm-12 ">
        <?php include 'sidebaar.php'; ?>
       </div>
    </div>
</div>

<?php  include 'footer.php'; ?>


  
