<?php require_once("includes/db_connect.php"); ?>
        <?php include_once("Templates/head.php"); ?>
        <!--Header section starts-->
        <?php include_once("Templates/nav.php"); ?>
        <!--Header section ends-->
        <?php
        if(isset($_POST["send_message"])){
            $fn = $_POST["fullname"];
            $mail = $_POST["email_address"];
            $subject = $_POST["subject_line"];
            $message = $_POST["client_message"];

            $insert_message = "INSERT INTO messages (sender_name, sender_email, subject_line, text_message) VALUES ('$fn', '$mail', '$subject', '$message')";

            if ($conn->query($insert_message) === TRUE) {
                header("Location: contact.php");
                exit();
            } else {
                echo "Error: " . $insert_message . "<br>" . $conn->error;
            }
        }
        ?>
        <!--Contact Us section starts-->
        <div class="contactUs">
            <div class="title">
                <h1><span>CONTACT</span> US</h1><!--Title-->
            </div>
            <div class="box">
                <!--Contact form where customer inputs their details-->
                <div class="contact form">
                    <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="contact form"></form>
                    <h3>SEND US A MESSAGE</h3>
                    <form>
                     <div class="formBox">
                        <div class="row50">
                        <div class="inputBox">
                            <input type="hidden" name="access_key" value="a4b395d3-4f31-4ae3-93a2-354b74f300d8">
                            <span><i class="fa-solid fa-user" style="margin-right: 5px;"></i>First Name</span>
                            <input type="text" placeholder="Jane">
                        </div>
                        <div class="inputBox">
                            <span><i class="fa-solid fa-user" style="margin-right: 5px;"></i>Surname</span>
                            <input type="text" placeholder="Doe">
                        </div>
                        </div>


                        <div class="row50">
                        <div class="inputBox">
                            <span><i class="fa-solid fa-envelope" style="margin-right: 5px;"></i>Email</span>
                            <input type="email" placeholder="janedoe@email.com">
                        </div>
                        <div class="inputBox">
                            <span><i class="fa-solid fa-phone" style="margin-right: 5px;"></i>Mobile no.</span>
                            <input type="text" placeholder="+254712345678">
                        </div>
                        </div>
                        <div class="row100">
                        <div class="inputBox">
                            <span><i class="fa-solid fa-message" style="margin-right: 5px;"></i>Message</span>
                            <textarea placeholder="Type your message here"></textarea>
                        </div>
                        </div>
                        <div class="row100">
                            <div class="inputBox">
                                <input type="submit" value="Send">
                            </div>
                        </div>
                     </div>
                    </form>
                </div>
                <!--Info box giving out where the customer can contact the bakery to order-->
                <div class="contactInfo">
                    <h3>CONTACT INFO</h3>
                    <div class="infoBox">
                        <ul class="details">
                            <li>
                                <span><i class="fa-solid fa-location-dot"></i></span><br>
                                <p>Moi Avenue, Nairobi<br>KENYA</p>
                            </li><br>
                            <li>
                                <span><i class="fa-solid fa-envelope"></i></span><br>
                                <p>thelittlebakery@gmail.com</p>
                            </li><br>
                            <li>
                                <span><i class="fa-solid fa-phone"></i></span><br>
                                <p>+254 703 883 445</p>
                            </li><br>
                        </ul>
                        
                    </div>


                    <!--Social media links to the bakery's social media pages-->
                    <ul class="sci">
                        <li><a href="#"><i class="fa-brands fa-facebook" style="margin-left: 11rem;"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>
                <!--Map to where the bakery is physically located-->
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.817331162601!2d36.
                    82356199999999!3d-1.2834673999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10d6678064cf
                    %3A0x956bb6f5e0ab2aac!2sMoi%20Ave%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1718287523204!5m2!1sen!2ske"  
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>


            </div>
        </div>
        <!--Contact Us section ends-->
    </body>