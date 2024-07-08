
    <?php include_once("Templates/head.php"); ?>
    <body>
        <!--Header section starts-->    	
        <?php include_once("Templates/nav.php"); ?>
        <!--Header section ends-->
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            //database connection  details
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "customers";

            $conn = mysqli_connect($servername, $username, $password, $database);

            //Check connection
            if($conn === false){
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }

            // Taking input values from the form
            $user_name = $_POST['username'];
            $password = $_POST['password'];

            //Check if user exists in the database
            $sql = "SELECT * FROM users WHERE username = '$user_name' AND password = '$password'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                echo "<h3>Welcome, $user_name!<h3>";  
            }else {
                echo "<h3>Not a verfied customer</h3>";
            }

            //Close connectiom
            mysqli_close($conn);
        }
        ?>
        <!--Log in section starts-->
        <section class="login" id="login">
        <div class="loginBx">
            <!--Picture on login page-->
            <div class="imgBx">
            <img src="https://img.freepik.com/premium-photo/pastry-bakery-desserts-cakes-cookies_136375-943.jpg">
            </div>
            <div class="contentBx">
                <h1 class="hlogin">LOG<span> IN</span></h1>
                <form class="formBx">
                    <!--Input locations for Username and Password-->
                    <div class="inputBx">
                        <i class="fa-solid fa-user fa-2x" style="color:#d3ad7f; margin-right: 5px;"></i>
                        <span style="color: #fff;">Username</span>
                        <br>
                        <input type="text" name="" placeholder="Username">
                       
                    </div>
                    <div class="inputBx">
                        <i class="fa-solid fa-lock fa-2x" style="color: #d3ad7f; margin-right: 5px;"></i>
                        <span style="color: #fff;">Password</span>
                        <br>
                        <input type="password" name="" placeholder="password">
            
                    </div>
                    <!--Checkbox for if the user wants their username and password remembered-->
                    <div class="remember">
                        <label style="color: #fff; font-size: 13px; margin-bottom: 20px;"><input type="checkbox" name="" style="margin-right: 5px;">Remember me</label>
                        <br>
                    </div>
                    <div class="inputBx">
                        <input type="submit" value="Sign in" name="">
                    </div>
                    <div class="inputBx">
                        <!--Link to sign up page if one doesn't have an account-->
                        <p style="color: #fff; font-size: 13px;">Don't have an account? <a href="signup.php">Sign Up</a></p>
                    </div>
                </form>

            </div>
        </div>
    </section>
        <!--Log in section ends-->
    </body>