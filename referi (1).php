
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Mr Campy
	
</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" type="image/png" href="https://viploot.in/Refer-And-Earn/images/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="https://viploot.in/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="https://viploot.in/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="https://viploot.in/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="https://viploot.in/css/animate.css">
	
	<link rel="stylesheet" type="text/css" href="https://viploot.in/css/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="https://viploot.in/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="https://viploot.in/css/select2.min.css">
	
	<link rel="stylesheet" type="text/css" href="https://viploot.in/css/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="https://viploot.in/css/util.css">
	<link rel="stylesheet" type="text/css" href="https://viploot.in/css/main1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Corben:wght@700&display=swap" rel="stylesheet">
<style>
.select100{
    padding:5px 3px;
    width:99%;
    border-radius:5px;
}    
</style>
</head>
<body>
	
<div class="limiter">
<div class="container-login100" style="background-image: url('https://viploot.in/css/bg-01.jpg');">
<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
<span class="login100-form-title p-b-25" style="font-size:25px !important;">

</span>

<?php

    

    if(!isset($_REQUEST["ref"])){


echo'
    
<form method="GET" action="" class="login100-form validate-form">
<span class="login100-form-title p-b-25" style="font-size:25px !important; font-family: "Corben", cursive;">
<strong>
Mr Campy<br>Refer and Earn</span>
<br> 
 <input type="hidden" value="'.$camp.'" name="camp">	
 <div>
    <span class="label-input100">Select Offer</span>
   
<select name="offer" class="select100 m-b-23" required>
    
<option value="A23">A23</option>

</select> 
<div>
<div class="wrap-input100 validate-input m-b-23" data-validate = "Number is reauired">
<input class="input100" type="number" name="ref" placeholder="Enter your Paytm number" maxlength="10"      oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">

<span class="focus-input100" data-symbol="&#xf206;"></span>
</div>
				    
    
<div class="container-login100-form-btn">
<div class="wrap-login100-form-btn">
<div class="login100-form-bgbtn"></div>
<button class="login100-form-btn">
Generate Refer Link
</button>
</div>
</div>

</form>    ';
    }
    if(isset($_REQUEST["ref"])){
$ref = $_GET['ref'];

$mo= base64_encode($ref);
$offer=$_GET['offer'];
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTP'] === 'on')   
         $url = "http://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
$link= "$url/$offer/?ref=$mo";
echo '

<div class="wrap-input100 validate-input m-b-23" data-validate = "Number is required">
<input   type="text" value="'.$link.'"
 id="myInput">

</div>
<div class="container-login100-form-btn">
<div class="wrap-login100-form-btn">

<div class="login100-form-bgbtn" ></div>
<button class="login100-form-btn" onclick="myFunction()">
Copy Refer Link
</button>
</div>
</div>
</div>

<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
</script>


';
}
    
        ?>
    
</center>    
    
    
</body>
