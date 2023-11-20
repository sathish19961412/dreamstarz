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
    .banner-1 
    {
        background: url(assets/img/banner/admin.png);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height:30vh;
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
        margin-top: 100px;
        padding-top: 30px;
        padding-bottom: 30px;
        background:#ebebeb;
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
  
  </style>
  <body>
   <?php include_once "header.php";?>
   <section class="banner-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                </div>
            </div>
        </div>
   </section>
   <section class="pb-5">
       <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center pt-5" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500" data-aos-once="true">
                        <h3 style="font-weight: 800;">Admin Permission </h3>
                        <div class="line-1"></div>
                        <div class="line-2"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card" style="width: 12rem;">
                        <img class="card-img-top" src="assets/img/images/model.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <a href="artist_permission.php" class="btn btn-danger font-weight-bold">Artist</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 12rem;">
                        <img class="card-img-top" src="assets/img/images/model.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <a href="tech_permission.php" class="btn btn-danger font-weight-bold">TECH</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-3">
                    <div class="card" style="width: 12rem;">
                        <img class="card-img-top" src="assets/img/images/model.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <a href="kids_permission.php" class="btn btn-danger font-weight-bold">Kids</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-3">
                    <div class="card" style="width: 12rem;">
                        <img class="card-img-top" src="assets/img/images/model.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <a href="model_permission.php" class="btn btn-danger font-weight-bold">Model</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                   <div class="card" style="width: 12rem;">
                        <img class="card-img-top" src="assets/img/images/model.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <a href="vj_rj_permission.php" class="btn btn-danger font-weight-bold">Vj/Rj </a>
                        </div>
                    </div>
                </div>
              
               
                <div class="col-md-3 mt-3">
                    <div class="card" style="width: 12rem;">
                        <img class="card-img-top" src="assets/img/images/model.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <a href="content_permission.php" class="btn btn-danger font-weight-bold">Content </a>
                        </div>
                    </div>
                </div>
               
                <div class="col-md-3 mt-3">
                    <div class="card" style="width: 12rem;">
                        <img class="card-img-top" src="assets/img/images/model.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <a href="memes_permission.php" class="btn btn-danger font-weight-bold">Memes</a>
                        </div>
                    </div>
                </div>
                 
                <div class="col-md-3 mt-3">
                    <div class="card" style="width: 12rem;">
                        <img class="card-img-top" src="assets/img/images/model.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <a href="youtubers_permisssion.php" class="btn btn-danger font-weight-bold">Youtubers </a>
                        </div>
                    </div>
                </div>
            </div>
       </div>
   </section>
   <?php include_once "footer.php"; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--jQuery-->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
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