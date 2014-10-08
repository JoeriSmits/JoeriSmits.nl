<?php session_start(); 
	ob_start();?>
<!DOCTYPE html>
<!--
////////////////////////////////////////////
Auteur: Joeri Smits
Versie: 3.0
Titel: JoeriSmits.nl - Index
Datum: 05/05/2014
Email: Contact@JoeriSmits.nl
////////////////////////////////////////////
-->

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>JoeriSmits.nl - Web development</title>
        <meta name="description" content="Find more information about Joeri Smits and his work.">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id="menu">
            <div class="menuFixedContent">
                <h2>Navigation <i class="fa fa-bars"></i></h2>
                <ul>
                    <li><a href="#slide1"><p>Home <i class="fa fa-home"></i></p></a></li>
                    <li><a href="#slide2"><p>About me <i class="fa fa-user"></i></p></a></li>
                    <li><a href="#slide3"><p>Portfolio <i class="fa fa-folder"></i></p></a></li>
                    <li><a href="#slide4"><p>Get in touch! <i class="fa fa-rocket"></i></p></a></li>

                    <li class="socialMedia"><a href="//www.facebook.com/JoeriSmits.nl" target="_blank"><p>Facebook <i class="fa fa-facebook-square"></i></p></a></li>
                    <li><a href="//nl.linkedin.com/pub/joeri-smits/87/672/655/" target="_blank"><p>LinkedIn <i class="fa fa-linkedin-square"></i></p></a></li>
                    <li><a href="skype:joeri55"><p>Skype <i class="fa fa-skype"></i></p></a></li>
					<li><a href="https://github.com/JoeriSmits" target="_blank"><p>Github <i class="fa fa-github"></i></p></a></li>
                </ul>
            </div>
        </div>

        <div id="slide1">
            <div class="container">
                <div class="textContainer">
                    <img src="img/slide1/logoWhite.png" alt="Logo JoeriSmits.nl" class="logoImg" draggable="false">
                    <p>Hey there, I'm Joeri Smits ...</p>
                    <p class="small">I study Computer Science</p>
                    <p class="smaller">Find more information about me on this website.</p>
                    <img src="img/slide1/arrowDown.png" alt="Arrow down" draggable="false">
                </div>
            </div>
        </div>

        <div id="slide2">
            <div class="container">
                <h1>About me</h1>
                <div class="line"></div>
                <div class="subContainer">
                    <h2>Read about my story and how I was eligible with web development</h2>
                    <div class="line3"></div>
                    <p>It all started when I was twelve years old. I became fascinated in websites and I wanted to make my own website. After searching on the Internet I registered at Zikle.
                    Zikle is a website where you can make your own simple website without knowledge of programming.<br /><br />When I was thirteen years old I learned more about basic
                    HTML and CSS statements. I downloaded HTML templates from the Internet and modified them with my own colors, images and text.
                    When time passed I learned more and more about HTML and CSS and at the time I was sixteen years old I started making my own HTML/CSS websites from scratch.<br /><br />
                    I am currently eighteen years old and I am working on my Bachelor in Computer Science.</p>

                    <div class="line2"></div>
                    <h2>Personal Information</h2>
                    <div class="line3"></div>
                    <table>
                        <tr>
                            <td>Name:</td><td>Joeri Smits</td>
                        </tr>
                        <tr>
                            <td>Address:</td><td>Beuningen, The Netherlands</td>
                        </tr>
                        <tr>
                            <td>University:</td><td>HAN University of Applied Sciences<td>
                        </tr>
                    </table>
                </div>
                <!-- Skill bars -->
                <div class="subContainer">
                    <h2 class="skills">Skills</h2>
                    <div class="line3"></div>

                        <p class="title">HTML5</p>

                        <p class="title">CSS3</p>

                        <p class="title">PHP</p>

                        <p class="title">SQL</p>

                        <p class="title">jQuery</p>

                        <p class="title">Photoshop CS6</p>

                        <p class="title">Illustrator CS6</p>

                        <p class="title">Java</p>

                        <p class="title">Bootstrap</p>

                        <p class="title">VBA</p>

                        <p class="title">Joomla</p>

                        <p class="title">MS Access</p>

                </div>
            </div>
        </div>

        <div id="slide3">
            <div class="container">
                <div class="imgContainer">
                    <a href="http://imtconsult.nl" target="_blank"><img src="img/slide3/opdrachtgevers/imtconsult.png" alt="IMTConsult.nl"></a>
                    <a href="http://tomkersten.nl" target="_blank"><img src="img/slide3/opdrachtgevers/tomkersten.png" alt="Tomkersten.nl"></a>
                    <a href="http://thuisstyle.com" target="_blank"><img src="img/slide3/opdrachtgevers/thuisstyle.png" alt="Thuisstyle.com"></a>
                    <a href="http://snoestel.nl" target="_blank"><img src="img/slide3/opdrachtgevers/snoestel.png" alt="Snoestel.nl"></a>
                    <a href="http://hemeltjelief23.nl" target="_blank"><img src="img/slide3/opdrachtgevers/hemeltjelief23.png" alt="Hemeltjelief23.nl"></a>
                </div>

            </div>
        </div>

        <div id="slide4">
            <div class="container">
                <div class="subContainer">
                    <h1>Get in touch!</h1>
                    <div class="line"></div>
                    <h2>Send me a message</h2>
                    <div class="line2"></div>
                    <?php require('snippets/contactForm.php'); ?>
                    <form action="index.php#slide4" method="post">
                        <input type="text" name="naam" placeholder="Name" value="<?php if(!empty($name)){ echo $name; } ?>">
                        <input type="text" name="email" placeholder="Email" value="<?php if(!empty($email)){ echo $email; } ?>">
                        <input type="text" name="subject" placeholder="Subject" value="<?php if(!empty($subject)){ echo $subject; } ?>">
                        <textarea name="bericht" class="fullWidth" placeholder="Message"><?php if(!empty($bericht)){ echo $bericht; } ?></textarea>
                        <input type="text" name="checksum" placeholder="Two plus two">
                        <input type="submit" class="fullWidth" value="Send">
                    </form>

                    <h2>Contact information</h2>
                    <div class="line2"></div>
                    <table>
                        <tr>
                            <td>Skype:</td><td>joeri55</td>
                        </tr>
                        <tr>
                            <td>LinkedIn:</td><td>/joeri-smits/87/672/655</td>
                        </tr>
                        <tr>
                            <td>Email:</td><td>contact@joerismits.nl<td>
                        </tr>
						<tr>
                            <td>Github:</td><td>JoeriSmits<td>
                        </tr>
                    </table>
                </div>
                <div id="map"></div>
            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="js/menu.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTRoHVQKxojkkjj0xf_KN8p6MGfb8omzo&sensor=false"></script>
        <script src="js/maps.js"></script>

        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-45990630-1');ga('send','pageview');
        </script>
    </body>
</html>
