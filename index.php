<!doctype html>
<html lang="en-US">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!--BootNavbar CSS-->
    <link rel="stylesheet" href="css/bootnavbar.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!--Medeia Scrren-->
    <link rel="stylesheet" media="screen" href="assets/css/responsive.css">
    <!--Aos animation-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--custom css-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--Aos Animation-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--Font style-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=League+Gothic&family=Sintony:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Sintony:wght@400;700&display=swap" rel="stylesheet">
    <!--Animate CSS-->
    <link rel="stylesheet" href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>shinestarz</title>
  </head>
  <style>
    #padding-1
    {
        padding-top:15px;
    }
    .line-3
    {
        background: #ff5b00;
        width: 163px;
        height: 3px;
        text-align: center;
        display: flex;
        position: relative;
        left:0%;
    }
    .line-4
    {
        background: #ff5b00;
        width: 50px;
        height: 8px;
        text-align: center;
        display: flex;
        position: relative;
        left: 7%;
        top: -6px;
    }
    .button--1
    {
        
        background: #ff5b00;
        color: white;
        font-weight: 500;
        text-decoration: none;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-right: 10px;
        padding-left: 10px;
        display: flex;
        justify-content: center;
        width: 34%;
    }
    .button--1:hover
    {
       
        background: #353d50;
        color: white;
        font-weight: 500;
        text-decoration: none;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-right: 10px;
        padding-left: 10px;
        display: flex;
        justify-content: center;
        width: 34%;
    }
    #model-1
    {
        padding-bottom: 50px;
    }
    .img-1
    {
        width: 122%;
        height: auto;
        position: relative;
        left: -83px;
    }
    #services
    {
        margin-top:60px;
        background-color: #151515;
        background-image:url("assets/img/ppstern2.jpg");
        background-repeat: repeat;
        padding: 0px 60px 60px 60px;
    }
    .icon-1
    {
        background: #ff5b00;
        padding-top: 10px;
        padding-left: 15px;
        padding-right: 15px;
        padding-bottom: 10px;
        border-radius: 100%;
        transition: transform .5s ease-out ; 
    }
    .icon-1:hover {
        padding-top: 10px;
        padding-left: 15px;
        padding-right: 15px;
        padding-bottom: 10px;
        border-radius: 100%;
        transform: rotate(360deg);
    }
    #icon--2
    {
        font-size:28px;
    }
    #price
    {
        font-size:18px;
        font-weight:600;
    }
    .logo
    {
        margin-top: -62px;
    }
    #talent
    {
        background: #ebebeb;
        padding-bottom: 5%;
    }
    #talent-1
    {
        padding-top: 30px;
        font-size: 15px;
        line-height: 30px;
    }
