<!--version 1.1-->
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>examenportfolio Youri Boersma</title>
  <title>Youri Boersma</title>
  <meta name="description" content="Web designer and front-end developer">
  <link href='https://fonts.googleapis.com/css?family=Raleway:100,200,400,600' rel='stylesheet' type='text/css'>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.7.4/jquery.fullPage.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'><link rel="stylesheet" href="./style.css">
  <link rel="icon" href="./img/YB.jpg" type="image/jpg">


</head>
<body>
<!-- partial:index.partial.html -->
<body>
  <!-- navbar header -->
  <div class="nav-header">
    <div class="nav-brand">
      <img src="./img/YB.jpg">
    </div>
    <i class="fa fa-bars fa-3x"></i>
    <div class="header-links">
      <ul>
       <li data-menuanchor="fourthPage"><a href="#contact">CONTACT</a></li>
        <!--<li data-menuanchor="fourthPage"><a href="#cases">CASES</a></li>-->
        <li data-menuanchor="thirdPage"><a href="#portfolio">PORTFOLIO</a></li>
        <li data-menuanchor="secondPage"><a href="#about">ABOUT</a></li>
      </ul>
    </div>
  </div>
  <!-- end navbar header -->

  <!-- sidebar slider -->
  <div class="nav-screen">
    <i class="fa fa-times fa-3x"></i>
    <div class="nav-container">
      <div class="nav-links">
        <ul id='myMenu'>
          <li data-menuanchor="secondPage"><a href="#about">CONTACT</a></li>
          <li data-menuanchor="thirdPage"><a href="#portfolio">PORTFOLIO</a></li>
          <!--<li data-menuanchor="fourthPage"><a href="#cases">CASES</a></li>-->
          <li data-menuanchor="fourthPage"><a href="#contact">CASES</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- end navbar slider -->

  <!-- begin fullpage -->

  <div id="fullpage">

    <!-- begin section -->

    <div class="section aboutme" data-anchor="aboutme">
      <div class="opaque-bg animated fadeInDown">
        <h1 style="color:white">Youri<span style="color:#FF6363">/</span>Boersma</h1>
        <p><span id="holder"></span><span class="blinking-cursor">|</span></p>
      </div>
      <i id="moveDown" class="fa fa-chevron-down fa-3x bounce"></i>
    </div>
    <!-- end section -->

    <!-- begin section -->

    <div class="section" data-anchor="skills">
      <div class="content">
        <h1 class="wow fadeInDown" data-wow-delay="0.2s">ABOUT ME</h1>
        <p class="wow fadeInDown" data-wow-delay="0.2s">Hoi, ik ben Youri Boersma. Ik ben student bij het VISTA College Heerlen bij de opleiding Software development</p>

        <div class=" wow fadeInUp container-skillbar" data-wow-delay="0.2s">
          <div class="skillbar clearfix " data-percent="80%">
            <div class="skillbar-title" style="background: #DD1E2F;"><span>HTML</span></div>
            <div class="skillbar-bar" style="background: #DD1E2F;"></div>
            <div class="skill-bar-percent"></div>
          </div> <!-- End Skill Bar -->

          <div class="skillbar clearfix " data-percent="70%">
            <div class="skillbar-title" style="background: #EBB035;"><span>CSS</span></div>
            <div class="skillbar-bar" style="background: #EBB035;"></div>
            <div class="skill-bar-percent"></div>
          </div> <!-- End Skill Bar -->

          <div class="skillbar clearfix " data-percent="50%">
            <div class="skillbar-title" style="background: #218559;"><span>PHP</span></div>
            <div class="skillbar-bar" style="background: #218559;"></div>
            <div class="skill-bar-percent"></div>
          </div> <!-- End Skill Bar -->

          <div class="skillbar clearfix " data-percent="40%">
            <div class="skillbar-title" style="background: #6840D4;"><span>MySQL</span></div>
            <div class="skillbar-bar" style="background: #6840D4;"></div>
            <div class="skill-bar-percent"></div>
          </div> <!-- End Skill Bar -->

          <div class="skillbar clearfix " data-percent="20%">
            <div class="skillbar-title" style="background: #06A2CB;"><span>Java Script</span></div>
            <div class="skillbar-bar" style="background: #06A2CB;"></div>
            <div class="skill-bar-percent"></div>
          </div> <!-- End Skill Bar -->

          <div class="skillbar clearfix " data-percent="15%">
            <div class="skillbar-title" style="background: #AB4DD2;"><span>C#</span></div>
            <div class="skillbar-bar" style="background: #AB4DD2;"></div>
            <div class="skill-bar-percent"></div>
          </div> <!-- End Skill Bar -->
        </div>
      </div>
    </div>
    <!-- end section -->


    <!-- begin section -->

    <div class="section" data-anchor="projects">
      <div class="content-slide">


        <div class="slide">
          <h1>Portfolio</h1>
          <p>project: plastic recycle app</p>
          <button class="image-button" style="background-image: url('./img/plastic.png');"
                  onclick="window.location.href='pagina/plastic_recycle_app.php';"></button>
        </div>

        <div class="slide">
          <h1>Portfolio</h1>
          <p>project: APG VR metaverse </p>
          <button class="image-button" style="background-image: url('./img/APG_metaverse.png');"
                  onclick="window.location.href='pagina/APG_metaverse.php';"></button>
        </div>

        <div class="slide">
          <h1>Portfolio</h1>
          <p>project: portfolio</p>
          <button class="image-button" style="background-image: url('./img/portfolio_project.PNG');"
                  onclick="window.location.href='pagina/portfolio_pagina.php';"></button>
        </div>

        <div class="slide">
          <h1>Portfolio</h1>
          <p>project: fijnmechanische en creatieve technologie keuzedeel </p>
          <button class="image-button" style="background-image: url('./img/fijnmechanica.png');"
                  onclick="window.location.href='pagina/fijnmechanisch.php';"></button>
        </div>

        <div class="slide">
          <h1>Portfolio</h1>
          <p>project: pizzeria sopranos</p>
          <button class="image-button" style="background-image: url('./img/pizza_sopranos.png');"
                  onclick="window.location.href='pagina/pizzeria_sopranos.php';"></button>
        </div>

          <div class="slide">
              <h1>Portfolio</h1>
              <p>project: FIFA toernooi</p>
              <button class="image-button" style="background-image: url('./img/fifa_toernooi_frontpage.png');"
                      onclick="window.location.href='pagina/fifa_toernooi.php';"></button>
          </div>
      </div>
    </div>

    <!-- end section -->


    <!-- begin section -->

    <div class="section" data-anchor="contact">
      <h1>Contact Form</h1>
      <form id="myForm">
        <div class="half">
          <input type="text" id="name" placeholder="Your Name" required>
        </div>
        <div class="half">
          <input type="email" id="email" placeholder="Your Email" required>
        </div>
        <textarea id="message" placeholder="Your Message"></textarea>
        <input type="submit" id="input-submit" value="Send">
      </form>
      <div class="message" id="successMessage" style="display: none;">
        Your message has been sent successfully!
      </div>
    </div>

    <!-- begin section -->

    <div class="section fp-auto-height">
      <div class="footer">
        <p>CONNECT WITH ME</p>
        <div class="social-links">
          <span><a href="https://www.linkedin.com/in/youri-boersma-26b725266/" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a></span>
          <span><a target="_blank" href="" target="_blank"><i class="fa fa-youtube fa-2x"></i></a></span>
          <span><a href="https://www.instagram.com/youri.boersma/" target="_blank"><i class="fa fa-instagram fa-2x"></i></a></span>
          <span><a href=""><i class="fa fa-facebook fa-2x"></i></a></span>
        </div>
      </div>
    </div>
    <!-- end section -->

  </div>
  <!-- end fullpage -->
</body>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-2.1.1.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.7.4/jquery.fullPage.min.js'></script><script  src="./script.js"></script>

</body>
</html>
