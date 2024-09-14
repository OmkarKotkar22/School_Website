<?php
$path = $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$file = basename($path);         // $file is set to "index.php"
$file = basename($path, ".php"); // $file is set to "index"
?>
<main class="main">
        <header class="header1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-12 mt-3 d-flex justify-content-center justify-content-md-center wow animate__animated animate__fadeIn">
                        <p style="color:#75002d;">Opening Time:(10:00AM - 05:00PM) </p>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12 mt-3 d-flex justify-content-center justify-content-md-center wow animate__animated animate__fadeIn">
                        <ul type="none" class="contact_icon">
                            <li class="d-inline " style="color:#75002d;"><i class="fa-solid fa-phone mr-2" ></i>+91 9746241368</li>
                            <li class="d-inline" style="color:#75002d;"><i class="fa-solid fa-envelope mr-2"></i>yfis@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-xl-4 d-none d-xl-block wow animate__animated animate__fadeIn">
                        <ul type="none" class="social_icon float-right">
                            <li style="color:#75002d;">
                                <i class="fa-brands fa-whatsapp"></i>
                                <i class="fa-brands fa-facebook"></i>
                                <i class="fa-brands fa-youtube"></i>
                                <i class="fa-brands fa-linkedin"></i>
                                <i class="fa-brands fa-instagram"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <header class="main_menu">
            <div class="container ">
                <div class="row wow animate__animated animate__zoomIn">
                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 w-50">
                        <a href="index.php"><img src="images/logo.png" alt="" ></a>
                    </div>
                    <div class="col-sm-6 col-md-8 col-lg-8 col-xl-9  w-50">
                        <nav class="navbar navbar-expand-xl navbar-light  mt-2 d-flex justify-content-end">
                            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                  
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ">
                                <li class="nav-item <?php if($file=='index'){ echo "active"; } ?>">
                                    <a class="nav-link" href="index.php">HOME</a>
                                </li>
                                <li class="nav-item dropdown <?php if($file=='about'){ echo "active"; } ?>">
                                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                        ABOUT
                                    </a>
                                    <div class="dropdown-menu bg-warning">
                                        <a class="dropdown-item <?php if($file=='about'){ echo "active"; } ?>" href="about.php">About Us</a>
                                        <a class="dropdown-item <?php if($file=='Health and Safety'){ echo "active"; } ?>" href="#Health_and_Safety">Health and Safety</a>
                                        <a class="dropdown-item <?php if($file=='Our Inspiration'){ echo "active"; } ?>" href="#Our_Inspiration">Our Inspiration</a>
                                        <a class="dropdown-item <?php if($file=='Facilities'){ echo "active"; } ?>" href="#Facilities">Facilities</a>
                                        <a class="dropdown-item <?php if($file=='Vision/Mission'){ echo "active"; } ?>" href="#Vision_Mission">Vision/Mission</a>
                                    </div>
                                </li>
                                <li class="nav-item <?php if($file=='admission'){ echo "active"; } ?>">
                                    <a class="nav-link" href="admission.php">ADMISSIONS</a>
                                </li>
                                <li class="nav-item <?php if($file=='gallery'){ echo "active"; } ?>">
                                    <a class="nav-link" href="gallery.php">GALLERY</a>
                                </li>
                                <li class="nav-item <?php if($file=='contact'){ echo "active"; } ?>">
                                    <a class="nav-link" href="contact.php">CONTACT</a>
                                </li>
                                <li class="nav-item dropdown <?php if($file=='parent_connect'){ echo "active"; } ?>">
                                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                        PARENT LOGIN
                                    </a>
                                    <div class="dropdown-menu bg-warning <?php if($file=='parent_connect'){ echo "active"; } ?>">
                                        <a class="dropdown-item <?php if($file=='parent_login'){ echo "active"; } ?>" href="parent_login.php">Parent Connect</a>
                                        <a class="dropdown-item <?php if($file=='fee_payment'){ echo "active"; } ?>" href="fee_payment.php">Fee Payment</a>
                                        <a class="dropdown-item <?php if($file=='parent_testimonial'){ echo "active"; } ?>" href="parent_testimonial.php">Parent Testimonial</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
              </div>
            </div>
          </header>

        <section class="section1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 p-0 ">
                        <div class="marquee1 ">
                            <marquee behavior="scroll" direction="left"><b class="wow animate__animated animate__zoomIn">***Admissions open for the session 2024-25***</marquee>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</main>