/* Scroller styling */
.scroller 
{
  height: 1.2em;
  line-height: 1.2em;
  position: relative;
  overflow: hidden;
  font-size: 52px;
}
.scroller > span {
  position: absolute;
  top: 0;
  animation: slide 5s infinite;
  font-weight: bold;
  
}
@keyframes slide {
  0% {
    top: 0;
  }
  25% {
    top: -1.2em;
  }
  50% {
    top: -2.4em;
  }
  75% {
    top: -3.6em;
  }
  100%{
    top: -3.6em;
  }
}

  </style>
  <body>
   <?php include_once "header.php";?>
   <?php include_once "slider.php"; ?>
   <section id="talent">
       <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center pt-5">
                        <h3 style="font-weight: 800;" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500" data-aos-once="true">FEATURED TALENTS</h3>
                        <div class="line-1"></div>
                        <div class="line-2"></div>
                        <p class="text-center"  style="padding-top:30px;" id="talent-1">
                           The Featured talents can help you find the right talented one’s that you need. Also, the following features helps to identify and attract new talent, and gain insight on competitors. Talent implies recognizing person’s inherent skills, traits, personality, realising and guiding untapped potential in people and offering him a suitable role.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="column" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500" data-aos-once="true">
                        <div class="card">
                            <div class="content">
                            <div class="absoloute-1">
                                <h6 class="text-white">&nbsp;</h6>
                            </div>
                            <div class="absoloute-2">
                                <span class="text-white" style="font-size:12px;">&nbsp;</span>
                            </div>
                            <div class="absoloute-3">
                                    <h6 class="text-white">&nbsp;</h6>
                            </div>
                            <div class="front">
                                <img class="profile" width="100%" src="assets/img/images/images1.jpg" alt="">
                            </div>
                            <div class="back from-left">
                                <h4>&nbsp;</h4>
                                <p class="des">&nbsp;</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="column" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true">
                        <div class="card">
                            <div class="content">
                            <div class="absoloute-1">
                                <h6 class="text-white">&nbsp;</h6>
                            </div>
                            <div class="absoloute-2">
                                <span class="text-white" style="font-size:12px;">&nbsp;</span>
                            </div>
                            <div class="absoloute-3">
                                    <h6 class="text-white">&nbsp;</h6>
                            </div>
                            <div class="front">
                                <img class="profile" width="100%" src="assets/img/images/images2.jpg" alt="">
                            </div>
                            <div class="back from-left">
                                <h2>&nbsp;</h2>
                                <p class="des">&nbsp;</p>
                                <!-- <ul class="social-icon">
                                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href=""><i class="fab fa-instagram"></i></a></li>
                                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                </ul> -->
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="column" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500" data-aos-once="true">
                        <div class="card">
                            <div class="content">
                            <div class="absoloute-1">
                                <h6 class="text-white">&nbsp;</h6>
                            </div>
                            <div class="absoloute-2">
                                <span class="text-white" style="font-size:12px;">&nbsp;</span>
                            </div>
                            <div class="absoloute-3">
                                    <h6 class="text-white">&nbsp;</h6>
                            </div>
                            <div class="front">
                                <img class="profile" width="100%" src="assets/img/images/images3.jpg" alt="">
                               
                            </div>
                            <div class="back from-left">
                                <h2>&nbsp;</h2>
                                <p class="des">&nbsp;</p>
                                <!-- <ul class="social-icon">
                                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href=""><i class="fab fa-instagram"></i></a></li>
                                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                </ul> -->
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
   </section>
   <section id="model-1">
       <div class="container">
            <div class="row">
                <div class="col-md-4">
                   <div id="dream-startz">
                        <a class="navbar-brand" href="index.php" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true"> 
                            <img  id="logo-fontfamilly"  src="assets/img/logo.jpg" alt="logo" class="logo">
                        </a>
                   </div>
                </div>
                <div class="col-md-8">
                    <div class=" pt-5" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500" data-aos-once="true">
                        <h3 style="font-weight: 800;">
                          DO YOU WANT TO BE A 
                        <div class="scroller">
                            <span style="font-weight: 800;">
                            ACTRESS<br/>
                            TECHNICIANS<br/>
                            OLDAGE<br/>
                            MODELS<br/>
                            </span>
                        </div>
                        </h3>
                        <div class="line-3"></div>
                        <div class="line-4"></div>
                        <div>
                            <a href="#" class="button--1" data-toggle="modal" data-target="#exampleModalCenter" >FREE REGISTER</a>
                        </div>
                    </div>
                </div>
            </div>
       </div>
   </section>
   <section id="next-addition">
       <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center pt-5" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500" data-aos-once="true">
                        <h3 style="font-weight: 800;" class="text-white">NEXT ADDITION</h3>
                        <div class="line-1"></div>
                        <marquee width="30%" direction="right" height="50px"><h4 class="text-center " style="padding-top:0px;color:white;">Chennai,Coimbatore,Trichy,Salem,Tirunelveli,Erode,Madurai,Ramanathapuram,Krishnagiri,Nagercoil</h4></marquee>
                    </div>
                </div>
            </div>

            <div class="row ">
                <div class="col-md-12">
                    <div class="d-flex justify-content-center ">
                        <h1 style="color:#ff5b00;"><span class="text-white">2023</span> Next Addition  </h1>
                    </div>
                    <div class="d-flex justify-content-center mt-2">
                        <h3 class="text-white">First 250 <span style="color:#ff5b00;" class="font-weight-bold">Register Only</span></h3>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="d-flex justify-content-center mt-3">
                        <a href="#" style="text-decoration:none;" class="bg-success p-2 text-white font-weight-bold" data-toggle="modal" data-target="#exampleModalCenter" >FREE REGISTER</a>
                    </div>
                </div>
            </div>
       </div>
   </section>
   <section>
       <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="pt-5" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500" data-aos-once="true">
                        <h3 style="font-weight: 800;" class="text-center">TOP RATED MODELS</h3>
                        <div class="line-1"></div>
                        <div class="line-2"></div>
                        <p class="" style="padding-top:30px;" id="talent-1">For a top rated model, distinct features are needed to pick a right talent. This highlights a few celebrity models that are more known for other careers like acting, singing or politics. Explore to discover their strengths and interests. While considering hiring, they need to identify potential talent and groom them. The most important aspects of talent management are talent acquisition and talent retention.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="column" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true">
                        <div class="card">
                            <div class="content">
                            <div class="absoloute-1">
                                <h6 class="text-white">&nbsp;</h6>
                            </div>
                            <div class="absoloute-2">
                                <span class="text-white" style="font-size:12px;">&nbsp;</span>
                            </div>
                            <div class="absoloute-3">
                                    <h6 class="text-white">&nbsp;</h6>
                            </div>
                            <div class="front">
                                <img class="profile" style="width:100%;height:auto;" src="assets/img/images/model-4.jpg" alt="">
                            </div>
                            <div class="back from-left">
                                <h4>&nbsp;</h4>
                                <p class="des">&nbsp;</p>
                                <!-- <ul class="social-icon">
                                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href=""><i class="fab fa-instagram"></i></a></li>
                                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                </ul> -->
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="column" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500" data-aos-once="true">
                        <div class="card">
                            <div class="content">
                            <div class="absoloute-1">
                                <h6 class="text-white">&nbsp;</h6>
                            </div>
                            <div class="absoloute-2">
                                <span class="text-white" style="font-size:12px;">&nbsp;</span>
                            </div>
                            <div class="absoloute-3">
                                    <h6 class="text-white">&nbsp;</h6>
                            </div>
                            <div class="front">
                                <img class="profile" style="width:100%;height:auto;" src="assets/img/images/model-5.jpg" alt="">
                            </div>
                            <div class="back from-left">
                                <h4>&nbsp;</h4>
                                <p class="des">&nbsp;</p>
                                <!-- <ul class="social-icon">
                                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href=""><i class="fab fa-instagram"></i></a></li>
                                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                </ul> -->
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="column" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true">
                        <div class="card">
                            <div class="content">
                            <div class="absoloute-1">
                                <h6 class="text-white">&nbsp;</h6>
                            </div>
                            <div class="absoloute-2">
                                <span class="text-white" style="font-size:12px;">&nbsp;</span>
                            </div>
                            <div class="absoloute-3">
                                    <h6 class="text-white">&nbsp;</h6>
                            </div>
                            <div class="front">
                                <img class="profile" style="width:100%;height:auto;" src="assets/img/images/model-6.jpg" alt="">
                               
                            </div>
                            <div class="back from-left">
                                <h4>&nbsp;</h4>
                                <p class="des">&nbsp;</p>
                                <!-- <ul class="social-icon">
                                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href=""><i class="fab fa-instagram"></i></a></li>
                                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                </ul> -->
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="column" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500" data-aos-once="true">
                        <div class="card">
                            <div class="content">
                            <div class="absoloute-1">
                                <h6 class="text-white">&nbsp;</h6>
                            </div>
                            <div class="absoloute-2">
                                <span class="text-white" style="font-size:12px;">&nbsp;</span>
                            </div>
                            <div class="absoloute-3">
                                    <h6 class="text-white">&nbsp;</h6>
                            </div>
                            <div class="front">
                                <img class="profile" style="width:100%;height:auto;" src="assets/img/images/model-7.jpg" alt="">
                            </div>
                            <div class="back from-left">
                                <h4>&nbsp;</h4>
                                <p class="des">&nbsp;</p>
                                <!-- <ul class="social-icon">
                                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href=""><i class="fab fa-instagram"></i></a></li>
                                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                </ul> -->
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
   </section>
   <section id="services">
       <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="pt-2"    >
                        <h3 class="text-center" style="font-weight:800;padding-top:30px;color:white;" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500" data-aos-once="true">DREAMSTARZ BEST SERVICES</h3>
                        <div class="line-1"></div>
                        <div class="line-2"></div>
                        <p class="" style="color:white;padding-top:30px;" >
                            From sources and facts, Modeling agencies scout for new talent, counsel models to increase their marketability and promote models to clients. 
                            Modeling agencies have the appeal of glamour – it’s easy to picture flashing cameras, elegant clothing and beautiful models prowling a sleek catwalk. 
                            Therefore, Modeling helps to satisfy the needs of many different kinds of clients, including print, fashion shows, television and live demonstrations. 
                            Media sources reveal that the market is projected to grow fast in the near future.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row" style="padding-top:50px;">
                <div class="col-md-3" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true">
                    <div class="d-flex justify-content-center">
                        <div class="icon-1" id="padding-1">
                            <i class="fa fa-male text-white" id="icon--2" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center" id="padding-1">
                        <h6 class="text-white font-weight-bold">BEST MODEL</h6>
                    </div>                    
                </div>
                <div class="col-md-3" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500" data-aos-once="true">
                    <div class="d-flex justify-content-center">
                        <div class="icon-1" id="padding-1">
                            <i class="fa fa-camera  text-white" aria-hidden="true" id="icon--2"></i>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center" id="padding-1">
                        <h6 class="text-white font-weight-bold">PROFESSIONAL PHOTO SHOTS</h6>
                    </div> 
                </div>
                <div class="col-md-3" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500" data-aos-once="true">
                    <div class="d-flex justify-content-center">
                        <div class="icon-1" id="padding-1">
                            <i class="fa fa-camera text-white" id="icon--2" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center" id="padding-1">
                        <h6 class="text-white font-weight-bold">SPECIAL EVENTS</h6>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500" data-aos-once="true">
                    <div class="d-flex justify-content-center">
                        <div class="icon-1" id="padding-1">
                            <i class="fa fa-diamond text-white" id="icon--2" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center" id="padding-1">
                        <h6 class="text-white font-weight-bold">FASHION SHOWS</h6>
                    </div>
                </div>
            </div>
       </div>
   </section>
   <section id="clients">
       <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="pt-5">
                        <h3 class="text-center" style="font-weight: 800;" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true">OUR  TECHNICIANS</h3>
                        <div class="line-1"></div>
                        <div class="line-2"></div>
                        <p id="talent-1" class="" style="padding-top:30px;">
                           Media Technician oversees the use of various media equipment, including video, film, photographic and audio equipment. 
                           They may oversee or operate highly technical or complex equipment, such as multi-media and computer projection equipment. 
                           Each day, a technician spends time tackling different tasks, depending on the issue, such as analyzing problems, running tests, and repairing equipment. 
                           Technicians play an essential role across various industries, providing necessary labor to keep the public safe, entertained, connected, and healthy.
                           A technician should possess self-discipline, problem-solving skills, attention to detail, great communication skills, and a passion for technology.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row" style="padding-top:50px;">
                <div class="col-md-3" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500" data-aos-once="true">
                    <img src="assets/img/technition/camera.jpg" class="img-fluid" id="img-4">
                    <div class="tech">
                        <h6 class="text-center font--5" >Photography</h6>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true">
                    <img src="assets/img/technition/lighting.jpg" class="img-fluid" id="img-4">
                    <div class="tech">
                        <h6 class="text-center font--5">Lighting Effect</h6>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="500" data-aos-once="true">
                    <img src="assets/img/technition/script Writer.png" class="img-fluid" id="img-4">
                    <div class="tech">
                        <h6 class="text-center font--5">Script Writer</h6>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true">
                    <img src="assets/img/technition/video.jpg" class="img-fluid" id="img-4">
                    <div class="tech">
                        <h6 class="text-center font--5">Camera Man</h6>
                    </div>
                </div>
            </div>
       </div>
   </section>
   <section id="advertisement">
       <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center pt-2" id="ad">
                        <h3 style="font-weight:800;padding-top:30px;color:white;" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true">DREAMSTARZ ADVERTISEMENT</h3>
                        <div class="line-1"></div>
                        <div class="line-2"></div>
                    </div>
                </div>
            </div>

            <div class="row" style="padding-top:50px;">
                <div class="col-md-3" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true">
                    <div class="d-flex justify-content-center">
                        <div class="icon-1" id="padding-1">
                            <i class="fa fa-male text-white" id="icon--2" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center" id="padding-1">
                        <h6 class="text-white font-weight-bold">Directories</h6>
                    </div>   
                </div>
                <div class="col-md-3" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500" data-aos-once="true">
                    <div class="d-flex justify-content-center">
                        <div class="icon-1" id="padding-1">
                            <i class="fa fa-camera  text-white" aria-hidden="true" id="icon--2"></i>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center" id="padding-1">
                        <h6 class="text-white font-weight-bold">Posters Desgins</h6>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true">
                    <div class="d-flex justify-content-center">
                        <div class="icon-1" id="padding-1">
                            <i class="fa fa-camera text-white" id="icon--2" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center" id="padding-1">
                        <h6 class="text-white font-weight-bold">Advertisement Content</h6>
                    </div>   
                </div>
                <div class="col-md-3" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500" data-aos-once="true">
                    <div class="d-flex justify-content-center">
                        <div class="icon-1" id="padding-1">
                            <i class="fa fa-diamond text-white" id="icon--2" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center" id="padding-1">
                        <h6 class="text-white font-weight-bold">Advertisement Artist</h6>
                    </div>
                </div>
            </div>
       </div>
   </section>
   <?php include_once "footer.php"; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--jQuery-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!--Popper Js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!--Bootstrap 4 Js-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   <!-- SLIDER REVOLUTION -->
