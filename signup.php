    <?php require_once("includes/db_connect.php"); ?>
    <?php include_once("Templates/head.php"); ?>
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
                <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method = "POST" class="formBx">
                    <!--User puts in their details(Username and Password)-->
                    <div class="inputBx">
                        <i class="fa-solid fa-envelope fa-2x" style="color: #d3ad7f; margin-right: 5px;"></i>
                        <span style="color: #fff;">Email</span>
                        <br>
                        <input type="email" id="em" name="email_address" placeholder="Email" maxlength="50" required>
                        <?php if(isset($_SESSION["wrong_email_format"])) { print '<span class="error_form">'.$_SESSION["wrong_email_format"].'</span>'; unset($_SESSION["wrong_email_format"]); } ?><br>
                    </div>
                    <div class="inputBx">
                        <i class="fa-solid fa-user fa-2x" style="color:#d3ad7f; margin-right: 5px;"></i>
                        <span style="color: #fff;">Create a Username</span>
                        <br>
                        <input type="text" id="un" name="username" placeholder="Username" maxlength="50" required>
                       
                    </div>
                    <div class="inputBx">
                        <i class="fa-solid fa-lock fa-2x" style="color: #d3ad7f; margin-right: 5px;"></i>
                        <span style="color: #fff;">Password</span>
                        <br>
                        <input type="password" id="pass" name="passphrase" placeholder="Password" required>
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
                <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Database connection details
        $servername = "localhost"; 
        $username = "root"; 
        $password = "";  
        $database = "flights"; 

        $conn = mysqli_connect($servername, $username, $password, $database);
        
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        
        // Taking all 3 values from the form data(input)
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        
        // Performing insert query execution
        // Here, specify the columns explicitly
        $sql = "INSERT INTO users (username, password, email) VALUES ('$user_name', '$password', '$email')";
        
        if(mysqli_query($conn, $sql)){
            echo "<h3>Thank you for Registering
            Our Team will respond shortly to you via E-Mail.</h3>"; 
            
        } else{
            echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
        }
        
        // Close connection
        mysqli_close($conn);
    }
    ?>
            </div>
        </div>
    </section>
        <!--Sign up section ends-->
    </body>
   