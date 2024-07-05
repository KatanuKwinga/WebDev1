<!DOCTYPE html>
<html>
        <meta charset = "UTF-8"/>
        <title>MyWebsite</title>
       <!-- custom css file link -->
        <link rel="stylesheet" href="style.css">
        <!--Link to the page for icons used in the code-->
        <script src="https://kit.fontawesome.com/061a76efba.js"crossorigin="anonymous"></script>
    </head>
    <body>
        <!--Header section starts-->
        <header class="header">
            <!--Code for bakery logo and name in the navbar-->
            <i class="fa-solid fa-cake-candles fa-3x" style="color: #d3ad7f;"></i>
            <h1 class="name" style="color: #fff;text-align: left;">THE<span> LITTLE</span> BAKERY</h1>
            <nav class="navbar">
                <!--Code for the different links to other pages in the navbar-->
                <a href="index.html">Home</a>
                <a href="About.html">About Us</a>
                <a href="Menu.html">Menu</a>
                <a href="products.html">Our Products</a>
                <a href="Reviews.html">Reviews</a>
                <a href="contact.html">Contact Us</a>
                <div class="dropdown-container">
                    <!--Dropdown menu from the link 'More For You'-->
                    <a href="#" class="dropdown-toggle">More For You</a>
                    <ul class="dropdown">
                        <!--Icons and links to the different pages in the dropdown menu-->
                        <li><i class="fa-solid fa-right-to-bracket fa-2x" style="color: #fff; margin-left: 7px;"></i><a href="login.html">Log In</a></li>
                        <li><i class="fa-solid fa-user fa-2x" style="color: #fff; margin-left: 7px;"></i><a href="signup.html">Sign Up</a></li>
                        <li><i class="fa-solid fa-right-from-bracket fa-2x" style="color: #fff; margin-left: 7px;"></i><a href="#">Log Out</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--Header section ends-->
        <h1 class="heading">our<span>menu</span></h1>
        <!--Menu section starts-->
        <h1 class="heading" style="margin-top: 20px;">our<span> menu</span></h1><!--Title of the menu page-->
        
        <section class="menu" id="menu">
            <!--Code for each box containing an item being sold by the bakery and its price-->
            <div class="box-container">
               <!--Croissants-->
                <div class="box">
                    <img src="https://img.freepik.com/premium-photo/tasty-croissants-black-background-delicious
                    -breakfast-with-fresh-croissants-set-freshly-bake_183983-164.jpg"alt="" width="20%">
                    <h3>Croissants</h3>
                    <div class="price">Ksh230.00<span>Ksh280.00</span></div>
                    <a href="contact.html" class="btn">Order</a>
                </div>
                <!--Cookies-->
                <div class="box">
                    <img src="https://img.freepik.com/premium-photo/product-photo-group-cookies-with-chocolate-chips-isolated-background_951562-12437.jpg"alt="" width="20%">
                    <h3>Cookies</h3>
                    <div class="price">Ksh100.00<span>Ksh150.00</span></div>
                    <a href="contact.html" class="btn">Order</a>
                </div>
                <!--Cupcakes and Mufffins-->
                <div class="box">
                    <img src="https://cdn.create.vista.com/api/media/medium/197777334/stock-photo-sweet-muffins-chocolate-chips-dark-background?token="alt="" width="20%">
                    <h3>Cupcakes & Muffins</h3>
                    <div class="price">Ksh200.00<span>Ksh240.00</span></div>
                    <a href="contact.html" class="btn">Order</a>
                </div>
                <!--Cakes-->
                <div class="box">
                    <img src="https://t4.ftcdn.net/jpg/02/09/10/09/360_F_209100924_Lkyzflt0r34nuKo6ofyfoHXEeWhwpRc1.jpg"alt="" width="20%">
                    <h3>Cakes</h3>
                    <div class="price">Ksh1500.00<span>Ksh2100.00</span></div>
                    <a href="contact.html" class="btn">Order</a>
                </div>
                <!--Cinnamon Rolls-->
                <div class="box">
                    <img src="https://us.123rf.com/450wm/ripiopv/ripiopv2304/ripiopv230405205/202799047-close-up-shot-of-
                    cinnamon-roll-over-black-background-gourmet-pastry-concept-generative-ai.jpg?ver=6"alt="" width="20%">
                    <h3>Cinnamon Rolls</h3>
                    <div class="price">Ksh450.00<span>Ksh500.00</span></div>
                    <a href="contact.html" class="btn">Order</a>
                </div>
                <!--Coffee-->
                <div class="box">
                    <img src="https://img.freepik.com/premium-photo/tasty-espresso-served-cup-with-coffee-beans-around
                    -spoon-closeup-dark-background_1220-5749.jpg"alt="" width="20%">
                    <h3>Coffee</h3>
                    <div class="price">Ksh180.00<span>Ksh270.00</span></div>
                    <a href="contact.html" class="btn">Order</a>
                    <!--Each box has an order button linking it to the contact us page where customers can call
                     to place an order-->
                </div>
            </div>
        </section>
        <!--Menu section ends-->
    </body>
</html>