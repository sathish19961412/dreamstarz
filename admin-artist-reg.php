<?php
include_once('server.php');
if(isset($_POST['add']))
{

$checked_array=$_POST['id'];

foreach ($_POST['name'] as $key => $value)
{
    if(in_array($_POST['name'][$key],$checked_array))
    {
   
      $name=$_POST['name'][$key];
      $age=$_POST['age'][$key];
      $members=$_POST['members'][$key];
      $gender=$_POST['gender'][$key];
      $email=$_POST['email'][$key];
      $mobile=$_POST['mobile'][$key];
      $country=$_POST['country'][$key];
      $city=$_POST['city'][$key];
      $state=$_POST['state'][$key];
      $file=$_POST['photo'][$key];        
      $youtubelink=$_POST['youtubelink'][$key];
      $facebooklink=$_POST['facebooklink'][$key];
      $instagramlink=$_POST['instagramlink'][$key];  
    
            $sqlinsert = "INSERT INTO admin_artist_insertion (name,age,members,gender,email,mobile,country,city,state,photo,youtubelink,facebooklink,instagramlink) 
            VALUES ('$name', '$age','$members','$gender','$email','$mobile','$country','$city',' $state','$file','$youtubelink','$facebooklink','$instagramlink')";

          mysqli_query($conn, $sqlinsert);

          header('location:admin-dashboard.php');
    
            
        // if($sqlinsert)
        // {
        //     echo '<script type="text/javascript">';
        //     echo 'window.alert("Successfully Registered");';
        //     echo '</script>';
        // }
         
         
    }
}

}
?>

<?php
include_once('server.php');
if(isset($_POST['contentcreater']))
{

$checked_array=$_POST['id'];

foreach ($_POST['name'] as $key => $value)
{
    if(in_array($_POST['name'][$key],$checked_array))
    {
   
      $name=$_POST['name'][$key];
      $age=$_POST['age'][$key];
      $members=$_POST['members'][$key];
      $gender=$_POST['gender'][$key];
      $email=$_POST['email'][$key];
      $mobile=$_POST['mobile'][$key];
      $country=$_POST['country'][$key];
      $city=$_POST['city'][$key];
      $state=$_POST['state'][$key];
      $file=$_POST['photo'][$key];        
      $youtubelink=$_POST['youtubelink'][$key];
      $facebooklink=$_POST['facebooklink'][$key];
      $instagramlink=$_POST['instagramlink'][$key];  
    
          $sqlinsert = "INSERT INTO content_creater (name,age,members,gender,email,mobile,country,city,state,photo,youtubelink,facebooklink,instagramlink) 
          VALUES ('$name','$age','$members','$gender','$email','$mobile','$country','$city',' $state','$file','$youtubelink','$facebooklink','$instagramlink')";

          mysqli_query($conn, $sqlinsert);

          header('location:admin-dashboard.php');
         
    }
}

}
?>

<?php
include_once('server.php');
if(isset($_POST['memescreater']))
{

$checked_array=$_POST['id'];

foreach ($_POST['name'] as $key => $value)
{
    if(in_array($_POST['name'][$key],$checked_array))
    {
   
      $name=$_POST['name'][$key];
      $age=$_POST['age'][$key];
      $members=$_POST['members'][$key];
      $gender=$_POST['gender'][$key];
      $email=$_POST['email'][$key];
      $mobile=$_POST['mobile'][$key];
      $country=$_POST['country'][$key];
      $city=$_POST['city'][$key];
      $state=$_POST['state'][$key];
      $file=$_POST['photo'][$key];        
      $youtubelink=$_POST['youtubelink'][$key];
      $facebooklink=$_POST['facebooklink'][$key];
      $instagramlink=$_POST['instagramlink'][$key];  
    
          $sqlinsert = "INSERT INTO memes_creater (name,age,members,gender,email,mobile,country,city,state,photo,youtubelink,facebooklink,instagramlink) 
          VALUES ('$name','$age','$members','$gender','$email','$mobile','$country','$city',' $state','$file','$youtubelink','$facebooklink','$instagramlink')";

          mysqli_query($conn, $sqlinsert);

          header('location:admin-dashboard.php');
         
    }
}

}
?>
<?php
include_once('server.php');
if(isset($_POST['youtubers']))
{

$checked_array=$_POST['id'];

foreach ($_POST['name'] as $key => $value)
{
    if(in_array($_POST['name'][$key],$checked_array))
    {
   
      $name=$_POST['name'][$key];
      $age=$_POST['age'][$key];
      $members=$_POST['members'][$key];
      $gender=$_POST['gender'][$key];
      $email=$_POST['email'][$key];
      $mobile=$_POST['mobile'][$key];
      $country=$_POST['country'][$key];
      $city=$_POST['city'][$key];
      $state=$_POST['state'][$key];
      $file=$_POST['photo'][$key];        
      $youtubelink=$_POST['youtubelink'][$key];
      $facebooklink=$_POST['facebooklink'][$key];
      $instagramlink=$_POST['instagramlink'][$key];  
    
          $sqlinsert = "INSERT INTO youtubers (name,age,members,gender,email,mobile,country,city,state,photo,youtubelink,facebooklink,instagramlink) 
          VALUES ('$name','$age','$members','$gender','$email','$mobile','$country','$city',' $state','$file','$youtubelink','$facebooklink','$instagramlink')";

          mysqli_query($conn, $sqlinsert);

          header('location:admin-dashboard.php');
         
    }
}

}
?>
<?php
include_once('server.php');
if(isset($_POST['technitions']))
{

$checked_array=$_POST['id'];

foreach ($_POST['name'] as $key => $value)
{
    if(in_array($_POST['name'][$key],$checked_array))
    {
   
      $name=$_POST['name'][$key];
      $age=$_POST['age'][$key];
      $members=$_POST['members'][$key];
      $gender=$_POST['gender'][$key];
      $email=$_POST['email'][$key];
      $mobile=$_POST['mobile'][$key];
      $country=$_POST['country'][$key];
      $city=$_POST['city'][$key];
      $state=$_POST['state'][$key];
      $file=$_POST['photo'][$key];        
      $youtubelink=$_POST['youtubelink'][$key];
      $facebooklink=$_POST['facebooklink'][$key];
      $instagramlink=$_POST['instagramlink'][$key];  
    
            $sqlinsert = "INSERT INTO admin_technitions_insertion (name,age,members,gender,email,mobile,country,city,state,photo,youtubelink,facebooklink,instagramlink) 
            VALUES ('$name', '$age','$members','$gender','$email','$mobile','$country','$city',' $state','$file','$youtubelink','$facebooklink','$instagramlink')";

          mysqli_query($conn, $sqlinsert);

          header('location:admin-dashboard.php');
    
            
        // if($sqlinsert)
        // {
        //     echo '<script type="text/javascript">';
        //     echo 'window.alert("Successfully Registered");';
        //     echo '</script>';
        // }
         
         
    }
}

}
?>



