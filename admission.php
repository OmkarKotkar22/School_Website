<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youth Foundation</title>
    <link rel="icon" href="images/logo1.png">
    <link rel="stylesheet" href="admission.css">
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
    <link rel="stylesheet"
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
                    <div class="col-xl-4 col-lg-6 col-md-12 mt-3 d-flex justify-content-center              justify-content-md-center wow animate__animated animate__fadeInLeft">
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-light">Admissions</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="section3">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <button class="applynow wow animate__animated animate__fadeInUp"><a href="form.php">Apply Now</a></button>
                    </div>
                </div>
            </div>
        </section>
        <section class="section4 mt-5 wow animate__animated animate__fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="text-justify wow animate__animated animate__fadeInUp" style="color: #266f66;">Admission to YFIS  is open to students who can benefit from the educational services currently provided by our programs. Our purpose  is to provide an outstanding  educational program with Quality and Value-Based Education. Every child deserves a vibrant, stimulating learning environment that encourages and supports their full potential.</p>
                        <p class="text-justify wow animate__animated animate__fadeInUp" style="color: #266f66;">YFIS offers admissions to Pre-Primary  and Grades 1 to 12.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section5 mt-3 animate__animated animate__fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="wow animate__animated animate__fadeInUp" style="color:#75002d;">Admission Applicants</h2>
                        <h4 class="wow animate__animated animate__fadeInUp" style="color:#00394F;">Admission to applicants is open only to grades where vacancies are available.</h4>
                        <p class="text-justify mt-3 wow animate__animated animate__fadeInUp" style="color: #266f66;">In making the admission decision, the Administration will consider the enrollment capacity of the school. An applicant pool may be utilized to fill openings which become available during the school year in accordance with admission priorities and class size guidelines.</p>
                        <p class="text-justify wow animate__animated animate__fadeInUp" style="color: #266f66;">Admission is initially considered upon receipt of an online inquiry request submitted with Student and Parents  information.</p>
                        <p class="text-justify wow animate__animated animate__fadeInUp" style="color: #266f66;">On receiving the online inquiry form , a YFIS admissions manager will contact you shortly with details for a conveniently scheduled telephonic conversation with a dedicated admissions coordinator who will take you through our academic programmes and the exciting student life we offer here at YFIS</p>
                        <p class="text-justify wow animate__animated animate__fadeInUp" style="color: #266f66;">This will be followed up with a call from our admissions manager to find out your decision and guide you to the  next step of admissions process to Pre-Register online. Pre-Registration requires online  submission of student photo, previous two academic years transcripts (Grade 3 onwards) and Aadhar/Passport details.</p>
                        <p class="text-justify wow animate__animated animate__fadeInUp" style="color: #266f66;">On successful completion of Pre-registration, candidates (from Grade 2 onwards) will be invited to attend an online / offline  entrance examination followed by an interactive session with Principal/Head of Campus. Test results will be confirmed on the same day. This will be followed by an online/offline interactive session with our Principal/Head of Campus and that completes the selection process.</p>
                        <p class="text-justify wow animate__animated animate__fadeInUp" style="color: #266f66;">The Principal/ Head of Campus reserves the right to make the final decision regarding admission.</p>
                        <p class="text-justify wow animate__animated animate__fadeInUp" style="color: #266f66;">The admission process becomes completed only when the applicant accepts and acknowledges the Admission offer letter with Terms and Conditions.</p>
                        <h2 class="wow animate__animated animate__fadeInUp" style="color:#75002d;">Application Documentation:</h2>
                        <h4 style="color:#00394F;" class="text-justify wow animate__animated animate__fadeInUp">The admission process is followed by  submission of application document in Admission Office.</h4>
                        <h6 class="font-weight-bold mt-3 wow animate__animated animate__fadeInUp" style="color:#00394F;">Students:</h6>
                        <ul>
                            <li class="ml-4 text-justify mt-2 wow animate__animated animate__fadeInUp" style="color: #266f66;">3 recent color photos.</li>
                            <li class="ml-4 text-justify mt-2 wow animate__animated animate__fadeInUp" style="color: #266f66;">Birth certificate of student or a copy of a foreign passport of the student and parent(s).</li>
                            <li class="ml-4 text-justify mt-2 wow animate__animated animate__fadeInUp" style="color: #266f66;">Academic records for the past two years(submitted during Pre-registration)</li>
                            <li class="ml-4 text-justify mt-2 wow animate__animated animate__fadeInUp" style="color: #266f66;">Transfer Certificate from the previous school. If for any reason the Transfer Certificate cannot be produced at the time of admission, it must be produced on or before the commencement of the academic session.</li>
                            <li class="ml-4 text-justify mt-2 wow animate__animated animate__fadeInUp" style="color: #266f66;">Transport / Lunch and Boarding requisition forms</li>
                            <li class="ml-4 text-justify mt-2 wow animate__animated animate__fadeInUp" style="color: #266f66;">Health Record
                            </li>
                            <li class="ml-4 text-justify mt-2 wow animate__animated animate__fadeInUp" style="color: #266f66;">Permission form</li>
                        </ul>
                        <h6 class="font-weight-bold wow animate__animated animate__fadeInUp" style="color:#00394F;">Family</h6>
                        <ul>
                            <li class="text-justify ml-4 mt-2 wow animate__animated animate__fadeInUp" style="color: #266f66;">Residential address proof</li>
                            <li class="text-justify ml-4 mt-2 wow animate__animated animate__fadeInUp" style="color: #266f66;">Permission to contact current/previous school.</li>
                        </ul>
                        <h2 class="wow animate__animated animate__fadeInUp" style="color:#75002d;">Prospectus</h2>
                        <p class="wow animate__animated animate__fadeInUp" style="color: #266f66;">We are pleased to share with you our prospectus. <a href="https://theindianpublicschool.org/pdf/TIPS_Brochure_2019.pdf" class="text-decoration-none text-danger">Download Prospectus</a></p>
                    </div>
                </div>
            </div>
        </section>
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