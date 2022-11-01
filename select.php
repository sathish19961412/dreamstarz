<!DOCTYPE html>
<html lang="en">
<head>
    <title>Country-State-City Dependency dropdown - CodingBirdsOnline.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
<?php
include "server.php";
include_once "Common.php";
$common = new Common();
$allCountries = $common->getCountries($conn);
?>
<div class="col-md-4">
        <label>Country <span style="color:red">*</span></label>
        <select name="country" id="countryId" class="form-control" onchange="getStatesByCountry(this.value);" >
            <option value="">Country</option>
            <?php
            if ($allCountries->num_rows > 0 ){
                while ($country = $allCountries->fetch_object() ) {
                    $countryId = $country->id;
                    $countryName = $country->name;?>
                    <option value="<?php echo $countryId;?>"><?php echo $countryName;?></option>
                <?php }
            }
            ?>

        </select>
</div>
<div class="col-md-4">
       <label>State <span style="color:red">*</span></label>
        <select class="form-control" name="state" id="stateId" onchange="getCityByState(this.value);"  >
            <option value="">State</option>
        </select>

</div>
       
<div class="col-md-4">
       <label>City <span style="color:red">*</span></label>
        <select class="form-control" name="city" id="cityDiv">
            <option value="">City</option>
        </select>
</div>
      

<script>
    function getStatesByCountry() {
        var countryId = $("#countryId").val();
        $.post("ajax.php",{getStatesByCountry:'getStatesByCountry',countryId:countryId},function (response) {
           // alert(response);
            var data = response.split('^');
            var stateData = data[1];
            $("#stateId").html(stateData);
        });
    }

    function getCityByState() {
        var stateId = $("#stateId").val();
        $.post("ajax.php",{getCityByState:'getCityByState',stateId:stateId},function (response) {
            // alert(response);
            var data = response.split('^');
            var cityData = data[1];
            $("#cityDiv").html(cityData);
        });
    }
</script>
</body>
</html>