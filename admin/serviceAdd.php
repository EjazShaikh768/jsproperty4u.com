
<?php  include 'header.php'; ?>


<div class="container-fluid">
    <div class="row justify-content-around">
       <div class="col-sm-12 col-md-8">
           <div class="row justify-content-center">
            <div class="col-sm-12 col-md-6 Signincard pt-5">
                <div class="row justify-content-around">
                   <form action="ServicesSave.php" method="post" enctype="multipart/form-data">
                     <fieldset>
                        <legend>Services Add</legend>
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
                    <label for="fileToUpload">Image </label>
                    <input type="file" class="form-control" name="fileToUpload" required>
                </div>
                <div class="form-group">
                    <label for="title">Title </label>
                    <input type="text" class="form-control" name="title" required>
                </div>
                <div class="form-group">
                    <label for="description">Description </label>
                    <textarea name="description" id="" class="form-control"  rows="5"></textarea>
                </div>
                <div class="form-group text-center py-4">
                    <button class="btn px-5" name="submit">ADD Category</button>
                </div>
                     </fieldset>
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


  
