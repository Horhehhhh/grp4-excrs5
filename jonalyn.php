<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="jonalyn.css">
    <title>Team Profile | Group 4</title>
</head>
<body>
    <nav class="home1" id="home1">
        <div class="nav-container">
            <div class="logo" data-aos="zoom-in" data-aos-duration="1500">
                Jonalyn<span>Gubatao</span>
            </div>
            <div class="links">

                <?php

                $Home="Home";

                ?>

                <?php

                $About="About";

                ?>

                <?php

                $Groupmates="Groupmates";

                ?>

                <?php

                echo "<div class='link' data-aos='fade-up' data-aos-duration='1500' data-aos-delay='100'><a href='http://localhost/new_project_grp4/index.php' class='active'>$Home</a></div>"

                ?>

                <?php

                echo "<div class='link' data-aos='fade-up' data-aos-duration='1500' data-aos-delay='200'><a href='#about'>$About</a></div>"

                ?>

                <?php

                echo "<div class='link' data-aos='fade-up' data-aos-duration='1500' data-aos-delay='200'><a href='groupmate1.html'>$Groupmates</a></div>"

                ?>

        </div>
        <i class="fa-solid fa-bars hamburg" onclick="hamburg()"></i>
        <div class="dropdown">
            <div class="links">

                <?php

                $Home="Home";
                $About="About";
                $Groupmates="Groupmates";

                ?>

                <?php
                echo "<a href='http://localhost/new_project_grp4/index.php'>$Home</a>"
                ?>

                <?php
                echo "<a href='#about'>$About</a>"
                ?>

                <?php
                echo "<a href='#groupmate1.html'>$Groupmates</a>"
                ?>

                <i class="fa-solid fa-xmark cancel" onclick="cancel()"></i>

            </div>
        </div>
    </nav>
    
    <section class="home" id="home">
        <div class="main-container">
            <div class="content">
                <h1 data-aos="fade-left" data-aos-duration="1500" data-aos-delay="700">Hey I'm <span>Jonalyn</span></h1>
                <div data-aos="fade-right" data-aos-duration="1500" data-aos-delay="900" class="typewriter">I'm a <span class="typewriter-text"></span><label for="">|</label></div>
                <p data-aos="flip-down" data-aos-duration="1500" data-aos-delay="1100">Excels as our Coder and UI/UX Designer, seamlessly blending technical expertice with a |
                    strong sense if design she crafts intuative user interfaces and ensures a smooth, engaging user experience, while her coding skills bring these designs to |
                    life with precision and efficiency</p>
                <div class="social-links">
                    <a data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1300"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="#" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1400"><i class="fa-brands fa-github"></i></a>
                    <a href="#" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1500"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1600"><i class="fa-brands fa-twitter"></i></a>
                </div>
                <div class="btn" data-aos="zoom-out" data-aos-duration="1500" data-aos-delay="1800">
                    <button>More about me</button>
                </div>
            </div>
            <div class="image" data-aos="zoom-in" data-aos-duration="3000">
                <img src="jona.jpg" alt="">
            </div>
        </div>
    </section>

    <section class="about" id="about">

        <div class="about-img" data-aos="zoom-in" data-aos-duration="3000">
            <img src="jona.jpg">
        </div>

        <div class="about-content">
            <h2>About <span>Me</span></h2>
            <p data-aos="flip-down" data-aos-duration="1500" data-aos-delay="1100">I'm IT Student 3rd Year Section M From Pamantasan ng Lungsod ng Muntinlupa(Plmun).</p>
            <p data-aos="flip-down" data-aos-duration="1500" data-aos-delay="1100">And I'm from Laguna.</p>
            <div class="btn" data-aos="zoom-out" data-aos-duration="1500" data-aos-delay="1800">
                <a href="#home1"><button>Read More</button></a>
            </div>
    </section>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({offset:0,});
    </script>
    <script src="jonalyn.js"></script>
   
    
</body>
</html>