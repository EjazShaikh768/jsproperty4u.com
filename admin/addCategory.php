
<?php  include 'header.php'; ?>


<div class="container-fluid">
    <div class="row justify-content-around">
       <div class="col-sm-12 col-md-8">
           <div class="row justify-content-center">
            <div class="col-sm-12 col-md-6 Signincard pt-5">
                <div class="row justify-content-around">
                <form action="categorysave.php" method="post">
                <div class="form-group">
                    <label for="username">Category Name </label>
                    <input type="text" class="form-control" name="category" >
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


  
