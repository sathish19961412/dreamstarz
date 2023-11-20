
<?php
include_once('server.php'); 

if(isset($_POST['submit']))
{
    $refer_name=$_POST['refer_name'];
    $refer_mobile=$_POST['refer_mobile'];
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $name_first=$_POST['name_first'];
    $mobile_first=$_POST['mobile_first'];
    $email_first=$_POST['email_first'];
    $name_second=$_POST['name_second'];
    $mobile_second=$_POST['mobile_second'];
    $email_second=$_POST['email_second'];
    $name_third=$_POST['name_third'];
    $mobile_third=$_POST['mobile_third'];
    $email_third=$_POST['email_third'];
    $name_four=$_POST['name_four'];
    $mobile_four=$_POST['mobile_four'];
    $email_four=$_POST['email_four'];
    


    $sqlinsert = "INSERT INTO refer_friend (refer_name,refer_mobile,name,mobile,email,name_first,mobile_first,email_first,name_second,mobile_second,email_second,name_third,mobile_third,email_third,name_four,mobile_four,email_four) 
                  VALUES ('$refer_name','$refer_mobile','$name','$mobile','$email','$name_first','$mobile_first','$email_first','$name_second','$mobile_second','$email_second','$name_third','$mobile_third','$email_third','$name_four','$mobile_four','$email_four')";
    
    mysqli_query($conn, $sqlinsert);

    echo "<script>window.location.href='index.php';</script>";
        
    if($sqlinsert)
    {
        alert('Register Successfully');
    }else{
       alert('Unsuccessfully Register');
    }
     

}

$conn->close();
 
?>