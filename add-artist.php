
<?php
include_once 'server.php'; 

if(isset($_POST['artist']))
{
   
    $name=$_POST['name'];
    $age=$_POST['age'];
    $members=$_POST['members'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $link=$_POST['link'];
    //$photo=$_POST['photo'];
    $file=$_FILES['file']['name'];          
    $tmp_name=$_FILES['file']['tmp_name'];
    $target_dir="assets/upload/".$file;         
    if(move_uploaded_file($tmp_name,$target_dir))
    {
        echo "";
    }  


    $sqlinsert = "INSERT into admin_artist_insertion(name,age,members,gender,email,mobile,city,state,photo,link) 
                  VALUES ('$name', '$age','$members','$gender','$email','$mobile','$city',' $state','$file','$link')";
    
    mysqli_query($conn, $sqlinsert);

    header('location:admin-dashboard.php');
        
    // if($sqlinsert)
    // {
    //     echo '<script language="javascript">';
    //     echo 'window.alert("Successfully Registered");';
    //     echo '</script>';
    // }
     

}

$conn->close();

?>