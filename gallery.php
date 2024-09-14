<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youth Foundation</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="gallery.css">
    <script src="https://kit.fontawesome.com/927ba21532.js" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap-4.6.2-dist/css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap-4.6.2-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap-4.6.2-dist/css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap-4.6.2-dist/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap-4.6.2-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap-4.6.2-dist/css/bootstrap.min.css">
    <!-- Online CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- Javascript -->
    <script type="text/javascript" src="../assets/bootstrap-4.6.2-dist/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="../assets/bootstrap-4.6.2-dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../assets/bootstrap-4.6.2-dist/js/bootstrap.js"></script>
    <script type="text/javascript" src="../assets/bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>
    <!-- Online JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

    <!-- wowjs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

    <!-- animation -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
</head>
<body>
    <main class="main">
    <?php
    include("nav.php");
    ?>
        <!-- <header class="header1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-12 mt-3 d-flex justify-content-center justify-content-md-center wow animate__animated animate__fadeInLeft">
                        <p style="color:#75002d;">Opening Time:(10:00AM - 05:00PM) </p>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12 mt-3 d-flex justify-content-center justify-content-md-center wow animate__animated animate__fadeInDown">
                        <ul type="none" class="contact_icon">
                            <li class="d-inline" style="color:#75002d;"><i class="fa-solid fa-phone"></i>+91 9746241368</li>
                            <li class="d-inline" style="color:#75002d;"><i class="fa-solid fa-envelope ml-4"></i>yfis@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-xl-4 d-none d-xl-block wow animate__animated animate__fadeInRight">
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
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">HOME</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                        ABOUT
                                    </a>
                                    <div class="dropdown-menu bg-warning">
                                        <a class="dropdown-item" href="about.php">About Us</a>
                                        <a class="dropdown-item" href="#">Health and Safety</a>
                                        <a class="dropdown-item" href="#">Our_Inspiration</a>
                                        <a class="dropdown-item" href="#">Facilities</a>
                                        <a class="dropdown-item" href="#">Vision/Mission</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="admission.php">ADMISSIONS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="gallery.php">GALLERY</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">CONTACT</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                        PARENT CONNECT
                                    </a>
                                    <div class="dropdown-menu bg-warning">
                                        <a class="dropdown-item" href="parent_login.php">Parent Login</a>
                                        <a class="dropdown-item" href="fee_payment.php">Fee Payment</a>
                                        <a class="dropdown-item" href="parent_testimonial.php">Parent Testimonial</a>
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
                    <div class="col-12 p-0 wow animate__animated animate__zoomIn">
                        <div class="marquee1">
                            <marquee behavior="scroll" direction="left"><b>***Admissions open for the session 2024-25***</marquee>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <section class="section2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-xl-6 gallery ">
                        <h1 class="wow animate__animated animate__fadeInLeft" style="color:#75002d;">SOME MOMENTS</h1>
                        <P class="wow animate__animated animate__fadeInLeft" style="color:#75002d;">A room, series of rooms, or building devoted to the exhibition and often the sale of works of art. stunning, glorious, incredible, touching, majestic, awe-inspiring, inspirational, heart-warming, graceful, delicate, beautiful, gorgeous.</P>
                    </div>

                    <div class="col-lg-12 col-xl-6 float-left ">
                        <div class="col-6 float-left p-0" style="border: 2px groove #75002d inset;">
                            <img src="https://www.stmarysudupi.org/assets/images/news/181.jpg" alt="" class="w-100 h-100 p-0 float-left d-inline wow animate__animated animate__fadeInRight" >
                        </div>  
                        <div class="col-6 float-left p-0" style="border: 2px groove #75002d inset;">
                            <img src="https://dis.ac.in/assets/images/gallery/Hula-Hoop-Activity-23.jpg" alt="" class="w-100 h-100 p-0 float-left d-inline wow animate__animated animate__fadeInRight" >
                        </div>  
                        <div class="col-6 float-left p-0" style="border: 2px groove #75002d inset;">
                            <img src="https://dis.ac.in/assets/images/gallery/Mother's-Day-Special-23.jpg" alt="" class="w-100 h-100 p-0 float-left d-inline wow animate__animated animate__fadeInRight" >
                        </div>  
                        <div class="col-6 float-left p-0" style="border: 2px groove #75002d inset;">
                            <img src="https://dis.ac.in/assets/images/gallery/farewall24-1.jpg" alt="" class="w-100 h-100 p-0 float-left d-inline wow animate__animated animate__fadeInRight" >
                        </div>  
                    </div>

                    <div class="col-12 photos">
                        <button class="button wow animate__animated animate__fadeInLeft">
                            <li class="nav-item dropdown d-inline-block">
                                <a class="nav-link text-white" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                    All Photo's
                                </a>
                                <div class="dropdown-menu bg-warning">
                                    <a class="dropdown-item" href="#Chhatrapati_Garden_Trip" >Chhatrapati Garden Trip</a>
                                    <a class="dropdown-item" href="#sports">YFIS Sports</a>
                                    <a class="dropdown-item" href="#competitions">Competitions</a>
                                    <a class="dropdown-item" href="#Mahabaleshwar_Trip">Mahabaleshwar Trip</a>
                                </div>
                            </li>
                        </button>    
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 trip1 " >
                        <h3 class="mt-5 wow animate__animated animate__fadeInLeft" id="Chhatrapati_Garden_Trip" style="color:#75002d;">"Chhatrapati Garden Trip"</h3>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 float-left mt-3 ">
                            <img src="https://www.stmarysudupi.org/assets/images/news/181.jpg" alt="" class="w-100 wow animate__animated animate__zoomIn" style="border: 2px groove #75002d; border-radius: 20px;   box-shadow: 5px 11px 15px rgb(250, 175, 175);">
                            <div class="content">
                                <h3>Chhatrapati Garden</h3>
                                <p>Date:2-Aug-2023</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 float-left mt-3 ">
                            <img src="https://sksworldschool.com/wp-content/uploads/2020/02/IMG-20200214-WA0042-300x206.jpg" alt="" class="wow animate__animated animate__zoomIn" style="border: 2px groove #75002d; border-radius: 20px;   box-shadow: 5px 11px 15px rgb(250, 175, 175);">
                             <div class="content">
                                <h3>Chhatrapati Garden</h3>
                                <p>Date:2-Aug-2023</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 float-left mt-3 ">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfzVbKkAZxLcjE1gDQwwW9c8YCLPcLZDE2DCDRIEqqGq15WeOmgq3WlW3KWh2plLkuP-U&usqp=CAU" alt="" class="wow animate__animated animate__zoomIn" style="border: 2px groove #75002d; border-radius: 20px;   box-shadow: 5px 11px 15px rgb(250, 175, 175);">
                            <div class="content">
                                <h3>Chhatrapati Garden</h3>
                                <p>Date:2-Aug-2023</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 float-left mt-3 ">
                            <img src="https://www.thegaudium.com/wp-content/uploads/2015/12/Copy-of-031.jpg" alt="" class="wow animate__animated animate__zoomIn" style="border: 2px groove #75002d; border-radius: 20px;   box-shadow: 5px 11px 15px rgb(250, 175, 175);">
                            <div class="content">
                                <h3>Chhatrapati Garden</h3>
                                <p>Date:2-Aug-2023</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 float-left mt-3 ">
                        <img src="https://www.thegaudium.com/wp-content/uploads/2015/12/File_001.jpeg" alt="" class="wow animate__animated animate__zoomIn" style="border: 2px groove #75002d; border-radius: 20px;   box-shadow: 5px 11px 15px rgb(250, 175, 175);">
                        <div class="content">
                            <h3>Chhatrapati Garden</h3>
                            <p>Date:2-Aug-2023</p>
                        </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 float-left mt-3 ">
                            <img src="https://static.wixstatic.com/media/89ca74_eec933a636844c98940f97fee3c4fe1d~mv2.jpg/v1/fill/w_280,h_280,q_90/89ca74_eec933a636844c98940f97fee3c4fe1d~mv2.jpg" alt="" class="wow animate__animated animate__zoomIn" style="border: 2px groove #75002d; border-radius: 20px;   box-shadow: 5px 11px 15px rgb(250, 175, 175);">
                            <div class="content">
                                <h3>Chhatrapati Garden</h3>
                                <p>Date:2-Aug-2023</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 float-left mt-3 ">
                            <img src="https://sksworldschool.com/wp-content/uploads/2020/02/IMG-20200214-WA0156.jpg" alt="" class="wow animate__animated animate__zoomIn" style="border: 2px groove #75002d; border-radius: 20px;   box-shadow: 5px 11px 15px rgb(250, 175, 175);">
                             <div class="content">
                                <h3>Chhatrapati Garden</h3>
                                <p>Date:2-Aug-2023</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 float-left mt-3 ">
                            <img src="https://assets.telegraphindia.com/telegraph/81a8a3a4-5a0f-4b81-882b-19be09ec385e.jpg" alt="" class="wow animate__animated animate__zoomIn" style="border: 2px groove #75002d; border-radius: 20px;   box-shadow: 5px 11px 15px rgb(250, 175, 175);">
                            <div class="content">
                                <h3>Chhatrapati Garden</h3>
                                <p>Date:2-Aug-2023</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 trip1" >
                        <h3 class="mt-5 wow animate__animated animate__fadeInLeft" id="sports" style="color:#75002d;">Sports</h3>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 float-left mt-3 ">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6Y-ic7KeodVgPEZtSo6I8l8QQgFB4aRfonQ&usqp=CAU" alt="" class="wow animate__animated animate__zoomIn" style="border: 2px groove #75002d; border-radius: 20px;   box-shadow: 5px 11px 15px rgb(250, 175, 175);">
                            <div class="content">
                                <h3>YFIS Ground</h3>
                                <p>Date:12-Jan-2024</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 float-left mt-3 ">
                            <img src="https://www.jhs.ac.in/Innerimages/Best-Sports-School-in-India.jpg" alt="" class="wow animate__animated animate__zoomIn" style="border: 2px groove #75002d; border-radius: 20px;   box-shadow: 5px 11px 15px rgb(250, 175, 175);">
                            <div class="content">
                                <h3>YFIS Ground</h3>
                                <p>Date:12-Jan-2024</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 float-left mt-3 ">
                            <img src="https://static.toiimg.com/thumb/msid-62007634,width-400,resizemode-4/62007634.jpg" alt="" class="wow animate__animated animate__zoomIn" style="border: 2px groove #75002d; border-radius: 20px;   box-shadow: 5px 11px 15px rgb(250, 175, 175);">
                             <div class="content">
                                <h3>YFIS Ground</h3>
                                <p>Date:12-Jan-2024</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 float-left mt-3 ">
                            <img src="https://tipskovai.com/wp-content/uploads/2016/04/SPORTS_IBDP7.jpg" alt="" class="wow animate__animated animate__zoomIn" style="border: 2px groove #75002d; border-radius: 20px;   box-shadow: 5px 11px 15px rgb(250, 175, 175);">
                            <div class="content">
                                <h3>YFIS Ground</h3>
                                <p>Date:12-Jan-2024</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 float-left mt-3 ">
                        <img src="https://wp.scoopwhoop.com/wp-content/uploads/2019/07/5d3bfde850758d404542d4ad_36f79f7b-bf93-4ae4-8016-518d66fc859e.jpg" alt="" class="wow animate__animated animate__zoomIn" style="border: 2px groove #75002d; border-radius: 20px;   box-shadow: 5px 11px 15px rgb(250, 175, 175);">
                        <div class="content">
                            <h3>YFIS Ground</h3>
                            <p>Date:12-Jan-2024</p>
                        </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 float-left mt-3 ">
                            <img src="https://blog.khelomore.com/wp-content/uploads/2017/12/ThrowballFeature.jpg" alt="" class="wow animate__animated animate__zoomIn" style="border: 2px groove #75002d; border-radius: 20px;   box-shadow: 5px 11px 15px rgb(250, 175, 175);">
                            <div class="content">
                                <h3>YFIS Ground</h3>
                                <p>Date:12-Jan-2024</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 float-left mt-3 ">
                            <img src="https://assets.telegraphindia.com/telegraph/2022/Dec/1672211844_edugraph-5.jpg" alt="" class="wow animate__animated animate__zoomIn" style="border: 2px groove #75002d; border-radius: 20px;   box-shadow: 5px 11px 15px rgb(250, 175, 175);">
                            <div class="content">
                                <h3>YFIS Ground</h3>
                                <p>Date:12-Jan-2024</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 float-left mt-3 ">
                            <img src="https://fgsc.edu.pk/wp-content/uploads/2022/07/sports.jpg" alt="" class="wow animate__animated animate__zoomIn" style="border: 2px groove #75002d; border-radius: 20px;   box-shadow: 5px 11px 15px rgb(250, 175, 175);">
                            <div class="content">
                                <h3>YFIS Ground</h3>
                                <p>Date:12-Jan-2024</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 trip1">
                        <h3 class="mt-5 wow animate__animated animate__fadeInLeft" id="competitions" style="color:#75002d;">Competitions</h3>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 float-left mt-3 ">
                            <img src="https://www.shahsatnamjiboysschool.com/wp-content/uploads/2017/05/DSC2000.jpg" alt="" class="wow animate__animated animate__zoomIn" style="border: 2px groove #75002d; border-radius: 20px;   box-shadow: 5px 11px 15px rgb(250, 175, 175);">
                            <div class="content">
                                <h3>Drawing Competition</h3>
                                <p>Date:2-Aug-2023</p>
                            </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 float-left mt-3 ">
                            <img src="https://www.zebarschool.com/wp-content/uploads/2019/10/7.jpg" alt="" class="wow animate__animated animate__zoomIn" style="border: 2px groove #75002d; border-radius: 20px;   box-shadow: 5px 11px 15px rgb(250, 175, 175);">
                            <div class="content">
                                <h3>Drawing Competition</h3>
                                <p>Date:2-Aug-2023</p>
                            </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 float-left mt-3 ">
                            <img src="https://smpsnebsarai.in/upload/gallery/IMG_20221111_085251%281%29.jpg" alt="" class="wow animate__animated animate__zoomIn" style="border: 2px groove #75002d; border-radius: 20px;   box-shadow: 5px 11px 15px rgb(250, 175, 175);">
                             <div class="content">
                                <h3>Drawing Competition</h3>
                                <p>Date:2-Aug-2023</p>
                            </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 float-left mt-3 ">
                                <img src="https://i0.wp.com/nvmb.amritavidyalayam.org/wp-content/uploads/sites/11/ngg_featured/02_2732.jpg?fit=900%2C600" alt="" class="wow animate__animated animate__zoomIn" style="border: 2px groove #75002d; border-radius: 20px;">
                                 <div class="content">
                                    <h3>Project Competition</h3>
                                    <p>Date:4-Aug-2023</p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 float-left mt-3 ">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRmjTUmyewlLEaC-CHDiV4Da9_MhKtw7FhOyg&usqp=CAU" alt="" class="wow animate__animated animate__zoomIn" style="border: 2px groove #75002d; border-radius: 20px;   box-shadow: 5px 11px 15px rgb(250, 175, 175);">
                            <div class="content">
                                <h3>Project Competition</h3>
                                <p>Date:4-Aug-2023</p>
                            </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 float-left mt-3 ">
                                <img src="https://i.ytimg.com/vi/t6m8kA6sZTo/hq720.jpg?sqp=-oaymwE7CK4FEIIDSFryq4qpAy0IARUAAAAAGAElAADIQj0AgKJD8AEB-AH-CYAC0AWKAgwIABABGGUgXShQMA8=&rs=AOn4CLA2lSwHHrBCwNFFpwypF_cQd8TUKw" alt="" class="wow animate__animated animate__zoomIn" style="border: 2px groove #75002d; border-radius: 20px;">
                                  <div class="content">
                                    <h3>Project Competition</h3>
                                    <p>Date:4-Aug-2023</p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 float-left mt-3 ">
                                <img src="https://www.themillenniumschools.com/tmspatiala/sites/default/files/patiala/2_5.jpeg" alt="" class="wow animate__animated animate__zoomIn" style="border: 2px groove #75002d; border-radius: 20px;">
                                 <div class="content">
                                    <h3>Card Competition</h3>
                                    <p>Date:5-Aug-2023</p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 float-left mt-3 ">
                                <img src="https://primary.mes.ac.in/wp-content/uploads/2022/11/Handwriting-Competition-2022-1.png" alt="" class="wow animate__animated animate__zoomIn" style="border: 2px groove #75002d; border-radius: 20px;">
                                 <div class="content">
                                    <h3>Card Competition</h3>
                                    <p>Date:5-Aug-2023</p>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 trip1 mb-5">
                        <h3 class="mt-5 wow animate__animated animate__fadeInLeft" id="Mahabaleshwar_Trip" style="color:#75002d;">Mahabaleshwar Trip</h3>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 float-left mt-3 ">
                            <img src="https://tsge.edu.in/wp-content/uploads/2023/08/mahabaleshawar-tip.webp" alt="" class="wow animate__animated animate__zoomIn" style="border: 2px groove #75002d; border-radius: 20px;   box-shadow: 5px 11px 15px rgb(250, 175, 175);">
                            <div class="content">
                                <h3>Mahabaleshwar Trip</h3>
                                    <p>Date:22-Feb-2024</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 float-left mt-3 ">
                            <img src="https://divinechildcbse.org/wp-content/uploads/2018/11/IMG-20181127-WA0007.jpg" alt="" class="wow animate__animated animate__zoomIn" style="border: 2px groove #75002d; border-radius: 20px;   box-shadow: 5px 11px 15px rgb(250, 175, 175);">
                             <div class="content">
                                <h3>Mahabaleshwar Trip</h3>
                                    <p>Date:22-Feb-2024</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 float-left mt-3 ">
                            <img src="https://divinechildcbse.org/wp-content/uploads/2018/11/IMG-20181127-WA0024.jpg" alt="" class="wow animate__animated animate__zoomIn" style="border: 2px groove #75002d; border-radius: 20px;   box-shadow: 5px 11px 15px rgb(250, 175, 175);">
                             <div class="content">
                                <h3>Mahabaleshwar Trip</h3>
                                    <p>Date:22-Feb-2024</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 float-left mt-3 ">
                            <img src="https://divinechildcbse.org/wp-content/uploads/2018/11/IMG-20181127-WA0009.jpg" alt="" class="wow animate__animated animate__zoomIn" style="border: 2px groove #75002d; border-radius: 20px;   box-shadow: 5px 11px 15px rgb(250, 175, 175);">
                             <div class="content">
                                <h3>Mahabaleshwar Trip</h3>
                                <p>Date:22-Feb-2024</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 float-left mt-3 ">
                            <img src="https://media-cdn.tripadvisor.com/media/photo-c/1280x250/0c/ab/40/f8/very-beautiful-hill-station.jpg" alt="" class="wow animate__animated animate__zoomIn" style="border: 2px groove #75002d; border-radius: 20px;   box-shadow: 5px 11px 15px rgb(250, 175, 175);">
                            <div class="content">
                                <h3>Mahabaleshwar Trip</h3>
                                    <p>Date:22-Feb-2024</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 float-left mt-3 ">
                            <img src="https://www.holidaysat.ca/gallery/Mahabaleshwar0.jpg" alt="" class="wow animate__animated animate__zoomIn" style="border: 2px groove #75002d; border-radius: 20px;   box-shadow: 5px 11px 15px rgb(250, 175, 175);">
                            <div class="content">
                                <h3>Mahabaleshwar Trip</h3>
                                <p>Date:22-Feb-2024</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 float-left mt-3 ">
                            <img src="https://spiskalwan.org/wp-content/uploads/2018/12/CLASS-III-MAHABALESHWAR-TRIP-21.jpg" alt="" class="wow animate__animated animate__zoomIn" style="border: 2px groove #75002d; border-radius: 20px;   box-shadow: 5px 11px 15px rgb(250, 175, 175);">
                            <div class="content">
                                <h3>Mahabaleshwar Trip</h3>
                                <p>Date:22-Feb-2024</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 float-left mt-3 ">
                            <img src="https://purplebus.in/images/bustours/MoonSoon_Tours/Mahabaleshwar/Mahabaleshwar---pachgani.jpg" alt="" class="wow animate__animated animate__zoomIn" style="border: 2px groove #75002d; border-radius: 20px;   box-shadow: 5px 11px 15px rgb(250, 175, 175);">
                            <div class="content">
                                <h3>Mahabaleshwar Trip</h3>
                                <p>Date:22-Feb-2024</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <?php
        include("footer.php");
        ?>
        <!-- <footer class="footer">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-6 col-xl-4 wow animate__animated animate__fadeInTopLeft">
                        <div class="footer_logo ">
                            <a href="index.html"><img src="images/logo.png" alt=""></a>
                             <p style="color: #22524c;">The Youth Foundation fosters empowerment and development among young individuals, offering diverse programs in education, leadership, and social initiatives. With a commitment to nurturing potential, it cultivates a generation of dynamic leaders equipped to address global challenges. </p>
                            
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-2 d-flex justify-content-center wow animate__animated animate__backInUp">
                        <div class="quick_link d-inline">                        
                            <ul type="none">
                                <li><a href="about.html">ABOUT US</a></li>
                                <hr style="color: black;">
                                <li><a href="admission.html">ADMISSIONS</a></li>
                                <hr style="color: black;">
                                <li><a href="#LIFE_AT_YFIS">LIFE AT YFIS</a></li>
                                <hr style="color: black;">
                                <li><a href="gallery.html">GALLERY</a></li>
                                <hr style="color: black;">
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-2 d-flex justify-content-center wow animate__animated animate__backInUp">
                        <div class="quick_link d-inline">                        
                            <ul type="none">
                                <li><a href="contact.html">CONTACT US</a></li>
                                <hr style="color: black;">
                                <li><a href="parent_login.html">PARENT CONNECT</a></li>
                                <hr style="color: black;">
                                <li><a href="health&safety.html">HEALTH & SAFETY</a></li>
                                <hr style="color: black;">
                                <li><a href="parent_testimonial.html">PARENT TESTIMONIAL</a></li>
                                <hr style="color: black;">
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 d-flex justify-content-center wow animate__animated animate__fadeInTopRight">
                        <div class="address">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120638.06828970327!2d74.66009990945562!3d19.11030399343299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdcb05d46788921%3A0x6677e92c1a5181b6!2sAhmednagar%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1708449437861!5m2!1sen!2sin" width="370" height="200" style="margin-top: 50px; border: 2px groove #75002d; border-radius: 20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            
                            <p class="addr" style="color: #22524c;">
                                Tel : +91-11-28052000, +91-11-28052300 <br> Email : yfis@gmail.com
                            </p>
                            <ul type="none" class="footer_social_icon float-center">
                                <li >
                                    <i class="fa-brands fa-whatsapp"></i>
                                    <i class="fa-brands fa-facebook"></i>
                                    <i class="fa-brands fa-youtube"></i>
                                    <i class="fa-brands fa-linkedin"></i>
                                    <i class="fa-brands fa-instagram"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <hr style="color: black;">
                    <div class="col-12 wow animate__animated animate__bounce">
                        <div class="last_footer ">
                            <p >Copyright © 2024 - YFIS . All rights reserved.
                                <br>design & developed by Omkar, Siddharth and Soham</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer> -->
    </main>
    <script>
        new WOW().init();
    </script>
</body>
</html>


