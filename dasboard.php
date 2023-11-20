<?php 
    session_start();

    if (isset($_SESSION['id']) && isset($_SESSION['name'])) {

 ?>
<!doctype html>
<html lang="en">
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
    <link rel="stylesheet" media="screen" href="assets/css/media.css">
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
    <!-- <link href='assets/DataTables/datatables.min.css' rel='stylesheet' type='text/css'> -->
    <!-- DataTables CSS library -->
    <link rel="stylesheet" type="text/css" href="assets/DataTables/datatables.min.css"/>
    <!-- jQuery library -->
    <script src="js/jquery.min.js"></script>
    <!-- DataTables JS library -->
    <script type="text/javascript" src="assets/DataTables/datatables.min.js"></script>
     <!--DataTables Use Excel,Pdf Libirary-->
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
    <!--Custom Paganation -->
    <title>shinestarz | Admin</title>
  </head>
  <style>
    #padding-1
    {
        padding-top:15px;
    }
    .title-size
    {
        font-size:12px;
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
    #artist
    {
        background:url("assets/img/banner/admin.png");
        background-size: cover;
        background-position: center;
        background-repeat:no-repeat;
        height:26vh;
    }
    #logout
    {
        position: absolute;
        right: -42px;
        top: 95px;
    }
    #photo
    {
        width: 100%;
        height: 285px;
    }
    
#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

  </style>
  <body>
 
   <section id="artist">
       <div class="container">
           <div class="row">
                <div class="col-md-12">
                    <div id="logout">
                       <a href="admin-logout.php" class="btn btn-danger">Logout</a>
                    </div> 
                </div>
           </div>
       </div>
   </section>
   <section>
       <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class=" mt-5">
                      
                    </div>
                    <div class="text-center pt-5">
                        <h3 style="font-weight: 800;color:#ff5b00;" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500" data-aos-once="true">Hello, <?php echo $_SESSION['name']; ?></h3>

                        <div class="line-1"></div>
                        <div class="line-2"></div>
                    </div>
                </div>
            </div>
       </div>
   </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <form  method="POST" action="admin-artist-reg.php" enctype="multipart/form-data">
                        <div class="row">
                                        <div class="col">
                                            <div class="d-flex justify-content-center">
                                                <a href="admin-artist-reg.php"><input type="submit" value="Add Artist" name="add" onclick="location.reload()" class="btn btn-info btn-sm text-white"></a>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex justify-content-center">
                                                <a href="admin-artist-reg.php"><input type="submit" value="Add Technitions" name="technitions"  onclick="location.reload()" class="btn btn-danger btn-sm text-white"></a>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex justify-content-center">
                                                <a href="admin-artist-reg.php"><input type="submit" value="Add Vj/Rj" name="vjrj"  onclick="location.reload()" class="btn btn-warning btn-sm text-white"></a>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex justify-content-center">
                                                <a href="admin-artist-reg.php"><input type="submit" value="Add Womens" name="womens" onclick="location.reload()"  class="btn btn-success btn-sm text-white"></a>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex justify-content-center">
                                                <a href="admin-artist-reg.php"><input type="submit" value="Add Kids" name="kids" onclick="location.reload()"  class="btn btn-primary btn-sm text-white"></a>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex justify-content-center">
                                                <a href="admin-artist-reg.php"><input type="submit" value="Add Oldage" name="oldage" onclick="location.reload()"  class="btn btn-secondary btn-sm text-white"></a>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex justify-content-center">
                                                <a href="admin-artist-reg.php"><input type="submit" value="Models" name="models" onclick="location.reload()"  class="btn btn-success btn-sm text-white"></a>
                                            </div>
                                        </div>
                        </div>
                        <div class="d-flex mt-5 mb-3">
                            <a href="admin_permission_view.php" style="text-decoration:none;" class="bg-danger text-white font-weight-bold p-1">Admin Permission</a>
                        </div>
                        <div class="d-flex  mb-3">
                            <button onclick="ExportToExcel('xlsx')" class="bg-success text-white font-weight-bold p-1">Export table to excel</button>
                        </div>
                        <table id="tbl_exporttable_to_xls" class="table table-striped table-responsive example" >
                                                            <thead>
                                                                <tr>
                                                                    <th>SNO</th>
                                                                    <th>Name</th>
                                                                    <th>Age</th>
                                                                    <th>Members</th>
                                                                    <th>Gender</th>
                                                                    <th>Email</th>
                                                                    <th>Mobile</th>
                                                                    <th>Country</th>
                                                                    <th>City</th>
                                                                    <th>State</th>
                                                                    <th>Photo</th>
                                                                    <th>YoutubeLink</th>
                                                                    <th>FacebookLink</th>
                                                                    <th>InstagramLink</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody> 
                                                            
                                                            <tr>
                                                            <?php
                                                                    include_once 'server.php'; 
                                                                    $query=mysqli_query($conn,"SELECT*FROM registeration");
                                                                    while($row=mysqli_fetch_array($query))
                                                                    {
                                                                            $artistid=$row['id'];
                                                                            $name = $row['name'];
                                                                            $age = $row['age'];
                                                                            $members = $row['members'];
                                                                            $gender = $row['gender'];
                                                                            $email = $row['email'];
                                                                            $mobile = $row['mobile'];
                                                                            $country=$row['country'];
                                                                            $city=$row['city'];
                                                                            $state=$row['state'];
                                                                            $photo  = $row['photo'];
                                                                            $youtubelink=$row['youtubelink'];
                                                                            $facebooklink=$row['facebooklink'];
                                                                            $instagramlink=$row['instagramlink'];
                                                            ?>
                                                                   
                                                                    <td class="td-questionlist ">
                                                                        <div>
                                                                            <h6>
                                                                                <?php echo $row['id']; ?> 
                                                                                <input type="hidden" value="<?php echo $row['id']; ?>" name="id[]">
                                                                                <!-- <input type="checkbox" value="<?php echo $row['id']; ?>" name="name[]"> -->
                                                                            </h6>
                                                                        </div>
                                                                    </td>
                                                                    <td class="td-questionlist">
                                                                            <?php echo $row['name']; ?>
                                                                            <input type="hidden" value="<?php echo $row['name']; ?>" name="name[]">
                                                                            <input type="checkbox" value="<?php echo $row['name']; ?>" name="id[]">
                                                                    </td>
                                                                    <td class="td-questionlist">
                                                                        <div>
                                                                            <h6>
                                                                                <?php echo $row['age']; ?> 
                                                                                <input type="hidden" value="<?php echo $row['age']; ?>" name="age[]">
                                                                                <!-- <input type="checkbox" value="<?php echo $row['age']; ?>" name="name[]"> -->
                                                                            </h6>
                                                                        </div>
                                                                    </td>
                                                                    <td class="td-questionlist ">
                                                                        <div>
                                                                            <h6>
                                                                                <?php echo $row['members']; ?> 
                                                                                <input type="hidden" value="<?php echo $row['members']; ?>" name="members[]">
                                                                                <!-- <input type="checkbox" value="<?php echo $row['members']; ?>" name="name[]"> -->
                                                                            </h6>
                                                                        </div>
                                                                    </td>
                                                                    <td class="td-questionlist">
                                                                            <h6>
                                                                                <?php echo $row['gender']; ?> 
                                                                                <input type="hidden" value="<?php echo $row['gender']; ?>" name="gender[]">
                                                                                <!-- <input type="checkbox" value="<?php echo $row['gender']; ?>" name="name[]"> -->
                                                                            </h6>
                                                                    </td>
                                                                    <td class="td-questionlist">
                                                                            <h6>
                                                                                <?php echo $row['email']; ?> 
                                                                                <input type="hidden" value="<?php echo $row['email']; ?>" name="email[]">
                                                                                <!-- <input type="checkbox" value="<?php echo $row['email']; ?>" name="name[]"> -->
                                                                            </h6>
                                                                    </td>
                                                                    <td class="td-questionlist">
                                                                            <h6>
                                                                                <?php echo $row['mobile']; ?> 
                                                                                <input type="hidden" value="<?php echo $row['mobile']; ?>" name="mobile[]">
                                                                                <!-- <input type="checkbox" value="<?php echo $row['mobile']; ?>" name="name[]"> -->
                                                                            </h6>
                                                                    </td>
                                                                    <td class="td-questionlist">
                                                                        <div>
                                                                            <img src="assets/upload/<?php echo  $photo  = $row['photo']; ?>" id="photo" name="id[]" style="width:50px;height:auto;">
                                                                            <input type="hidden" value="<?php echo  $photo  = $row['photo']; ?>" name="photo[]">
                                                                            <!-- <input type="checkbox" value="<img src='assets/upload/<?php echo  $photo  = $row['photo']; ?>'" name="name[]"> -->
                                                                        </div>
                                                                    </td>
                                                                   
                                                                    <td class="td-questionlist">
                                                                        <span>
                                                                                <?php echo $row['country']; ?> 
                                                                                <input type="hidden" value="<?php echo $row['country']; ?>" name="country[]">
                                                                                <!-- <input type="checkbox" value="<?php echo $row['country']; ?>" name="name[]"> -->
                                                                        </span>
                                                                    </td>
                                                                    <td class="td-questionlist">
                                                                        <span>
                                                                                <?php echo $row['city']; ?> 
                                                                                <input type="hidden" value="<?php echo $row['city']; ?>" name="city[]">
                                                                                <!-- <input type="checkbox" value="<?php echo $row['city']; ?>" name="name[]"> -->
                                                                        </span>
                                                                    </td>
                                                                    <td class="td-questionlist">
                                                                        <span> 
                                                                                <?php echo $row['state']; ?> 
                                                                                <input type="hidden" value="<?php echo $row['state']; ?>" name="state[]">
                                                                                <!-- <input type="checkbox" value="<?php echo $row['state']; ?>" name="name[]"> -->
                                                                        </span>
                                                                    </td>
                                                                    <td class="td-questionlist">
                                                                        <span> 
                                                                            <?php echo $row['youtubelink']; ?> 
                                                                            <input type="hidden" value="<?php echo $row['youtubelink']; ?>" name="youtubelink[]">
                                                                            <!-- <input type="checkbox" value="<?php echo $row['youtubelink']; ?>" name="name[]"> -->
                                                                        </span>
                                                                    </td>
                                                                    <td class="td-questionlist">
                                                                        <span> 
                                                                            <?php echo $row['facebooklink']; ?> 
                                                                            <input type="hidden" value="<?php echo $row['facebooklink']; ?>" name="facebooklink[]">
                                                                            <!-- <input type="checkbox" value="<?php echo $row['facebooklink']; ?>" name="name[]"> -->
                                                                        </span>
                                                                    </td>
                                                                    <td class="td-questionlist">
                                                                        <span> 
                                                                            <?php echo $row['instagramlink']; ?> 
                                                                            <input type="hidden" value="<?php echo $row['instagramlink']; ?>" name="instagramlink[]">
                                                                            <!-- <input type="checkbox" value="<?php echo $row['instagramlink']; ?>" name="name[]"> -->
                                                                        </span>
                                                                    </td>
                                                                </tr> 
                                                                
                                                                <?php    
                                                                    }
                                                                ?>
                                
                                                            </tbody>
                        </table>
                        </form>
                        
                </div>
            </div>
        </div>
    </section>

<script >
$( document ).ready(function() {
    $('.example').DataTable({
            "processing": true,
            "sAjaxSource":"response.php",
            "dom": 'lBfrtip',
            "buttons": [
                {
                    extend: 'collection',
                    text: 'Export',
                    buttons: [
                        'copy',
                        'excel',
                        'csv',
                        'pdf',
                        'print'
                    ]
                    checkbox:
                    [
                        
                    ]
                }
            ]
            });
});
</script>

 
<script>

function ExportToExcel(type, fn, dl) {
    var elt = document.getElementById('tbl_exporttable_to_xls');
    var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });
    return dl ?
        XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }) :
        XLSX.writeFile(wb, fn || ('MySheetName.' + (type || 'xlsx')));
}

</script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- Datatable JS -->
<script src="assets/DataTables/datatables.min.js"></script>
<!--Popper Js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!--Bootstrap 4 Js-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   <!-- SLIDER REVOLUTION -->
<!--BootNavbar Js-->
<script src="js/bootnavbar.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
     $(document).ready(function() {
            $('.example').DataTable();
        } );
</script>

<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("memListTable");
    li = ul.getElementsByTagName("span");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("input")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
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

<script>
    //Filter Recruiters
$('select#sort-recruiters').change(function() {
	var filter = $(this).val();
	filterList(filter);
});

// Recruiters filter function
function filterList(value) {
	var list = $(".actor .recruiter-info");
	$(list).hide();
	if (value == "All") {
		$(".actor").find("article").each(function (i) {
			$(this).show();
		});
	} else {
		// *=" means that if a data-custom type contains multiple values, it will find them
		$(".actor").find("article[data-custom-type*=" + value + "]").each(function (i) {
			$(this).show();
		});
	}
}
</script> 
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>