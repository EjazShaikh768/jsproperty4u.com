
<?php  include 'header.php'; ?>




<section>
<div class="container">
        <div class="row justify-content-around">
           <div class="col-sm-12 ">
               <div class="row justify-content-center">
                <div class="row text-center py-4">
                  <h2>  JS Property  <b> > </b> Gallery</h2>
                </div>
                <div class="col-sm-12 col-md-11 text-center">
                    <div class="row">
                        <div class="col-12 my-3 text-end">
                            <a href="addimages.php"><i class="fa-solid fa-2x fa-plus"></i></a>
                        </div>
                      <table class="table table-hover">
                      <thead class="bg-dark text-light">
                        <tr >
                        <th scope="col">Sr.No</th>
                        <th scope="col">Category</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php 
                      include 'conn.php';

                      $sql = "SELECT * FROM gallery";
                      $result = mysqli_query($conn,$sql) or die("Query Failed");
                      if(mysqli_num_rows($result) > 0){
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
  <tr>
                        <th scope="row"><?php echo $row['id']; ?></th>
                        <td><?php echo $row['category']; ?></td>
                        <td><img src="upload/<?php echo $row['image']; ?>" alt="" class="img-fluid"    srcset="" ></td>
                        <td>
                             <a href="galleryDelete.php?imgid=<?php echo $row['id']; ?>"><i class="fa-solid fa-2x px-4 fa-trash"></i></a>
                       </td>
                        </tr>
                            <?php
                        }
                      }

                     ?>
                      
                    </tbody> 
                    </table>
                    </div>
                </div>
               </div>
           </div>
           <div class="col-sm-12">
            <?php include 'sidebaar.php'; ?>
           </div>
        </div>
    </div>
</section>





<?php  include 'footer.php'; ?>