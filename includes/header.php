<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- Title -->
    <title> JS Propertys</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/logo1.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

    <style>
      /* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 15px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
    z-index: 2147483647;
  bottom: 23px;
  right: 28px;
  /* width: 280px; */
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  /* margin: 5px 0 22px 0; */
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  /* padding: 16px 20px; */
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
    </style>
</head>

<body>
    <!-- Preloader -->
    <!-- <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> -->

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 d-flex justify-content-between">
                        <!-- Logo Area -->
                        <div class="logo">
                            <a href="index.php"><img src="img/bg-img/logo1.jpeg" alt=""  width="200" height="90"></a>
                        </div>

                        <!-- Top Contact Info -->
                        <div class="top-contact-info d-flex align-items-center">
                            <!--<a href="#" data-toggle="tooltip" data-placement="bottom" title="25 th Street Avenue, Los Angeles, CA"><img src="img/core-img/placeholder.png" alt="" class="img-fluid"> <span>   Balewadi Road 3rd Floor golden empire building,
                                above LG Showroom, Pune, Maharashtra 411025
                                     </span></a>-->
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="info@jspropertiesrealtors.com"><img src="img/core-img/message.png" alt="" class="img-fluid"> <span>jsproperties21@gmail.com</span></a>
                                 
 <ul class="d-flex">
    <li><a href="https://www.linkedin.com/"> <i class="fa-brands fa-2x fa-linkedin-in"></i></a></li>
    <li><a href="https://www.facebook.com/"><i class=" fa-brands fa-2x fa-facebook-f"></i></a></li>
    <li><a href="https://twitter.com/"><i class="fa-brands fa-2x fa-twitter"></i></a></li>
    <li><a href="https://plus.google.com/"><i class=" fa-brands fa-2x fa-google-plus-g"></i></a></li>
 </ul>   
</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="credit-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="creditNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="./index.php">HOME</a></li>
                                    <li><a href="./about.php">ABOUT US</a></li>
                                    <li><a href="#">PROPERTIES</a>
                                        <div class="row justify-content-center megamenu">
                                            <ul class="./single-mega cn col-4">
                                                <li><a href="./rohan-viti.php">Rohan viti</a></li>
                                                <li><a href="./rohan-nidita.php">Rohan nidita</a></li>
                                                <li><a href="./kohinoor-new-wakad.php"> Kohinoor New Wakad</a></li>
                                                <li><a href="./mahindra-happinest.php">Mahindra happinest</a></li>
                                                <li><a href="./city1.php">City 1</a></li>
                                                <li><a href="./godrej.php">Godrej</a></li>
                                                <li><a href="./shapoorji-hinjewadi.php">Shapoorji hinjewadi</a></li>
                                            </ul>
                                            <ul class="./single-mega cn col-4">
                                                <li><a href="./lodha-hinjewadi.php">Lodha hinjewadi</a></li>
                                                <li><a href="./kasturi-hinjewadi.php">Kasturi hinjewadi</a></li>
                                                <li><a href="./pride-purple-hinjewadi.php">Pride purple hinjewadi</a></li>
                                                <li><a href="./legecy-kairos-rahatani.php">Legecy kairos rahatani</a></li>
                                                <li><a href="./ksisalapunavale.php">Ksisala punavale</a></li>
                                                <li><a href="./itrend-home-mahalunge.php">Itrend Home mahalunge</a></li>
                                            </ul>
                                            <ul class="single-mega cn col-4">
                                                <li><a href="">Amenities</a></li>
                                                <li><a href="">Park titan</a></li>
                                                <li><a href="">WestView Digital </a></li>
                                                <li><a href="">Aarezo</a></li>
                                            </ul>
                                        </div>
                                    </li>






                                    <li><a href="./career.php">CAREER</a>
                                       
                                    </li>
                                    
                                   
                                    
                                    <li><a href="./nriservices.php">NRI SERVICES</a></li>
                                    <li><a href="./gallery.php">GALLERY</a></li>
                        
                                    <li><a href="./contact.php">CONTACT</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Contact -->
                        <div class="contact ">
                            <a href="tel:+919764235784"><img src="img/core-img/call2.png" alt="" class="img-fluid"> +91 9764235784 </a>
                    
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

<section>
    <!-- Button trigger modal -->

<section>

    <button class="open-button" onclick="openForm()">INQUERY</button>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4">
                
                <div class="form-popup" id="myForm">
                    <form action="/action_page.php" class="form-container">
                    <center>   <h1>Inquary</h1></center>
                  
                      <label for="email"><b>Full Name</b></label>
                      <input type="text" placeholder="Enter Full Name" name="email" required>

                      <label for="email"><b>Email</b></label>
                      <input type="text" placeholder="Enter Email" name="email" required>
                  
                      <label for="psw"><b>Number</b></label>
                      <input type="password" placeholder="Enter Number" name="psw" required>
                  
                     <div class="d-flex mb-5 mt-3">
                        <button type="submit" class="btn">SUBMIT</button>
                        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                     </div>
                    </form>
                  </div>
            </div>
        </div>
    </div>
</section>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
<section>
    <div class="px-3 py-2" id="icons" >
        <a href="tel:+919764235784" style="font-size: 1.7em;"><i class="fa-solid  fa-phone"></i></a><br>
    </div>
    <div class="px-3 py-2" id="icons1" >
        <a href="https://wa.me/+919764235784" target="_blank"><img src="img/imgs/whatsapp.png" alt="" width="130px"></a> 
    </div>
</section>