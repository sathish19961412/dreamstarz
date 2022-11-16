<section class="bg-light" id="header-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="d-flex justify-content-center ml-3" id="header-menu1" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true">
                    <p class="padd-1"><img src="assets/img/call.png"  id="icon-header" style="width:10%;height:auto;"><span >+91 8148990321</span></p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="d-flex justify-content-center" id="header-menu1" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true">
                    <p  class="padd-1" ><img src="assets/img/mail.png"  id="icon-header" style="width:10%;height:auto;"><span >support@dreamstarz.in</span></p>
                </div>
            </div>
            <div class="col-md-3">
                  <!-- Button trigger modal -->
                  <div class="d-flex mt-4" id="header-10">
                    <input type="text" class="btn text-white" style="background:#f5600c;border:none;font-weight:bold;color:#ffffff !important;"  data-toggle="modal" data-target="#exampleModalCenter" value="FREE REGISTER">
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
                                                                <input onkeydown="return /[a-z]/i.test(event.key)" type="text" class="form-control" id="name" name="name" autocomplete="off" placeholder="Name" required>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="recipient-name" class="col-form-label">Age</label>
                                                                <input onkeydown="return /[0-9]/i.test(event.key)" type="text" class="form-control" id="age" name="age" autocomplete="off" placeholder="Age"  required>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="recipient-name" class="col-form-label">Email</label>
                                                                <input type="email" class="form-control" id="email" name="email" autocomplete="off" placeholder="Email"  required>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="recipient-name" class="col-form-label">Mobile</label>
                                                                <input onkeydown="return /[0-9]/i.test(event.key)" type="text" class="form-control" id="mobile" name="mobile" maxlength="10" autocomplete="off" placeholder="Mobile"   required>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="recipient-name" class="col-form-label">Members</label>
                                                                <select class="custom-select" id="members" name="members" autocomplete="off"  required>
                                                                    <option selected>Choose...</option>
                                                                    <option value="Artist">Artist</option>
                                                                    <option value="Technitions">Technicians</option>
                                                                    <option value="Mens">Mens</option>
                                                                    <option value="Womens">Womens</option>
                                                                    <option value="Kids">Kids</option>
                                                                    <option value="Oldage">Oldage</option>
                                                                    <option value="Models">Models</option>
                                                                    <option value="VJ/RJ">VJ/RJ</option>
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
                                                                <input onkeydown="return /[a-z]/i.test(event.key)" type="text" class="form-control" id="country" name="country" placeholder="Country"  autocomplete="off" placeholder="Country"  required>
                                                            </div>  
                                                            <div class="col-md-6">
                                                                <label for="recipient-name" class="col-form-label">State</label>
                                                                <input  onkeydown="return /[a-z]/i.test(event.key)" type="text" class="form-control" id="state" name="state" placeholder="State" autocomplete="off" placeholder="State"  required>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="recipient-name" class="col-form-label">City</label>
                                                                <input  onkeydown="return /[a-z]/i.test(event.key)" type="text" class="form-control" id="city" name="city" placeholder="City" autocomplete="off" placeholder="City"  required>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="recipient-name" class="col-form-label">Photo</label>
                                                                <input type="file" class="form-control" id="photo" name="file" autocomplete="off"  required>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="recipient-name" class="col-form-label">Youtube Link</label>
                                                                <input  type="text" class="form-control" id="youtubelink" name="youtubelink" placeholder="Youtube Link          " autocomplete="off">
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
                                                            <div class="modal-footer">
                                                                <input type="hidden" name="submit" id="submit" class="btn btn-primary" onclick="myFunction()"></input>
                                                                <input type="submit" value="submit" name="submit" id="submit" class="btn btn-primary" onsubmit="return validateForm()" ></input>
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
            <div class="col-md-3">
                <div class="d-flex justify-content-center" id="header-menu2" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true">
                    <p class="padd-3">&nbsp;</p>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register here</h5>
      </div>
      <div class="modal-body">
        <form action="reg.php" method="post" enctype="multipart/form-data">
          <div class="mb-3 row">
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Artist Name</label>
                <input type="text" class="form-control" id="artistname" name="artistname">
              </div>
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Age</label>
                <input type="text" class="form-control" id="age" name="age">
              </div>
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Specialization</label>
                <select class="custom-select" id="specialization" name="specialization">
                    <option selected>Choose...</option>
                    <option value="Artist">Artist</option>
                    <option value="Technitions">Technicians</option>
                    <option value="Mens">Mens</option>
                    <option value="Womens">Womens</option>
                    <option value="Kids">Kids</option>
                    <option value="Oldage">Oldage</option>
                    <option value="Models">Models</option>
                </select>
              </div>             
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Experiance</label>
                <select class="custom-select" id="experiance" name="experiance">
                    <option selected>Choose...</option>
                    <option value="1year">1year</option>
                    <option value="2year">2year</option>
                    <option value="3year">3year</option>
                    <option value="4year">4year</option>
                    <option value="5year">5year</option>
                    <option value="6+year above">6+year above</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Place</label>
                <input type="text" class="form-control" id="place" name="place">
              </div>
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Mobile</label>
                <input type="text" class="form-control" id="mobile" name="mobile">
              </div>
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Photo</label>
                <input type="file" class="form-control" id="photo" name="file">
              </div>
              <div class="col-md-6">
                    <label for="recipient-name" class="col-form-label">User Type</label>
                    <select class="custom-select" id="inputGroupSelect01" name="user_type">
                        <option selected>Choose...</option>
                        <option value="admin">admin</option>
                        <option value="user">user</option>
                    </select>
              </div>


              <div class="modal-footer">
                <input type="hidden" name="submit" id="submit" class="btn btn-primary" onclick="myFunction()"></input>
                <input type="submit" value="submit" name="submit" id="submit" class="btn btn-primary" onclick="myFunction()"></input>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>

          </div>
          
        </form>
      </div>
      
    </div>
  </div>
</div>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light " id="main_navbar">
                        <a class="navbar-brand" href="index.php" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true"> 
                            <img  id="logo-fontfamilly"  src="assets/img/logo.jpg" alt="logo">
                        </a>
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
                                <li class="nav-item">
                                    <a class="nav-link" href="mens.php">Mens</a>
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
                                    <a class="nav-link" href="womens.php">Womens</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="kids.php">Kids</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="oldage.php">OldAge</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="models.php">Models</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adverstisement.php">Advertisement</a>
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
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

