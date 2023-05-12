<?php  include 'includes/header.php' ?>


    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/13.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>CAREER</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">CAREER</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Inquary Form</h1>
          <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
        </div>
        <div class="modal-body">
            <div class="contact-form-area contact-page">
                <h4 class="mb-50">Send a message</h4>

                <form action="#" method="post">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="Your E-mail">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" placeholder="Your Subject">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea name="message" class="form-control" id="message" rows="5" placeholder="Your Message"></textarea>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn credit-btn mt-30" type="submit">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
       
      </div>
    </div>
  </div>







    <!-- ##### Contact Area Start ##### -->

    <br>
    <div class="col-lg-3 col-md-3 col-sm-12 align-self-center" style="padding-top:0px;padding-bottom:30px;"></div>
   <div class="row justify-content-center">
    <div class="col-lg-6 col-md-6 col-sm-12 align-self-center" style="padding-top:0px;padding-bottom:30px;">
        <!-- <div class="row" style="padding:25px;">
           <h2>We are a passionate, ambitious, and collaborative team.</h2>
           <strong>Bring your mastery and experience to a realestate business that values and celebrates its experts, and will provide you with the opportunity to take the next meaningful step in your career journey. </strong>
       </div>-->
        <div class="content-form-box register-box">

            <div class="login-header">
                <h4>Fill the following details </h4>
            </div>

            <form method="post" action="./career.aspx" id="frm_Career" enctype="multipart/form-data">
                <div class="aspNetHidden">
                    <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
                        value="/wEPDwULLTE0NzUyMTIwNDMPZBYCAgMPFgIeB2VuY3R5cGUFE211bHRpcGFydC9mb3JtLWRhdGFkZAYQbp2iC7ykAaqnU5GzjJ9hCjc2C5fMB2GQLPeB6rZB">
                </div>

                <div class="aspNetHidden">

                    <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="2415B15E">
                    <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION"
                        value="/wEdAAKCEXmsFDlJjK5FWBdxLTAs8ERAgafxnbhJp6jzPJVotN5HGRDU6TqkhKsd6/iAdD/EPKrOtDX3wvVCpx9Ug4wn">
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name" required="">
                </div>
                <div class="form-group">
                    <label>Mobile</label>
                    <input type="number" class="form-control" name="mobile" placeholder="Mobile Number" required="">
                </div>
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" class="form-control" name="email" placeholder="Email Address" required="">
                </div>
                <div class="form-group">
                    <label>Qualification</label>
                    <input type="text" class="form-control" name="qualification" placeholder="Education Qualification"
                        required="">
                </div>
                <div class="form-group">
                    <label>Last/Current Company</label>
                    <input type="text" class="form-control" name="last_current_company" placeholder="Company Name">
                </div>
                <div class="form-group">
                    <label>Designation</label>
                    <input type="text" class="form-control" name="designation" placeholder="Designation">
                </div>

                <div class="form-group">
                    <label>Experience (if any)</label>
                    <input type="text" class="form-control" name="experience" placeholder="in years">
                </div>

                <div class="form-group">
                    <!--<div class="input-group input-file" name="Upl_Resume">
                       <span class="input-group-btn">
                           <button class="btn btn-default btn-choose" type="button">Attach CV/Resume</button>
                       </span>
                       <input type="text" class="form-control" placeholder='Choose a file...' />
                       <span class="input-group-btn">
                           <button class="btn btn-warning btn-reset" type="button">Reset</button>
                       </span>
                   </div>-->
                    <label>Attach CV/Resume</label>


                    <input type="file" name="fuAttachment" id="fuAttachment" class="btn btn-block">

                </div>

                <div class="form-group">
                    <label>Message</label>
                    <!--<input type="text" class="form-control" name="message" placeholder="Message">-->
                    <textarea class="form-control" rows="5" id="comment" name="message"></textarea>
                </div>
                <div class="form-group">


                    <input type="submit" name="btn_Submit" value="Submit" id="btn_Submit"
                        class="btn btn-color btn-md btn-block">

                </div>

                <!--<div class="login-footer text-center">
                   <p>Already have an account?<a href="login.html"> Sign In</a></p>
               </div>-->
            </form>
        </div>
    </div>
   </div>

    <!-- Single Contact Area -->


    <!-- ##### Google Maps ##### -->

    <!-- ##### Contact Area End ##### -->

    <!-- ##### Newsletter Area Start ###### -->
    <section class="newsletter-area section-padding-100 bg-img jarallax"
        style="background-image: url(img/bg-img/6.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-lg-8">
                    <div class="nl-content text-center">
                        <h2>Subscribe to our newsletter</h2>
                        <form action="#" method="post">
                            <input type="email" name="nl-email" id="nlemail" placeholder="Your e-mail">
                            <button type="submit">Subscribe</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Newsletter Area End ###### -->
    <?php  include 'includes/footer.php' ?>

