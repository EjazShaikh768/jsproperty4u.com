
<?php  include 'header.php'; ?>




<section>
<div class="container">
        <div class="row ">
           <div class="col-sm-12 ">
               <div class="row justify-content-center">
                <div class="row  text-center py-4">
                  <h2>  JS Property  <b> > </b> Services</h2>
                </div>
                <div class="col-sm-12">
                    <div class="row justify-content-between">
                        <div class="col-12 px-5 my-3 text-end">
                            <a href="serviceAdd.php"><i class="fa-solid fa-2x fa-plus"></i></a>
                        </div>
                     

                    <?php 
                      include 'conn.php';

                      $sql = "SELECT * FROM services";
                      $result = mysqli_query($conn,$sql) or die("Query Failed");
                      if(mysqli_num_rows($result) > 0){
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>

    <br>
    <div class="col-sm-12  p-5 text-center mt-4 serviceCard " style="box-shadow: 2px 2px 2px 2px #dda5a5;">
        <div class="row">
          <div class="col-sm-12 col-md-4">
          <img src="upload/<?php echo $row['image']; ?>" alt="" class="img-fluid"    srcset="" width="100%" >
          </div>
          <div class="col-sm-12 col-md-8 " id="justify">
                 <div class="row">
                      <div class="col-9 text-start" style="">
                          <h3><?php echo $row['title']; ?></h3>
                          <h4 class="text-muted"><?php echo $row['category']; ?></h4>
                      </div>
                      <div class="col-3"> 
                        <a href="serviceEdit.php?srvcid=<?php echo $row['id']; ?>" class=""><i class="fa-solid fa-2x px-4 fa-edit"></i></a>
                        <a href="serviceDelete.php?srvcid=<?php echo $row['id']; ?>" class=""><i class="fa-solid fa-2x px-4 fa-trash"></i></a>
                    </div>
                 </div>
                 <div class="col-12 " style="text-align: justify;text-justify: inter-word;line-height:1.7;font: size 1.2em;">
                 <p><?php

                $description =  explode('.',$row['description']); 
                    foreach ($description as $value) {
                     echo $value;
                     echo "<br class='mt-2'  />";
                    }
                 ?></p>
                 </div>
          </div>
        </div>
    </div>


                            <?php
                        }
                      }else{
                        echo "<h2><script>alert('No Record Availabe')</script> </h2>";
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