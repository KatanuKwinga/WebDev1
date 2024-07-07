<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8"/>
        <title>MyWebsite</title>
       <!-- custom css file link -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="index.css">
        <!--Link to the page for icons used in the code-->
        <script src="https://kit.fontawesome.com/061a76efba.js"crossorigin="anonymous"></script>
    </head>
    <body>
        <!--Header section starts-->
        <?php include_once("Templates/nav.php"); ?>
        <!--Header section ends-->
        <!--Home section starts-->
        <section class="home" id="home">
            <div class="content">
                <!--Home Page title and content-->
                <h3>♡baked for you♡</h3>
                <p>The Little bakery will provide a range of delicious baked
                    goods</p><p>right to your doorstep</p>
                    <br><br><br><br>
                <!--Button linking home page to menu page-->
                <a href="Menu.php" class="btn">Order now</a>    
            </div>
        </section>
        <!--Home section ends-->

    </body>
</html>