
<?php  include 'header.php'; ?>


<div class="container-fluid">
    <div class="row justify-content-around">
       <div class="col-sm-12 col-md-8">
           <div class="row justify-content-center">
            <div class="col-sm-12 col-md-6 Signincard pt-5">
                <div class="row justify-content-around">

                <?php 
                      include 'conn.php';
                      $srvcid = $_GET['srvcid'];
                      $sql = "SELECT * FROM services WHERE id = '{$srvcid}'";
                      $result = mysqli_query($conn,$sql) or die("Query Failed");
                      if(mysqli_num_rows($result) > 0){
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>

                   <form action="ServiceEditSave.php" method="post" enctype="multipart/form-data">
                     <fieldset>
                        <legend>Services Add</legend>
                        <select name="categoryname" id="" class="form-control" required>
                    <option value="">Choose Category</option>
                            <?php 
                        include 'conn.php';
                        $sql0 = "SELECT * FROM category";
                        $result0 = mysqli_Query($conn,$sql0) or die("query failed");
                        if(mysqli_num_rows($result0) > 0){
                            while($row0 = mysqli_fetch_assoc($result0)){
                                ?>
                            <option value="<?php echo $row0["categoryname"] ?>"><?php echo $row0["categoryname"] ?></option>
                                <?php
                            }
                        }
                            ?>
                </select>
                
                <div class="form-group">
                    <label for="fileToUpload">Image </label>
                    <img src="upload/<?php echo $row['image']; ?>" class="img-fluid my-2"  alt=""  srcset="">
                    <input type="file" class="form-control" name="fileToUpload" value="upload/<?php echo $row['image']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="title">Title </label>
                    <input type="text" class="form-control" name="title" value="<?php echo $row['title'] ?>" required>
                    <input type="hidden" class="form-control" name="catid" value="<?php echo $row['id'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="description">Description </label>
                    <textarea name="description" id="" class="form-control"  rows="5"> 
                    <?php echo $row['description'] ?>
                    </textarea>
                </div>
                <div class="form-group text-center py-4">
                    <button class="btn px-5" name="submit">Update  Service</button>
                </div>
                     </fieldset>
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
