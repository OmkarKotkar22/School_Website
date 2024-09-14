<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youth Foundation</title>
    <link rel="icon" href="images/logo1.png">
    <link rel="stylesheet" href="about.css">
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
                    <div class="col-xl-4 col-lg-6 col-md-12 mt-3 d-flex justify-content-center justify-content-md-center wow animate__animated animate__fadeIn">
                        <p style="color:#75002d;">Opening Time:(10:00AM - 05:00PM) </p>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12 mt-3 d-flex justify-content-center justify-content-md-center wow animate__animated animate__fadeIn">
                        <ul type="none" class="contact_icon">
                            <li class="d-inline" style="color:#75002d;"><i class="fa-solid fa-phone" ></i>+91 9746241368</li>
                            <li class="d-inline" style="color:#75002d;"><i class="fa-solid fa-envelope ml-4"></i>yfis@gmail.com</li>
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
                    <div class="col-12 p-0 ">
                        <div class="marquee1 ">
                            <marquee behavior="scroll" direction="left"><b class="wow animate__animated animate__zoomIn">***Admissions open for the session 2024-25***</marquee>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

       <section class="backgroundimage">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12"></div>
            </div>
        </div>
       </section>
       <section class="aboutus">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="mt-5 wow animate__animated animate__FadeInUp" style="color:#75002d;">About Us</h2>
                    <p class="text-justify mt-3 wow animate__animated animate__fadeInUp" style="color: #266f66;">"Welcome to YFIS, a place where academic excellence meets holistic development. Nestled in the heart of New Delhi, our school is committed to providing a nurturing and inclusive learning environment for students from diverse backgrounds. With a rich history of 20 years, we pride ourselves on our dedicated faculty, innovative teaching methods, and comprehensive curriculum. Our focus extends beyond academics to encompass the holistic development of every student, fostering their intellectual, emotional, and social growth. At YFIS, we strive to cultivate lifelong learners, critical thinkers, and compassionate individuals prepared to make a positive impact in the world."</p>
                </div>
            </div>
        </div>
       </section>
       <section class="history">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12  col-lg-6 col-xl-6">
                    <img src="images/aboutschoolbuilding.jpg" alt="" class="wow animate__animated animate__fadeInUp" style="border: 2px groove #75002d; border-radius: 20px;  box-shadow: 5px 11px 15px rgb(250, 175, 175);">
                </div>
                <div class="col-12 col-md-12  col-lg-6 col-xl-6 wow animate__animated animate__fadeInUp">
                    <h2 class="mt-5 mt-md-0" style="color:#75002d;">History of YFIS</h2>
                    <P class="text-justify " style="color: #266f66;">In the early 1900s, a small Midwest farming community faced a challenge: the nearest school was several miles away, making regular attendance difficult for many children. Determined to provide education for their young ones, the community banded together and decided to build their own schoolhouse. Using local timber and stones, they constructed a modest yet sturdy one-room schoolhouse. Parents took turns teaching, and older students helped the younger ones, fostering a sense of unity and shared responsibility for learning. As word spread, families from neighboring areas joined the effort, and the school grew into a bustling educational center. Over the years, generations of students passed through its doors, receiving not just an education but also imbibing the values of hard work, cooperation, and community spirit. Today, the original schoolhouse still stands as a testament to the community's dedication to education and the enduring legacy of those early pioneers.</P>
                </div>

            </div>
        </div>
       </section>
       <section class="inspiration wow animate__animated animate__fadeInUp" id="Our_Inspiration">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                    <h2 style="color:#75002d;">OUR INSPIRATION</h2>
                    <img src="images/principal.jpg" alt="" class="mt-3" style="border: 2px groove #75002d; border-radius: 20px;  box-shadow: 5px 11px 15px rgb(250, 175, 175);">
                </div>
                <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                    <p class="mt-5" style="color: #17A2B8 ;">
                        Dear Students, Parents, and Staff,<p>
                        <p class="text-justify " style="color: #266f66;">Welcome to YFIS ! As the principal, I am thrilled to begin this academic year with such a vibrant and dedicated community. Our focus at YFIS is not only on academic excellence but also on nurturing well-rounded individuals. We believe in providing a supportive and inclusive environment where every student can thrive. I encourage each of you to embrace new opportunities, challenge yourselves, and make the most of your time here. Together, let's make this year one of growth, discovery, and achievement. I am here to support and guide you every step of the way. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quas laborum corrupti expedita pariatur doloribus iste, earum dolorem mollitia culpa aliquam eius labore officia sapiente harum vero dolore atque doloremque quo nam. Nulla molestias voluptatem repudiandae laborum impedit earum? Accusamus rem, earum dicta dolor assumenda eius corporis veniam quia molestiae.</p>
                </div>

            </div>
        </div>
       </section>
       <section class="vision wow animate__animated animate__fadeInUp" id="Vision_Mission">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 style="color:#75002d;">OUR VISION</h2>
                    <p class="text-justify mt-3" style="color: #266f66;">To be the foremost and most sought-ater education provider in CBSE, IB and cambridge programmer access all districts of Tamilnadu, establishing a pan-india and worldwide presence of offering extraordinary education, exposure and experience.</p>
                </div>
            </div>
        </div>
       </section>
       <section class="mission wow animate__animated animate__fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 style="color:#75002d;">OUR MISSION</h2>
                    <ul>
                        <li class="text-justify ml-3 mt-2" style="color: #266f66;">Deliver an infrastructure that is on par with global standards, conducive for collaborative learning and performing.</li>
                        <li class="text-justify ml-3 mt-2" style="color: #266f66;">Provide an open, happy and secure environment where all stakeholders are treated with care and respect.
                        </li>
                        <li class="text-justify ml-3 mt-2" style="color: #266f66;">Ensure curriculum is rigorous and has an integrated engaging approach to teaching and learning, with engagements focusing on knowledge, skills and has relevance to real-life applications.</li>
                        <li class="text-justify ml-3 mt-2" style="color: #266f66;">
                            Identify and continuously support all levels of Learners at every step by setting high expectation standards and ensuring documented progress.
                        </li>
                        <li class="text-justify ml-3 mt-2" style="color: #266f66;">
                            Create ample opportunities for children and teachers to get exposure to grow their confidence, knowledge and skills beyond the written curriculum.
                        </li>
                        <li class="text-justify ml-3 mt-2" style="color: #266f66;">
                            Achieve 3E’s – Extraordinary Education, Extraordinary Exposure & Extraordinary Experience to compete globally.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
       </section>
       <section class="philosophy wow animate__animated animate__fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 style="color:#75002d;">OUR PHILOSOPHY</h2>
                    <p class="text-justify mt-3" style="color: #266f66;">We facilitate a safe, friendly and constructive school climate for our stakeholders, where they can be themselves and openly express their opinions, where they feel secure and learn to live virtuously. We believe that every child is unique and that children learn better when they are in a happy state of mind. Our learning engagements are designed to focus on developing skills that are required to become confident, lifelong learners to face the future. Integration of academic knowledge and skills across different scholastic and co-scholastic disciplines makes sure every learning leads to meaningful action.</p>
                    <p class="text-justify mt-3" style="color: #266f66;">We provide curriculum that is dynamic, encompassing, balanced, rigorous and relevant towards supporting children to be confident and well rounded. It is incessantly reviewed and revised to enhance student learning. Building research attitude in children to comprehend and approach local to global issues, and to create new knowledge is our commitment towards a brighter and better world. We are committed to creating ample opportunities for children to explore, learn and grow, thus providing exposure to the immediate world and beyond. We recognize and identify the strengths of children; foster them to follow their heart, motivate them to take up new challenges, believe in competing with themselves and improve, and help them realize the need to grow responsibly.</p>
                </div>
            </div>
        </div>
       </section>
       <section class="healthandsafety wow animate__animated animate__fadeInUp" id="Health_and_Safety">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                    <h2 style="color:#75002d;">Health Care</h2>
                    <p class="text-justify mt-3" style="color: #266f66;">DIS believes that a healthy body promotes a sound mind. There are facilities to deal with the routine health problems of the students. Regular medical checkups are organised by the school to ensure good health and well being of the students. Physical fitness and oral hygiene camps are an integral part of our health education.</p>
                    <p  class="text-justify mt-3" style="color: #266f66;">Parents should inform the school authorities regarding children with physical disabilities. Special attention can be paid to the concerned child. All parents are requested to impart Health Education to their children. Students suffering from infectious diseases such as Conjunctivitis, Dermatitis, and Scabies etc should not be sent to school until they have fully recovered.</p>
                </div>
                <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                    <img src="https://dis.ac.in/assets/images/Medical-and-Healthcare.jpg" alt="" style="border: 2px groove #75002d; border-radius: 20px;  box-shadow: 5px 11px 15px rgb(250, 175, 175);">
                </div>

            </div>
        </div>
       </section>
       <section class="facilities wow animate__animated animate__fadeInUp" id="Facilities">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                    <img src="https://dis.ac.in/assets/images/Transport-Facility.jpg" alt="" style="border: 2px groove #75002d; border-radius: 20px;  box-shadow: 5px 11px 15px rgb(250, 175, 175);">
                </div>
                <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                    <h2 style="color:#75002d;">Transport Facility</h2>
                    <p class="text-justify" style="color: #266f66;">At our school, we prioritize the safety and convenience of our students, which is why we offer top-notch transport facilities. Our fleet of buses is modern, comfortable, and well-maintained, ensuring a smooth and enjoyable ride for all students. We have a team of dedicated drivers who are trained to prioritize safety and adhere to strict schedules, ensuring that students arrive at school on time. Additionally, our buses are equipped with modern amenities, such as air conditioning and comfortable seating, to make the journey to and from school a pleasant experience. We also offer a variety of bus routes to cater to students from different areas, ensuring that everyone has access to our transport services. With our commitment to providing reliable and efficient transport, we strive to make the daily commute to school as hassle-free as possible for our students and their families.</p>
                </div>

            </div>
        </div>
       </section>
       <section class="facilities2 wow animate__animated animate__fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                    <h2 style="color:#75002d;">Library</h2>
                    <p class="text-justify" style="color: #266f66;">At our school, we take great pride in our exceptional library facilities, designed to support and enhance our students' learning experience. Our library is well-stocked with a wide range of books, including textbooks, fiction, non-fiction, and reference materials, catering to diverse interests and academic needs. We also provide access to digital resources, such as e-books, online journals, and databases, ensuring that students have access to the latest information and research materials. Our library space is welcoming and conducive to study, with comfortable seating, study tables, and quiet zones for focused work. Additionally, we have qualified librarians who are available to assist students in finding resources, conducting research, and developing their information literacy skills. With our commitment to promoting a culture of reading and learning, we strive to make our library a valuable resource for all students.</p>
                </div>
                <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                    <img src="https://dis.ac.in/assets/images/Library.jpg" alt="" style="border: 2px groove #75002d; border-radius: 20px;  box-shadow: 5px 11px 15px rgb(250, 175, 175);">
                </div>
            </div>
        </div>
       </section>
       <section class="facilities3 wow animate__animated animate__fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                    <img src="https://dis.ac.in/assets/images/Labs-Infrastructure.jpg" alt="" style="border: 2px groove #75002d; border-radius: 20px;  box-shadow: 5px 11px 15px rgb(250, 175, 175);">
                </div>
                <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                    <h2 style="color:#75002d;">Labs Infrastructure</h2>
                    <p class="text-justify" style="color: #266f66;">
                        Our school boasts state-of-the-art laboratory facilities that provide students with a hands-on learning experience. Equipped with modern equipment and tools, our labs cater to a wide range of subjects, including science, technology, engineering, and mathematics (STEM). Whether conducting experiments in biology, chemistry, physics, or computer science, students have access to the resources they need to explore concepts and theories in depth. Our labs are designed to promote collaboration and critical thinking, with ample space for group work and experimentation. Additionally, we have a team of experienced lab technicians who ensure that all equipment is well-maintained and ready for use. With our commitment to providing a dynamic and engaging learning environment, we strive to inspire curiosity and innovation in our students through our outstanding laboratory infrastructure.
                    </p>
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