<?php
include_once('server.php');
if(isset($_POST['kids']))
{
  
$checked_array=$_POST['id'];
foreach ($_POST['name'] as $key => $value)
{
    if(in_array($_POST['name'][$key],$checked_array))
    {
   
      $name=$_POST['name'][$key];
      $age=$_POST['age'][$key];
      $members=$_POST['members'][$key];
      $gender=$_POST['gender'][$key];
      $email=$_POST['email'][$key];
      $mobile=$_POST['mobile'][$key];
      $city=$_POST['city'][$key];
      $state=$_POST['state'][$key];
      $file=$_POST['photo'][$key];        
      $youtubelink=$_POST['youtubelink'][$key];
      $facebooklink=$_POST['facebooklink'][$key];
      $instagramlink=$_POST['instagramlink'][$key];  
    
            $sqlinsert = "INSERT INTO admin_kids_insertion (name,age,members,gender,email,mobile,city,state,photo,youtubelink,facebooklink,instagramlink) 
            VALUES ('$name', '$age','$members','$gender','$email','$mobile','$city',' $state','$file','$youtubelink','$facebooklink','$instagramlink')";

          mysqli_query($conn, $sqlinsert);

          header('location:admin-dashboard.php');
    
            
        // if($sqlinsert)
        // {
        //     echo '<script type="text/javascript">';
        //     echo 'window.alert("Successfully Registered");';
        //     echo '</script>';
        // }
         
    
    }
}
}
?>

<?php
include_once('server.php');
if(isset($_POST['models']))
{
  
$checked_array=$_POST['id'];
foreach ($_POST['name'] as $key => $value)
{
    if(in_array($_POST['name'][$key],$checked_array))
    {
   
      $name=$_POST['name'][$key];
      $age=$_POST['age'][$key];
      $members=$_POST['members'][$key];
      $gender=$_POST['gender'][$key];
      $email=$_POST['email'][$key];
      $mobile=$_POST['mobile'][$key];
      $city=$_POST['city'][$key];
      $state=$_POST['state'][$key];
      $file=$_POST['photo'][$key];        
      $youtubelink=$_POST['youtubelink'][$key];
      $facebooklink=$_POST['facebooklink'][$key];
      $instagramlink=$_POST['instagramlink'][$key];  
    
            $sqlinsert = "INSERT INTO admin_models_insertion (name,age,members,gender,email,mobile,city,state,photo,youtubelink,facebooklink,instagramlink) 
            VALUES ('$name', '$age','$members','$gender','$email','$mobile','$city',' $state','$file','$youtubelink','$facebooklink','$instagramlink')";

          mysqli_query($conn, $sqlinsert);

          header('location:admin-dashboard.php');
    
            
        // if($sqlinsert)
        // {
        //     echo '<script type="text/javascript">';
        //     echo 'window.alert("Successfully Registered");';
        //     echo '</script>';
        // }
         
    
    }
}
}
?>


<?php
include_once('server.php');
if(isset($_POST['vjrj']))
{

$checked_array=$_POST['id'];

foreach ($_POST['name'] as $key => $value)
{
    if(in_array($_POST['name'][$key],$checked_array))
    {
   
      $name=$_POST['name'][$key];
      $age=$_POST['age'][$key];
      $members=$_POST['members'][$key];
      $gender=$_POST['gender'][$key];
      $email=$_POST['email'][$key];
      $mobile=$_POST['mobile'][$key];
      $country=$_POST['country'][$key];
      $city=$_POST['city'][$key];
      $state=$_POST['state'][$key];
      $file=$_POST['photo'][$key];        
      $youtubelink=$_POST['youtubelink'][$key];
      $facebooklink=$_POST['facebooklink'][$key];
      $instagramlink=$_POST['instagramlink'][$key];  
    
            $sqlinsert = "INSERT INTO admin_vi_rj_insertion (name,age,members,gender,email,mobile,country,city,state,photo,youtubelink,facebooklink,instagramlink) 
            VALUES ('$name', '$age','$members','$gender','$email','$mobile','$country','$city',' $state','$file','$youtubelink','$facebooklink','$instagramlink')";

          mysqli_query($conn, $sqlinsert);

          header('location:admin-dashboard.php');
    
            
        // if($sqlinsert)
        // {
        //     echo '<script type="text/javascript">';
        //     echo 'window.alert("Successfully Registered");';
        //     echo '</script>';
        // }
         
         
    }
}

}
?>