<!--BootNavbar Js-->
<script src="js/bootnavbar.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script>
    $(function(){
    $("#bootnavbar").bootnavbar();
    });
</script>
<script>
  AOS.init();
</script>
<script>
    // vars
'use strict'
var	testim = document.getElementById("testim"),
		testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
    testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
    testimLeftArrow = document.getElementById("left-arrow"),
    testimRightArrow = document.getElementById("right-arrow"),
    testimSpeed = 4500,
    currentSlide = 0,
    currentActive = 0,
    testimTimer,
		touchStartPos,
		touchEndPos,
		touchPosDiff,
		ignoreTouch = 30;
;

window.onload = function() {

    // Testim Script
    function playSlide(slide) {
        for (var k = 0; k < testimDots.length; k++) {
            testimContent[k].classList.remove("active");
            testimContent[k].classList.remove("inactive");
            testimDots[k].classList.remove("active");
        }

        if (slide < 0) {
            slide = currentSlide = testimContent.length-1;
        }

        if (slide > testimContent.length - 1) {
            slide = currentSlide = 0;
        }

        if (currentActive != currentSlide) {
            testimContent[currentActive].classList.add("inactive");            
        }
        testimContent[slide].classList.add("active");
        testimDots[slide].classList.add("active");

        currentActive = currentSlide;
    
        clearTimeout(testimTimer);
        testimTimer = setTimeout(function() {
            playSlide(currentSlide += 1);
        }, testimSpeed)
    }

    testimLeftArrow.addEventListener("click", function() {
        playSlide(currentSlide -= 1);
    })

    testimRightArrow.addEventListener("click", function() {
        playSlide(currentSlide += 1);
    })    

    for (var l = 0; l < testimDots.length; l++) {
        testimDots[l].addEventListener("click", function() {
            playSlide(currentSlide = testimDots.indexOf(this));
        })
    }

    playSlide(currentSlide);

    // keyboard shortcuts
    document.addEventListener("keyup", function(e) {
        switch (e.keyCode) {
            case 37:
                testimLeftArrow.click();
                break;
                
            case 39:
                testimRightArrow.click();
                break;

            case 39:
                testimRightArrow.click();
                break;

            default:
                break;
        }
    })
		
		testim.addEventListener("touchstart", function(e) {
				touchStartPos = e.changedTouches[0].clientX;
		})
	
		testim.addEventListener("touchend", function(e) {
				touchEndPos = e.changedTouches[0].clientX;
			
				touchPosDiff = touchStartPos - touchEndPos;
			
				console.log(touchPosDiff);
				console.log(touchStartPos);	
				console.log(touchEndPos);	

			
				if (touchPosDiff > 0 + ignoreTouch) {
						testimLeftArrow.click();
				} else if (touchPosDiff < 0 - ignoreTouch) {
						testimRightArrow.click();
				} else {
					return;
				}
			
		})
}
</script>
  </body>
</html>