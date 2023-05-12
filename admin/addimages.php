
<?php  include 'header.php'; ?>


<div class="container-fluid">
    <div class="row justify-content-around">
       <div class="col-sm-12 col-md-8">
           <div class="row justify-content-center">
            <div class="col-sm-12 col-md-6 Signincard pt-5">
                <div class="row justify-content-around">
                <form action="gallerySave.php" method="post" enctype="multipart/form-data">
                <select name="categoryname" id="" class="form-control" required>
                    <option value="">Choose Category</option>
                            <?php 
                        include 'conn.php';
                        $sql = "SELECT * FROM category";
                        $result = mysqli_Query($conn,$sql) or die("query failed");
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                ?>
                            <option value="<?php echo $row["categoryname"] ?>"><?php echo $row["categoryname"] ?></option>
                                <?php
                            }
                        }
                            ?>
                </select>
                <div class="form-group">
                    <label for="username">Image </label>
                    <input type="file" class="form-control" name="fileToUpload" required>
                </div>
                <div class="form-group text-center py-4">
                    <button class="btn px-5" name="submit">ADD Category</button>
                </div>
            </form>
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


  
