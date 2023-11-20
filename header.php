<!-- <section class="" id="contact-hide" style="background:url('assets/img/header.gif');background-size:cover;background-repeat:no-repeat;background-position:center;height:20vh;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex">
                    <img src="assets/img/header.gif" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>  -->

<section class="bg-light-1 pt-2" id="contact-hide">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="d-flex justify-content-center">
                    <p> <img src="assets/img/mail.png"   style="width:12%;height:auto;"> <span class="font-size--3"> support@dreamstarz.in</span></p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="d-flex" id="animation-1">
                    <img src="assets/img/header.gif" class="img-fluid-4">
                </div>
            </div>
            <div class="col-md-5">
                <div class="">
                    <p>
                        <span id="icon-14">
                            <i class="fa fa-phone" style="font-size:20px;" aria-hidden="true"></i> <span class="font-size--3"> +91 80158 50331</span>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section> 

<section id="header-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="d-flex justify-content-center ml-3" id="header-menu1">
                    <a class="navbar-brand" href="index.php" > 
                        <img  id="logo-fontfamilly1"  src="assets/img/logo.jpg" alt="logo">
                    </a>
                </div>
            </div>
           
            <div class="col-md-6">
                  <!-- Button trigger modal -->
                  <div class="d-flex mt-5">
                    <input type="text" id="free-link" class="btn text-white" style="background:#f5600c;border:none;font-weight:bold;color:#ffffff !important;"  data-toggle="modal" data-target="#exampleModalCenter" value="Free Register">
                 </div>
                 <div class="d-flex mt-4" id="refer">
                    <a href="https://www.youtube.com/@dreamstarz" target="_blank"><input type="text" id="free-link1" class="btn text-white" style="background:#309f38;border:none;font-weight:bold;color:#ffffff !important;"  value="Subscribe To Earn"></a>
                 </div>
                 <div class="d-flex mt-4" id="refer1">
                    <input type="text" id="free-link2" class="btn text-white" style="background:#309f38;border:none;font-weight:bold;color:#ffffff !important;" data-toggle="modal" data-target="#refer_friend"  value="Refer To Earn">
                 </div>
                <!-- Modal -->
              
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header text-center">
                            <h5 class="modal-title" id="exampleModalLongTitle">FREE REGISTER</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <section>
                                <div class="container register">
                                    <div class="row">
                    
                                        <div class="col-md-12">
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                    <div class="row register-form">
                                                    <form action="reg.php" method="post" enctype="multipart/form-data" name="registration">
                                                        <div class="mb-3 row">
                                                            <div class="col-md-6">
                                                                <label for="recipient-name" class="col-form-label">Name</label>
                                                                <input  type="text" class="form-control" id="name" name="name" autocomplete="off" placeholder="Name" required>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="recipient-name" class="col-form-label">Age</label>
                                                                <input  type="text" class="form-control" id="age" name="age" autocomplete="off" placeholder="Age"  required>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="recipient-name" class="col-form-label">Email</label>
                                                                <input type="email" class="form-control" id="email" name="email" autocomplete="off" placeholder="Email"  required>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="recipient-name" class="col-form-label">Mobile</label>
                                                                <input  type="text" class="form-control" id="mobile" name="mobile" maxlength="10" autocomplete="off" placeholder="Mobile"   required>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="recipient-name" class="col-form-label">Members</label>
                                                                <select class="custom-select" id="members" name="members" autocomplete="off"  required>
                                                                    <option selected>Choose...</option>
                                                                    <option value="Artist">Artist</option>
                                                                    <option value="Technitions">Technicians</option>
                                                                    <option value="Kids">Kids</option>
                                                                    <option value="Models">Models</option>
                                                                    <option value="VJ/RJ">VJ/RJ</option>
                                                                    <option value="Content Creaters">Content Creaters</option>
                                                                    <option value="Memes Creaters">Memes Creaters</option>
                                                                    <option value="Youtubers">Youtubers</option>
                                                                </select>
                                                            </div>             
                                                            <div class="col-md-6">
                                                                <label for="recipient-name" class="col-form-label">Gender</label>
                                                                <select class="custom-select" id="gender" name="gender" autocomplete="off"  required>
                                                                    <option selected>Choose...</option>
                                                                    <option value="Male">Male</option>
                                                                    <option value="Female">Female</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="recipient-name" class="col-form-label">Country</label>
                                                                <input  type="text" class="form-control" id="country" name="country" placeholder="Country"  autocomplete="off" placeholder="Country"  required>
                                                            </div>  
                                                            <div class="col-md-6">
                                                                <label for="recipient-name" class="col-form-label">State</label>
                                                                <input  type="text" class="form-control" id="state" name="state" placeholder="State" autocomplete="off" placeholder="State"  required>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="recipient-name" class="col-form-label">City</label>
                                                                <input   type="text" class="form-control" id="city" name="city" placeholder="City" autocomplete="off" placeholder="City"  required>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="recipient-name" class="col-form-label">Photo</label>
                                                                <input type="file" class="form-control" id="photo" name="file" class="file" autocomplete="off"  required>
                                                                <span id="file_error"></span>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="recipient-name" class="col-form-label">Youtube Link</label>
                                                                <input  type="text" class="form-control" id="youtubelink" name="youtubelink" placeholder="Youtube Link" autocomplete="off">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="recipient-name" class="col-form-label">Facebook Link</label>
                                                                <input type="text" class="form-control" id="facebooklink" name="facebooklink" placeholder="Facebook Link" autocomplete="off">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="recipient-name" class="col-form-label">Instagram Link</label>
                                                                <input type="text" class="form-control" id="instagramlink" name="instagramlink" placeholder="Instagram Link" autocomplete="off">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="recipient-name" class="col-form-label">&nbsp;</label>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div align="center" class="mt-3">  
                                                                    <span class="text-danger"> Check Terms & Conditions:</span>
                                                                    <input type="checkbox" id="chkterms" required/> <br>
                                                                </div>  
                                                            </div>
                                                            <div class="modal-footer">
                                                                <input type="hidden" name="submit" id="submit" class="btn btn-primary" onclick="myFunction()">
                                                                <input type="submit" value="submit" name="submit" id="submit" class="btn btn-primary" onsubmit="return validateForm()" >
                                                            </div>

                                                        </div>
                                                    </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </section>
                        </div>
                    </div>
                </div>
              
            </div>
            <div class="col-md-6">
                <div class="modal fade" id="refer_friend" tabindex="-1" role="dialog" aria-labelledby="refer_friend" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header text-center">
                                <p class="modal-title" id="exampleModalLongTitle">Refer Your 5 Friends To Earn 1000 Rs in LuckyNumber</p>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <section>
                                    <div class="container register">
                                        <div class="row">
                        
                                            <div class="col-md-12">
                                                <div class="tab-content" id="myTabContent">
                                                    <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                        <div class="row register-form">
                                                        <form action="refer_friend.php" method="post" enctype="multipart/form-data" name="registration">
                                                        <div class="row mb-3">
                                                                <div class="col-md-12 mb-3">
                                                                <span>Refer Person Name</span>
                                                                </div>
                                                                <div class="col-md-6">
                                                                <input  type="text" class="form-control" id="refer_name" name="refer_name" autocomplete="off" placeholder="Name" required>
                                                                </div>
                                                                <div class="col-md-6">
                                                                <input  type="text" class="form-control" id="refer_mobile" name="refer_mobile" autocomplete="off" placeholder="Mobile" required>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <div class="col-md-12 mb-3">
                                                                <span>Refer Friends Name</span>
                                                                </div>
                                                                <div class="col-md-4">
                                                                
                                                                    <input  type="text" class="form-control" id="name" name="name" autocomplete="off" placeholder="Name" required>
                                                                </div>
                                                            
                                                                <div class="col-md-4">
                                                                    
                                                                    <input type="email" class="form-control" id="email" name="email" autocomplete="off" placeholder="Email"  required>
                                                                </div>
                                                                <div class="col-md-4">
                                                                
                                                                    <input  type="text" class="form-control" id="mobile" name="mobile" maxlength="10" autocomplete="off" placeholder="Mobile"   required>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <div class="col-md-4">
                                                                    
                                                                    <input  type="text" class="form-control" id="name_first" name="name_first" autocomplete="off" placeholder="Name" required>
                                                                </div>
                                                            
                                                                <div class="col-md-4">
                                                                
                                                                    <input type="email" class="form-control" id="email_first" name="email_first" autocomplete="off" placeholder="Email"  required>
                                                                </div>
                                                                <div class="col-md-4">
                                                                
                                                                    <input  type="text" class="form-control" id="mobile_first" name="mobile_first" maxlength="10" autocomplete="off" placeholder="Mobile"   required>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <div class="col-md-4">
                                                                
                                                                    <input type="text" class="form-control" id="name" name="name_second" autocomplete="off" placeholder="Name" required>
                                                                </div>
                                                            
                                                                <div class="col-md-4">
                                                                
                                                                    <input  type="email" class="form-control" name="email_second" autocomplete="off" placeholder="Email"  required>
                                                                </div>
                                                                <div class="col-md-4">
                                                                
                                                                    <input  type="text" class="form-control" id="mobile" name="mobile_second" maxlength="10" autocomplete="off" placeholder="Mobile"   required>
                                                                </div>
                                                            </div>
                                                            <div class=" row mb-3">
                                                                <div class="col-md-4">
                                                                
                                                                    <input type="text" class="form-control" id="name" name="name_third" autocomplete="off" placeholder="Name" required>
                                                                </div>
                                                            
                                                                <div class="col-md-4">
                                                            
                                                                    <input type="email" class="form-control" id="email" name="email_third" autocomplete="off" placeholder="Email"  required>
                                                                </div>
                                                                <div class="col-md-4">
                                                                
                                                                    <input  type="text" class="form-control" id="mobile" name="mobile_third" maxlength="10" autocomplete="off" placeholder="Mobile"   required>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <div class="col-md-4">
                                                                
                                                                    <input  type="text" class="form-control" id="name" name="name_four" autocomplete="off" placeholder="Name" required>
                                                                </div>
                                                            
                                                                <div class="col-md-4">
                                                                
                                                                    <input type="email" class="form-control" id="email" name="email_four" autocomplete="off" placeholder="Email"  required>
                                                                </div>
                                                                <div class="col-md-4">
                                                            
                                                                    <input type="text" class="form-control" id="mobile" name="mobile_four" maxlength="10" autocomplete="off" placeholder="Mobile"   required>
                                                                </div>
                                                            </div>
                                        
                                                            <div class="modal-footer">
                                                                    <input type="hidden" name="submit" id="submit" class="btn btn-primary" onclick="myFunction()" />
                                                                    <input type="submit" value="submit" name="submit" id="submit" class="btn btn-primary" onsubmit="return validateForm()" ></input>
                                                            </div>
                                                        </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="background:linear-gradient(176deg, #c21cc5, #f10000);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light " id="main_navbar">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse logo-fontfamilly" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="artist.php">Artist</a>
                                </li>
                                <!-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li></li>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <li class="nav-item dropdown">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <div class="dropdown-divider"></div>
                                            <li></li>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <li class="nav-item dropdown">
                                                <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Dropdown
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <div class="dropdown-divider"></div>
                                                <li></li>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    </ul>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link" href="technitions.php">Technicians</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="mens.php">Mens</a>
                                </li> -->
                                <!-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li></li>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <li class="nav-item dropdown">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <div class="dropdown-divider"></div>
                                            <li></li>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <li class="nav-item dropdown">
                                                <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Dropdown
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <div class="dropdown-divider"></div>
                                                <li></li>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    </ul>
                                </li> -->
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="womens.php">Womens</span></a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link" href="kids.php">Kids</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="models.php">Models</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="vj_rj.php">Vj/Rj</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="youtubers.php">Youtubers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="content_creater.php">Content Creators</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="memes_creater.php">Memes Creators</a>
                                </li>
                               
                                <li class="nav-item">
                                    <a class="nav-link" href="promotion.php">Promotion For Youtube/Instagram</a>
                                </li>
                    
                            </ul>                                                               
                        </div>
                    </nav>
            </div>
        </div>
    </div>
</section>

<script>
function myFunction() {
  if(!submit)
  {
    alert("Please Enter valid details..");
  }
  else{
    alert("Registerd successful");
  }
 
}
</script>

<script type="text/javascript">  
    $(function () {  
    $('#submit').click (function () {  
    if ($('#chkterms').is(':checked')) {  
    alert ('you agreed conditions')  
    }  
    else {  
    alert ('please check terms & conditions')  
    }  
    })  
    })  
</script>  
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

