<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">

    <title>Portofolio</title>

    
</head>
<body>
    
    <!--header start-->
    <header>
        <!-- profile -->
        <div class="profile">
            <img src="images/fati.jpeg" alt="" srcset="" width="150px">
            <h1>Fatimah Wanudya Raras </h1>
            <div class="social-icons">
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="/"><i class="fa-solid fa-house"></i>Home</a></li>
                <li><a href="/about"><i class="fa-solid fa-user"></i>About me</a></li>
                <li><a href="/portofolio" class="active"><i class="fa-solid fa-briefcase"></i>Portofolio</a></li>
                <li><a href="/contact"><i class="fa-solid fa-envelope"></i>contact</a></li>
            </ul>
        </nav>
        <!--footer-->
        <div class="footer">
            <p>&copy; Copyright 2023 <br><p>Fatimah Wanudya Raras</p></p>
        </div>
    </header>
    <!-- mobile nav toggle -->
    <i class="fa-solid fa-bars" id="MenuBtn"></i>

    <!-- =============  header end ===========================-->


    <main>
        <!-- =========== portofolio =======-->
        <section id="portofolio">
            <h1 class="sub-heading">Portofolio</h1>
            <div class="divider"></div>

            <div class="port-row">

                <!--port item 1 -->
                <div class="port-item">
                    <div class="port-img">
                        <img src="images/figma.png" alt="">
                    </div>
                    <div class="port-info">
                        <h4>interface web</h4>
                        <p>design website menggunakan figma</p>
                        <a href="#"><i class="fa-sollid fa-up-right-from-square"></i></a>
                    </div>
                </div>

                <!--port item 2 -->
                <div class="port-item">
                    <div class="port-img">
                        <img src="images/web.jpeg" alt="">
                    </div>
                    <div class="port-info">
                        <h4>Web desain</h4>
                        <p>Using Html framework boostrapt</p>
                        <a href="#"><i class="fa-sollid fa-up-right-from-square"></i></a>
                    </div>
                </div>

                <!--port item 3 -->
                <div class="port-item">
                    <div class="port-img">
                        <img src="images/web4.png" alt="">
                    </div>
                    <div class="port-info">
                        <h4>web design</h4>
                        <p>using html & css </p>
                        <a href="#"><i class="fa-sollid fa-up-right-from-square"></i></a>
                    </div>
                </div>

            </div>
        </section>

        <!---portofilo end-->

    </main>
    

    <!--typing effect js file -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

    <!-- Main js file -->
    <script src="js/script.js"></script>
    <!--font awesome adn icon -->
    <script src="https://kit.fontawesome.com/e2fb034095.js" crossorigin="anonymous"></script>
</body>
</html>