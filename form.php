<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Student Registration Form </title>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <section class="registration">
        <h2> Registration </h2>
        <section class="details-section">
            <form action="enquiry_save.php" class="registration-form" method="post">
                <!-- Personal Details Section -->
                <h4> Personal Details </h4>
                <section class="personal-details">
                    <div class="details">
                        <label for="name">
                            <p>Full Name</p>
                            <input type="text" name="sfullname" id="name" placeholder="Enter your name">
                        </label>
                        <label for="fName">
                            <p> Father Name </p>
                            <input type="text" name="sfathername" id="fName" placeholder="Enter father name">
                        </label>
                        <label for="mName">
                            <p>Mother Name</p>
                            <input type="text" name="smothername" id="mName" placeholder="Enter mother name">
                        </label>
                    </div>

                    <div class="details">
                        <label for="DOB">
                            <p>Date of Birth</p>
                            <input type="date" name="sdateofbirth" id="DOB" placeholder="Enter your DOB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </label>
                        <label for="aadharNo">
                            <p>Aadhar Number</p>
                            <input type="text" name="saadharnumber" id="aadharNo" placeholder="Enter aadhar number">
                        </label>
                        <label for="email">
                            <p>Email</p>
                            <input type="email" name="semail" id="email" placeholder="Enter your email">
                        </label>
                    </div>
                    
                    <div class="details">
                        <label for="ph">
                            <p> Mobile Number</p>
                            <input type="tel" name="smobile" id="ph" placeholder="Enter mobile number">
                        </label>

                        <label for="gender">
                            <p> Gender</p>
                            <input type="text" name="sgender" id="gender" placeholder="Enter your gender">
                        </label>

                        <label for="address">
                            <p> City</p>
                            <input type="text" name="scity" id="address" placeholder="Enter your Address">
                        </label>
                    </div>
                </section>

                <hr>

                <!-- Identity Details Section -->
                <h4> Other Details </h4>
                <section class="identity-details">
                    <div class="details">
                        <label for="stream">
                            <p> Stream </p>
                            <input type="text" name="sstream" id="stream" placeholder="Enter your stream">
                        </label>
                        <label for="previousClass">
                            <p> Previous Class </p>
                            <input type="text" name="spreviousclass" id="previousClass"
                                placeholder="Enter previous class">
                        </label>
                        <label for="hobbies">
                            <p> Hobbies </p>
                            <input type="text" name="shobbies" id="hobbies" placeholder="Enter your hobbies">
                        </label>
                    </div>
                    <div class="details">
                        <label for="accNo">
                            <p> Account Number </p>
                            <input type="text" name="saccountnumber" id="accNo" placeholder="Enter account number">
                        </label>
                        <label for="religion">
                            <p> Religion </p>
                            <input type="text" name="sreligion" id="religion" placeholder="Enter your religion">
                        </label>
                        <label for="category">
                            <p> Category </p>
                            <input type="text" name="scategory" id="category" placeholder="Enter your category">
                        </label>
                    </div>
                </section>
                <button class="submit"> Submit </button>
            </form>
        </section>
    </section>
</body>

</html>