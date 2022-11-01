<!DOCTYPE html>
<html>
    <head>
       
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
        </script><script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
<style>
.register{
background: -webkit-linear-gradient(left, #3931af, #00c6ff);
margin-top: 3%;
padding: 3%;
}
.register-left{
text-align: center;
color: #fff;
margin-top: 4%;
}
.register-left input{
border: none;
border-radius: 1.5rem;
padding: 2%;
width: 60%;
background: #f8f9fa;
font-weight: bold;
color: #383d41;
margin-top: 30%;
margin-bottom: 3%;
cursor: pointer;
}
.register-right{
background: #f8f9fa;
border-top-left-radius: 10% 50%;
border-bottom-left-radius: 10% 50%;
}
.register-left img{
margin-top: 15%;
margin-bottom: 5%;
width: 25%;
-webkit-animation: mover 2s infinite alternate;
animation: mover 1s infinite alternate;
}
@-webkit-keyframes mover {
0% { transform: translateY(0); }
100% { transform: translateY(-20px); }
}
@keyframes mover {
0% { transform: translateY(0); }
100% { transform: translateY(-20px); }
}
.register-left p{
font-weight: lighter;
padding: 12%;
margin-top: -9%;
}
.register .register-form{
padding: 10%;
margin-top: 10%;
}
.btnRegister{
float: right;
margin-top: 10%;
border: none;
border-radius: 1.5rem;
padding: 2%;
background: #0062cc;
color: #fff;
font-weight: 600;
width: 50%;
cursor: pointer;
}
.register .nav-tabs{
margin-top: 3%;
border: none;
background: #0062cc;
border-radius: 1.5rem;
width: 28%;
float: right;
}
.register .nav-tabs .nav-link{
padding: 2%;
height: 34px;
font-weight: 600;
color: #fff;
border-top-right-radius: 1.5rem;
border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
border: none;
}
.register .nav-tabs .nav-link.active{
width: 100px;
color: #0062cc;
border: 2px solid #0062cc;
border-top-left-radius: 1.5rem;
border-bottom-left-radius: 1.5rem;
}
.register-heading{
text-align: center;
margin-top: 8%;
margin-bottom: -15%;
color: #495057;
}
</style>
</head>
<body>
<?php
include "server.php";
include_once "Common.php";
$common = new Common();
$allCountries = $common->getCountries($conn);
?>
    <section>
    <div class="container register">
        <div class="row">
            <div class="col-md-12 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading" style="color:#3931af;">REGISTER</h3>
                        <div class="row register-form">
                            <form action="reg.php" method="post" enctype="multipart/form-data" name="registration">
                                    <div class="mb-3 row">
                                        <div class="col-md-6">
                                            <label for="recipient-name" class="col-form-label">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" autocomplete="off" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="recipient-name" class="col-form-label">Age</label>
                                            <input type="text" class="form-control" id="age" name="age" autocomplete="off"  required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="recipient-name" class="col-form-label">Members</label>
                                            <select class="custom-select" id="members" name="members" autocomplete="off"  required>
                                                <option selected>Choose...</option>
                                                <option value="Artist">Artist</option>
                                                <option value="Technitions">Technitions</option>
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
                                            <label for="recipient-name" class="col-form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" autocomplete="off"  required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="recipient-name" class="col-form-label">Mobile</label>
                                            <input type="text" class="form-control" id="mobile" name="mobile" maxlength="10" autocomplete="off"  required>
                                        </div>
                                        <?php include_once('select.php');?>
                                        <div class="col-md-6">
                                            <label for="recipient-name" class="col-form-label">Photo</label>
                                            <input type="file" class="form-control" id="photo" name="file" autocomplete="off"  required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="recipient-name" class="col-form-label">Youtube Link</label>
                                            <input type="text" class="form-control" id="youtubelink" name="youtubelink" autocomplete="off">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="recipient-name" class="col-form-label">Facebook Link</label>
                                            <input type="text" class="form-control" id="facebooklink" name="facebooklink" autocomplete="off">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="recipient-name" class="col-form-label">Instagram Link</label>
                                            <input type="text" class="form-control" id="instagramlink" name="instagramlink" autocomplete="off">
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

</body>
</html>


<?php
include_once 'server.php'; 

if(isset($_POST['submit']))
{
   
    $name=$_POST['name'];
    $age=$_POST['age'];
    $members=$_POST['members'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $country=$_POST['country'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $youtubelink=$_POST['youtubelink'];
    $facebooklink=$_POST['facebooklink'];
    $instagramlink=$_POST['instagramlink'];
    //$photo=$_POST['photo'];
    $file=$_FILES['file']['name'];          
    $tmp_name=$_FILES['file']['tmp_name'];
    $target_dir="assets/upload/".$file;         
          if(move_uploaded_file($tmp_name,$target_dir))
          {
            echo "";
          }  


    $sqlinsert = "INSERT INTO registeration (name,age,members,gender,email,mobile,country,city,state,photo,youtubelink,facebooklink,instagramlink) 
                  VALUES ('$name', '$age','$members','$gender','$email','$mobile','$country','$city',' $state','$file','$youtubelink','$facebooklink','$instagramlink')";
    
    mysqli_query($conn, $sqlinsert);

    echo "<script>window.location.href='index.php';</script>";
        
    if($sqlinsert)
    {
        echo '<script type="text/javascript">';
        echo '<script>window.alert("Successfully Registered");</script>';
        echo '</script>';
    }
     

}

$conn->close();
 
?>