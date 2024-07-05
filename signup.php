<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8"/>
        <title>MyWebsite</title>
       <!-- custom css file link -->
        <link rel="stylesheet" href="style.css">
        <!--Link to the page for icons used in the code-->
        <script src="https://kit.fontawesome.com/061a76efba.js"crossorigin="anonymous"></script>
    </head>
    <body>
        <!--Header section starts-->
        <?php include_once("Templates/nav.php"); ?>
        <!--Header section ends-->
        
        <!--Sign up section starts-->
        <section class="signup" id="signup">
        <div class="signupBx">
            <div class="imgBx"><!--Picture on sign up page-->
            <img src="https://mir-s3-cdn-cf.behance.net/project_modules/2800_opt_1/01b16596516889.5eb0538b67c7b.jpg">
            </div>
            <div class="contentBx">
                <h1 class="hsignup">SIGN<span> UP</span></h1>
                <form class="formBx">
                    <!--User puts in their details(Username and Password)-->
                    <div class="inputBx">
                        <i class="fa-solid fa-envelope fa-2x" style="color: #d3ad7f; margin-right: 5px;"></i>
                        <span style="color: #fff;">Email</span>
                        <br>
                        <input type="email" name="" placeholder="Email">
                       
                    </div>
                    <div class="inputBx">
                        <i class="fa-solid fa-user fa-2x" style="color:#d3ad7f; margin-right: 5px;"></i>
                        <span style="color: #fff;">Create a Username</span>
                        <br>
                        <input type="text" name="" placeholder="Username">
                       
                    </div>
                    <div class="inputBx">
                        <i class="fa-solid fa-lock fa-2x" style="color: #d3ad7f; margin-right: 5px;"></i>
                        <span style="color: #fff;">Password</span>
                        <br>
                        <input type="password" name="" placeholder="password">
            
                    </div>
                    <div class="inputBx">
                        <i class="fa-solid fa-check fa-2x" style="color: #d3ad7f; margin-right: 5px;"></i>
                        <span style="color: #fff;">Confirm Password</span>
                        <br>
                        <input type="password" name="" placeholder="password">
                    </div>
                    <div class="inputBx">
                        <!--Sign Up button-->
                        <input type="submit" value="Sign up" name="">
                    </div>
                </form>

            </div>
        </div>
    </section>
        <!--Sign up section ends-->
    </body>
   