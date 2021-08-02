<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stephanie Ranegar</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="site-container">
        <!--build navigation bar-->
        <nav>
            <h1>Stephanie Ranegar</h1>
            <div class="links">
                <div class="left-links">
                    <a href="index.html">Web Development | Design</a>
                    <a href="portfolio.html">Graphic Design</a>
                </div>
                <div class="right-links">
                    <a href="about.html">About</a>
                    <a class="active-font" href="contact.php">Contact Me</a>
                </div>
            </div>
        </nav>
        <hr>
        <br>
        <div class="content-wrapper">
            <!--Section 1-->
            <br>
            <br>
            <br>

            <div class="contact-page">
                <form class="contact-form" action="contactform.php" method="post" enctype="text/plain">
                    <!-- Put into a div to seperate left and right form boxes -->
                    <div class="testing">
                        <label for="fname"></label>
                        <input type="text" id="fname" name="fname" style="width: 49.5%;" placeholder="First Name*">

                        <label for="lname"></label>
                        <input type="text" id="lname" name="lname" style="width: 49.5%;" placeholder="Last Name*">
                    </div>
                    <!-- Right side of boxes -->
                    <div class="it-works">
                        <label for="email"></label>
                        <input type="text" id="email" name="email" style="width: 49.5%;" placeholder="Email*">

                        <label for="number"></label>
                        <input type="text" id="number" name="number" style="width: 49.5%;"
                            placeholder="Phone Number*">
                    </div>

                    <label for="subject"></label>
                    <input type="text" id="subject" name="subject" style="width: 100%;" placeholder="Subject*">

                    <label for="message"></label>
                    <textarea id="message" name="message" style="width: 100%;" placeholder="Message*"></textarea>

                    <button class= "submit" type="submit" name= "submit" >Submit</button>
                </form>

            </div>
            <br>
            <br>
            <br>
            <br>
            <hr>
            <!--footer-->
            <br>
            <footer>
                <p>Stephanie Ranegar © 2021</p>
                <p>stephanie.ranegar@gmail.com</p>
                <p>(219)241-1141</p>
            </footer>
            <br>
            <br>
        </div>
    </div>
    <script src="js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.7.3/p5.min.js"></script>

</body>

</html>