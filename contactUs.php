<?php
include_once("Templates/nav.php");
?>
<html>
<link rel="stylesheet" href="css/contact.css">
<link rel="stylesheet" href="css/style.css">
<link rel = "icon" type = "image/x-icon" href = "images/Logo.png">


<body>
<section id="contact">
<!--Contact Us Form-->
    <div class="contact-container">
        <form action="https://api.web3forms.com/submit" method="POST" class="contact-left">

            <div class="contact-left-title">
                <h2>Contact <span>Us</span></h2>
                <hr>
            </div>
            <input type="hidden" name="access_key" value="a4b395d3-4f31-4ae3-93a2-354b74f300d8">
            <input type="text" name="name" placeholder="Your Name" class="contact-inputs" required >
            <input type="email" name="email" placeholder="Your Email" class="contact-inputs" required >
            <textarea name="message" placeholder="Your message" class="contact-inputs" required></textarea>
            <button type="submit">Submit</button>
        </form>

        <div class="" class="contact-right">
            <img src="Resources/contact_assets/right_img.png" alt="">           
        </div>
    </div>
    </section>
</body>
</html>

