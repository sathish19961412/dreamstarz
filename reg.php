
<?php
include "server.php";
include_once "Common.php";
$common = new Common();
$allCountries = $common->getCountries($conn);
?>

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