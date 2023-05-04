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
                <li><a href="/" ><i class="fa-solid fa-house"></i>Home</a></li>
                <li><a href="/about"><i class="fa-solid fa-user"></i>About me</a></li>
                <li><a href="/portofolio"><i class="fa-solid fa-briefcase"></i>Portofolio</a></li>
                <li><a href="/contact" class="active" ><i class="fa-solid fa-envelope"></i>contact</a></li>
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

        

        <!-- == contact section start === -->

        <section id="contact">

            <h1 class="sub-heading">Contact Me</h1>
            <div class="divider"></div>
            
            <div class="contact-row">
                <!--left col -->
                <div class="contact-left">

                    <!-- email box -->
                    <div class="icon-box">
                        <div class="icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>    
                        <div class="info">
                            <h4>Email</h4>
                            <p>fatimahwanudyararas@gmail.com</p>
                        </div>
                    </div>
                

                <!-- call box -->
                <div class="icon-box"> 
                    <div class="icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="info">
                        <h4> call : </h4>
                        <p>+62 8312821259727</p>
                    </div>
                </div>

                <!-- location box -->
                <div class="icon-box"> 
                    <div class="icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="info">
                        <h4>Location : </h4>
                        <p>Muara Enim, Sumatera Selatan</p>
                    </div>
                </div>
                </div>
                <!--right col -->
                <div class="contact-right">
                    <form id="contact-form" action="">
                        <input type="text" name="name" id="name" placeholder="Nama">
                        <input class="" type="email" name="email" id="email" placeholder="Email">
                        <input type="text" name="subject" id="subject" placeholder="subject">
                        <textarea name="msg" id="msg" cols="9" rows="9" placeholder="Pesan"></textarea>
                        <button class="btn" type="submit" value="">Kirim Pesan</button>
                        <p class="berhasil">Pesan berhasil terkirim </p>
                    </form>
                    
                </div>
            </div>


        </section>

        <!-- == contact section start === -->

    </main>
    

    <!--typing effect js file -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

    <!-- Main js file -->
    <script src="js/script.js"></script>
    <!--font awesome adn icon -->
    <script src="https://kit.fontawesome.com/e2fb034095.js" crossorigin="anonymous"></script>
</body>
</html>