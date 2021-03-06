<!DOCTYPE HTML>
<?php
$server_root = "/nnhs-appdev/app/";
session_start();
$_SESSION["logged_in"] = false;
?>
<html>
    <head>
    <title>NNHS Peer Tutor App</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="NNHS Peer Tutor App for scheduling and maintaining Lit Center Peer Tutor appointments" content="" />
    <meta name="NNHS Peer Tutor Schedule Lit Center Help" content="" />
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.dropotron.min.js"></script>
        <script src="js/jquery.scrollgress.min.js"></script>
        <script src="js/skel.min.js"></script>
        <script src="js/skel-layers.min.js"></script>
        <script src="js/init.js"></script>
        <noscript>
            <link rel="stylesheet" href="css/skel.css" />
            <link rel="stylesheet" href="css/style.css" />
            <link rel="stylesheet" href="css/style-wide.css" />
        </noscript>
        <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
    </head>
    <?php
    if(isset($_GET["cookies"])){
        if($_GET["cookies"] == "false"){
            echo("<p>Note: Browser cookies must be enabled to use this website</p>");
        }
    }
    ?>
    <body class="landing">
        <!-- Header -->
        <!-- Generic Nav for possible future use
            <header id="header" class="alt">
                <h1><a href="index.html">NNHS Tutoring App</a> Created by App Development Club</h1>
                <nav id="nav">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>
                            <a href="" class="icon fa-angle-down">Layouts</a>
                            <ul>
                                <li><a href="generic.html">Generic</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="elements.html">Elements</a></li>
                                <li>
                                    <a href="">Submenu</a>
                                    <ul>
                                        <li><a href="#">Option One</a></li>
                                        <li><a href="#">Option Two</a></li>
                                        <li><a href="#">Option Three</a></li>
                                        <li><a href="#">Option Four</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#" class="button">Sign Up</a></li>
                    </ul>
                </nav>

            </header>
            -->
        <!-- Banner -->
            <section id="banner">
                <img src="images/logo.jpg" style="width:100px ; border-radius:10px">
                <h2>NNHS Tutor App</h2>
                <p>Find and Schedule NNHS Lit Center Peer Tutors</p>
                <ul class="actions">
                    <li><a href="#cta" class="button special">Sign In</a></li>
                    <li><a href="#main" class="button">Learn More</a></li>
                </ul>
            </section>

        <!-- Main -->
            <section id="main" class="container">

                <section class="box special">
                    <header class="major">
                        <h2>Introducing the new way to get help
                        <br />
                        from NNHS Peer Tutors</h2>
                        <p>Find and Schedule a peer tutoring session based on time availability and subject matter</p>
                    </header>
                    <!-- Possible image placement for breakup of content
                    <span class="image featured"><img src="images/pic01.jpg" alt="" /></span>
                    -->
                </section>

                <section class="box special features">
                    <div class="features-row">
                        <section>
                            <span class="icon major fa-bolt accent2"></span>
                            <h3>Save Time</h3>
                            <p>Save time in your day and schedule a tutoring session directly from your computer or mobile device. No more paper forms or going up to the Lit Center to schedule help!</p>
                        </section>
                        <section>
                            <span class="icon major fa-search accent4"></span>
                            <h3>Browse Tutors</h3>
                            <p>Browse through available tutors to find a perfect match based on time availability, subject knowledge, or tutor profile. </p>

                        </section>
                    </div>
                    <div class="features-row">
                        <section>
                            <span class="icon major fa-line-chart accent3"></span>
                            <h3>Improve Scores</h3>
                            <p>Improve your scores by meeting regularly with a peer tutor, or scheduling a one time meeting before that big test!</p>
                        </section>
                        <section>
                            <span class="icon major fa-lock accent5"></span>
                            <h3>Teachers</h3>
                            <p>Teachers have the ability to find and schedule a tutoring session for one of their students from their teacher login, making helping struggling students an easier process.</p>
                        </section>
                    </div>
                </section>


            </section>

        <!-- CTA -->
            <section id="cta">

                <h2>Sign In</h2>
                <p>Sign in using your district provided username and password.</p>
                <p>If you cannot sign in, please see the CAI lab!</p>

                <form id="Signin" action="<?php echo $server_root ?>Login.php" method="post">
                    <div class="row uniform 50%">

                            <input type="text" name="username" id="username" placeholder="Username" value="" style="margin:5px"/>

                            <input type="password" name="password" id="password" placeholder="Password" value="" style="margin:5px" />

                            <input type="submit" value="Sign In" id="submit" class="fit" style="margin:5px ; padding:0px"/>

                    </div>
                </form>

            </section>

        <!-- Footer -->
            <footer id="footer">
                <h1>For more information about the App Development Club follow or contact us below</h1>
                <ul class="icons">
                    <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
                    <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                    <li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
                </ul>
                <ul class="copyright">
                    <li>&copy; NNHS App Development Club. All rights reserved.</li><li>Contact Us</li>
                </ul>
            </footer>

    </body>
</html>
