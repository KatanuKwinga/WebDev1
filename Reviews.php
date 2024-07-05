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
        <h1 class="heading">customer<span> reviews</span></h1>

        <!--Reviews section starts-->
        <section class="review" id="review">
            <h1 class="heading">customer<span> reviews</span></h1>
            <!--Each review is within its own box with the customer's name, rating and photo-->
            <div class="box-container">
                <!--Customer 1 review-->
                <div class="box">
                    <i class="fa-solid fa-quote-left fa-4x" style="color: #d3ad7f;"></i>
                    <p>I love the Little Bakery so much.Absolutely delicious and fresh food
                        straight from the oven along with beautiful service from their lovely staff.
                        Would highly recommend.
                    </p>
                    <img src="https://thumbs.dreamstime.com/b/young-handsome-african-man-kenya-against-green-background-studio-shot-young-handsome-african-man-kenya-against-green-201956646.jpg" class="user" alt="">
                    <h3>Steve Mutisya</h3>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                </div>
                <!--Customer 2 review-->
                <div class="box">
                    <i class="fa-solid fa-quote-left fa-4x" style="color: #d3ad7f;"></i>
                    <p>I remember growing up with the little bakery from the time I was a child.
                        It's cakes hold many good memories that I shared with many different people.
                        I would always recommend it's products to anyone looking for a new local bakery. 
                    </p>
                    <img src="https://www.politico.com/dims4/default/e89ffea/2147483647/strip/true/crop/1160x773+0+0/resize/630x420!/quality/90/?url=https%3A%2F%2Fstatic.politico.com%2F53%2F14%2F12cfcb294ee38edc9ab5b8fdea79%2Fbotd-young.jpg" class="user" alt="">
                    <h3>Esther Kingóri</h3>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
                <!--Customer 3 review-->
                <div class="box">
                    <i class="fa-solid fa-quote-left fa-4x" style="color: #d3ad7f;"></i>
                    <p>We LOVE the little bakery. Tastes like home in every delicious bite.
                        Deliveries are prompt and goods are still very fresh when delivered.
                    </p>
                    <img src="https://i.pinimg.com/564x/5b/dc/6d/5bdc6d0bad825d6a13264d552c894c8f.jpg" class="user" alt="">
                    <h3>Daisy and Mercy Jeprop</h3>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                </div>
                
            </div>
        </section>
        <!--Reviews section ends-->
    </body>